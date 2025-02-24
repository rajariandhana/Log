<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FinanceCategory;
use Livewire\Attributes\Validate;
use App\Models\FinanceLog;

class FinanceCreate extends Component
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
    public $success=false;
    // $amount_dolar, $amount_cent, $category_id, $description_1, $description_2;
    public function mount(){
        $this->categories = FinanceCategory::all();
        $this->date=now()->format('Y-m-d');
        $this->success=null;
    }
    public function Store(){
        // dd("here");
        $this->validate();
        FinanceLog::create(
            $this->only(['amount_dolar', 'amount_cent', 'finance_category_id', 'description_1', 'description_2','date'])
        );
        // $this->success='Log created successfully';
        $this->success=true;
        // session()->flash('success','Log created');
    }

    public function render()
    {
        return view('livewire.finance-create');
    }
}
