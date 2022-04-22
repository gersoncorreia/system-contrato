<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersComponet extends Component
{
    public function render()
    {
        $users = User::paginate(3);
        return view('livewire.users-componet', compact('users'));
    }
}
