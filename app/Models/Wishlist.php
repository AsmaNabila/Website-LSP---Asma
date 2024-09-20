<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlist';
    protected $fillable = [
        'customer_id',
        'product_id',
    ];

    protected $primaryKey = 'id'; 

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'id'); 
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id'); 
    }
}