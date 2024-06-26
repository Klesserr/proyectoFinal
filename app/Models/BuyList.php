<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BuyList extends Model
{
    use HasFactory;
    protected $fillable = ['quantity'];

    public function ingredient():BelongsTo {
        return $this->belongsTo(Ingredient::class);
    }
}
