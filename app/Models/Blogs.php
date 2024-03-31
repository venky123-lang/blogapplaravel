<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table='addblogs';

    protected $fillable=[
        'blog_heading',
        'blog_image',
        'blog_sub_heading',
    ];
}
