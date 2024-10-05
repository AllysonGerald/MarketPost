<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'exclusive',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'product_categories', 'product_id', 'category_id');
    }
}
