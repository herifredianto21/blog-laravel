<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Post;

class Categories extends Component
{
    public $category_name;
    public $selected_category_id;
    public $updateCategoryMode = false;

    public $subcategory_name;
    public $parent_category;
    public $selected_subcategory_id;
    public $updateSubCategoryMode = false;

    protected $listeners = [
        'resetModalForm',
        'deleteCategoryAction',
        'deleteSubCategoryAction'
    ];

    public function resetModalForm(){
        $this->resetErrorBag();
        $this->category_name = null;
        $this->subcategory_name = null;
        $this->parent_category = null;

    }

    public function addCategory(){
        $this->validate([
            'category_name'=>'required|unique:categories,category_name',
        ]);

        $category = new Category();
        $category->category_name = $this->category_name;
        $saved = $category->save();

        if ($saved) {
            $this->dispatchBrowserEvent('hideCategoriesModal');
            $this->category_name = null;
            $this->showToastr('New Category has been successfully added.','success');
        }else{
            $this->showToastr('Something went wrong.','error');
        }
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        $this->selected_category_id = $category->id;
        $this->category_name = $category->category_name;
        $this->updateCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('ShowCategoriesModal');
    }

    public function updateCategory(){
        if($this->selected_category_id){
            $this->validate([
                'category_name'=>'required|unique:categories,category_name,'.$this->selected_category_id,
            ]);
        }

        $category = Category::findOrFail($this->selected_category_id);
        $category->category_name = $this->category_name;
        $updated = $category->save();

        if ($updated) {
            $this->dispatchBrowserEvent('hideCategoriesModal');
            $this->updateCategoryMode = false;
            $this->showToastr('Category has been successfully update.','success');
        }else{
            $this->showToastr('Something went wrong','error');
        }
    }

    public function addSubCategory(){
        $this->validate([
            'parent_category'=>'required',
            'subcategory_name'=>'required|unique:sub_categories,subcategory_name',
        ]);

        $subcategory = new SubCategory();
        $subcategory->subcategory_name = $this->subcategory_name;
        $subcategory->slug = Str::slug($this->subcategory_name);
        $subcategory->parent_category = $this->parent_category;
        $saved = $subcategory->save();

        if($saved){
            $this->dispatchBrowserEvent('hideSubCategoriesModal');
            $this->parent_category = null;
            $this->subcategory_name = null;
            $this->showToastr('New SubCategory has been successfully added.','success');
        }else{
            $this->showToastr('Something went wrong','error');
        }
    }

    public function editSubCategory($id){
        $subcategory = SubCategory::findOrFail($id);
        $this->selected_subcategory_id = $subcategory->id;
        $this->parent_category = $subcategory->parent_category;
        $this->subcategory_name = $subcategory->subcategory_name;
        $this->updateSubCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showSubCategoriesModal');

    }

    public function updateSubCategory(){
        if($this->selected_subcategory_id){
            $this->validate([
                'parent_category'=>'required',
                'subcategory_name'=>'required|unique:sub_categories,subcategory_name,'.
                $this->selected_subcategory_id,
            ]);

            $subcategory = SubCategory::findOrFail($this->selected_subcategory_id);
            $subcategory->subcategory_name = $this->subcategory_name;
            $subcategory->slug = Str::slug($this->subcategory_name);
            $subcategory->parent_category = $this->parent_category;
            $updated = $subcategory->save();

            if($updated){
                $this->dispatchBrowserEvent('hideSubCategoriesModal');
                $this->updateSubCategoryMode = false;
                $this->showToastr('SubCategory has been successfully updated.','success');
            }else{
                $this->showToastr('Something went wrong.','error');
            }
        }
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $this->dispatchBrowserEvent('deleteCategory',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <b>'.$category->category_name.'</b> category',
            'id'=>$id
        ]);
    }

    public function deleteCategoryAction($id){
        $category = Category::where('id', $id)->first();
        $subcategories = SubCategory::where('parent_category',$category->id)->whereHas('posts')->with('posts')->get();

        if( !empty($subcategories) && count($subcategories) > 0){
            $totalPosts = 0;
            foreach($subcategories as $subcat){
                $totalPosts += Post::where('category_id', $subcat->id)->get()->count();
            }
            $this->showToastr('This Category has ('.$totalPosts.') posts related to it, cannot be delete.','error');
        }else{
            SubCategory::where('parent_category', $category->id)->delete();
            $category->delete();
            $this->showToastr('Category has been successfully deleted.','info');
        }
    }

    public function deleteSubCategory($id){
        $subcategory = SubCategory::find($id);
        $this->dispatchBrowserEvent('deleteSubCategory',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <b>'.$subcategory->subcategory_name.'</b> subcategory',
            'id'=>$id
        ]);
    }

    public function deleteSubCategoryAction($id){
        $subcategory = SubCategory::where('id', $id)->first();
        $posts = Post::where('category_id',$subcategory->id)->get()->toArray();

        if( !empty($posts) && count($posts) > 0){
            $this->showToastr('This subcategory has ('.count($posts).') posts related to it, cannot be delete.','error');
        }else{
            $subcategory->delete();
            $this->showToastr('Subcategory has been successfully deleted.','info');
        }
    }

    public function showToastr($message,$type){
        return $this->dispatchBrowserEvent('showToastr',[
            'type'=>$type,
            'message'=>$message
        ]);
    }

    public function render()
    {
        return view('livewire.categories',[
            'categories'=>Category::orderBy('ordering','asc')->get(),
            'subcategories'=>SubCategory::orderBy('ordering','asc')->get(),
        ]);
    }
}
