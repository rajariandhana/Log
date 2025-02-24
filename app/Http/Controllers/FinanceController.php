<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinanceLog;
class FinanceController extends Controller
{
    public function index(){
        return view('finance.index');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'amount_dolar' => 'required|numeric',
            'amount_cent' => 'nullable|numeric|min:0|max:99',
            'category' => 'required|exists:finance_categories,id',
            'description_1' => 'nullable',
            'description_2' => 'nullable',
        ]);
    }
    public function logs(){
        return view('finance.logs');
    }
}
