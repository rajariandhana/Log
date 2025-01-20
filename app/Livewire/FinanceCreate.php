<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FinanceCategory;

class FinanceCreate extends Component
{
    public $categories;
    public function mount(){
        $this->categories = FinanceCategory::all();
    }
    public function render()
    {
        return view('livewire.finance-create');
    }
}
