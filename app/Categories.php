<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'categories';
  protected $primaryKey = 'categorie_id';
  protected $fillable =['name', 'description'];    
}
