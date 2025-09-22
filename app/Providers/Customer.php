<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  protected $table = 'customers';
  protected $primaryKey = 'customer _id';
  protected $fillable =['name', 'description'];    
}