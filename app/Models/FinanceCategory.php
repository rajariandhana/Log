<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FinanceCategory extends Model
{
    public function logs(): HasMany{
        return $this->hasMany(FinanceLog::class,'finance_category_id');
    }
    public function presets(): HasMany{
        return $this->hasMany(FinancePreset::class);
    }
}
