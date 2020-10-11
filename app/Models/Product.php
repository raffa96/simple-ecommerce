<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    protected $attributes = [
        'available' => 0
    ];

    public function getAvailableAttribute($attribute)
    {
        return $this->availableOptions()[$attribute];
    }

    public function availableOptions()
    {
        return [
            0 => 'NO',
            1 => 'SI'
        ];
    }

    public function scopeAvailable($query)
    {
        return $query->where('available', true);
    }

    public function scopeNotAvailable($query)
    {
        return $query->where('available', false);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
