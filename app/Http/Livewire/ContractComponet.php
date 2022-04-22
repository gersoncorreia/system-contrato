<?php

namespace App\Http\Livewire;

use App\Models\Contrato;
use Livewire\Component;

class ContractComponet extends Component
{
    public Contrato $contrato;

    public function render()
    {
        return view('livewire.contract-componet');
    }

}
