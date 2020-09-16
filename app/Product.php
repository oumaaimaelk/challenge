<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = ['name','description','price','category_id','image'];
    public function category()
    {
    	return $this->belongsTo(category::class);
    }
}
