<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Products extends Model
{
  protected $table = 'products';
  protected $primaryKey = 'products_id';
  protected $fillable =['name', 'description','price','stok','mage','status','categorie_id'];  
  
  public function categories()
{
    return $this->belongsTo(Categories::class, 'categories_id');
}
}

