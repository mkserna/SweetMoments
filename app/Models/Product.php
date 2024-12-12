<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'size_id',
        'category_id',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'detail_orders')
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
