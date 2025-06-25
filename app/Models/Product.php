<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //fillable adalah field apa saja yang wajib di isi
    public $fillable = ['category_id', 'name', 'slug', 'description', 'image', 'price', 'stock'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    //relasi many to many dengan order
    public function order()
    {
        return $this->blongsToMany(Order::class)->withPivot('qty', 'price')->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    //mengganti kunci dari id ke slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
