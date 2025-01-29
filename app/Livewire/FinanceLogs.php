<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\FinanceLog;
use Livewire\WithPagination;

class FinanceLogs extends Component
{
    use WithPagination;
    public $limit=5;
    public $log;
    protected $queryString = ['limit'];

    public function mount(){
        // $this->log=FinanceLog::first();
        // $this->categories = FinanceCategory::all();
        // $this->logs=FinanceLog::paginate($this->limit);
    }
    public function Edit(FinanceLog $log){
        // dd("here");
        // dd($log);
        $this->log = $log;
    }
    public function Close(){
        // dd("her");
        $this->log=null;
    }
    public function render()
    {
        $logs=FinanceLog::with('category')->paginate($this->limit);
        return view('livewire.finance-logs', compact('logs'));
    }
}
