<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AuthorProfileHeader extends Component
{
    public $author;

    protected $listeners = [
        'updateAuthorProfileHeader'=>'$refresh'
    ];

    public function mount()
    {
        $this->author = User::find(auth('web')->id());
    }

    public function render()
    {
        return view('livewire.author-profile-header');
    }
}
