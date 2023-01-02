<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;

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
        'resetModalForm'
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
