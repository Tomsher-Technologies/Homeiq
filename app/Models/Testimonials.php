<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
       'name', 'title', 'comment', 'status', 'sort_order'
    ];
}
