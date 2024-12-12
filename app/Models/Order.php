<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateDelivery',
        'totalPrice',
        'user_id',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'detail_orders')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
