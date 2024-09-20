<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_category_id',
        'product_name',
        'description',
        'price',
        'stok_quantity',
        'image1_url',
        'image2_url',
        'image3_url',
        'image4_url',
        'image5_url',
    ]; 

    public function productCategories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    protected $primaryKey = 'id';
        public function products()
        {
            return $this->belongsTo(Product::class, 'product_category_id',
            'product_name',
            'description',
            'price',
            'stok_quantity',
            'image1_url',
            'image2_url',
            'image3_url',
            'image4_url',
            'image5_url',);
        }
        public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReviews::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function getDiscountedPrice()
    {
        if ($this->discounts->isNotEmpty()) {
            $discount = $this->discounts->first();
            return $this->price - ($this->price * $discount->percentage / 100);
        }
        return $this->price;
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

}
