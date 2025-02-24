<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'date',
        'amount'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
