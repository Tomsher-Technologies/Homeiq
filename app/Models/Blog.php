<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App;

class Blog extends Model
{

  protected $fillable = ['name', 'slug','blog_date','description', 'image', 'status'];

}
