<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'product_id',
        'rating',
        'comment', 
    ]; 

    protected $primaryKey = 'id';
    public function product_reviews()
    {
        return $this->belongsTo(ProductReviews::class, 'customer_id',
        'product_id',
        'rating',
        'comment', );
    }

    public function customer() {
        return $this->belongsTo(Customers::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
