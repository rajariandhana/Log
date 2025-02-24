<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\FinanceCategory;

class FinanceLog extends Model
{
    protected $fillable = ['amount_dolar', 'amount_cent', 'description_1', 'description_2', 'finance_category_id', 'date'];

    public function category(): BelongsTo{
        return $this->belongsTo(FinanceCategory::class, 'finance_category_id');
    }
}
