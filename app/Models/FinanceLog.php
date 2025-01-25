<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FinanceLog extends Model
{
    protected $fillable = ['amount_dolar', 'amount_cent', 'description_1', 'description_2', 'finance_category_id', 'date'];
    // public function create($data){
    //     return $this->create($data);
    //     // return self::create($data);
    // }

    public function category(): BelongsTo{
        return $this->belongsTo(FinanceCategory::class);
    }
}
