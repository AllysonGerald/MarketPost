<?php

namespace App\Models\Site;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
    // use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }

}
