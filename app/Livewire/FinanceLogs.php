<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\FinanceCategory;
use App\Models\FinanceLog;
use Livewire\WithPagination;

class FinanceLogs extends Component
{
    use WithPagination;
    public $limit=20;

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
    protected $queryString = ['limit'];

    public function mount(){
        $this->log=FinanceLog::first();
        // $this->categories = FinanceCategory::all();
        // $this->logs=FinanceLog::paginate($this->limit);
        // $this->Edit(FinanceLog::first());
        // $this->amount_dolar = 0;
        // $this->amount_cent = 0;
        $this->categories = FinanceCategory::all();
        // $this->date = now();
    }
    public function Edit(FinanceLog $log){
        // dd("here");
        // dd($log);
        $this->log = $log;
        $this->amount_dolar = $this->log->amount_dolar;
        $this->amount_cent = $this->log->amount_cent;
        $this->finance_category_id = $this->log->finance_category_id;
        $this->description_1 = $this->log->description_1;
        $this->description_2 = $this->log->description_2;
        $this->date = $this->log->date;
    }
    public function Close(){
        // dd("her");
        $this->log=null;
    }

    public function updated($name, $value)
    {
        $this->log->update([
            $name => $value,
        ]);
    }
    public function Delete(){
        // dd("here");
        // $this->log->delete();
        $temp = $this->log;
        $this->Close();
        $temp->delete();
    }
    public function render()
    {
        $logs=FinanceLog::with('category')->paginate($this->limit);
        return view('livewire.finance-logs', compact('logs'));
    }
}
