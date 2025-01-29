<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\FinanceCategory;
use App\Models\FinanceLog;

class FinanceUpdate extends Component
{
    #[Validate('required|numeric|min:0|max:9999')]
    public $amount_dolar;
    #[Validate('nullable|numeric|min:0|max:99')]
    public $amount_cent;
    #[Validate('required|exists:finance_categories,id')]
    public $finance_category_id;
    #[Validate('nullable|string')]
    public $description_1;
    #[Validate('nullable|string')]
    public $description_2;
    #[Validate('nullable|date')]
    public $date;

    public $categories;
    public $log;

    public function mount(){
        $this->amount_dolar = $this->log->amount_dolar;
        $this->amount_cent = $this->log->amount_cent;
        $this->finance_category_id = $this->log->finance_category_id;
        $this->description_1 = $this->log->description_1;
        $this->description_2 = $this->log->description_2;
        $this->categories = FinanceCategory::all();
        $this->date=now()->format('Y-m-d');
    }
    public function Update(){

    }
    public function render()
    {
        return view('livewire.finance-update');
    }
}
