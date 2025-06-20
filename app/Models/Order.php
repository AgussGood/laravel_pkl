<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['user_id','total_price','order_code','status'];

    public function user()
    {
        return $this_belongsTo(User::class);
    }

    //relasi many to many dengan product
    public function products()
    {
        return $this->blongsToMany(Product::class)->withPivot('qty','price')->withTimestamps();
    }
}
