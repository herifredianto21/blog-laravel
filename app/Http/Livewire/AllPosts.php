<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class AllPosts extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = null;
    public $author = null;
    public $category = null;
    public $orderBy = 'desc';

    public function mount(){
        $this->resetPage();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function updatingCategory(){
        $this->resetPage();
    }

    public function updatingAuhtor(){
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.all-posts',[
            'posts'=> auth()->user()->type == 1 ? 
                            Post::search(trim($this->search))
                            ->when($this->category, function($query){
                                $query->where('category_id', $this->category);
                            })
                            ->when($this->author, function($query){
                                $query->where('author_id', $this->author);
                            })
                            ->when($this->orderBy, function($query){
                                $query->orderBy('id', $this->orderBy);
                            })
                            ->paginate($this->perPage) : 
                            Post::search(trim($this->search))
                            ->when($this->category, function($query){
                                $query->where('category_id', $this->category);
                            })
                            ->where('author_id', auth()->id())
                            ->when($this->orderBy, function($query){
                                $query->orderBy('id', $this->orderBy);
                            })
                            ->paginate($this->perPage)
        ]);
    }
}
