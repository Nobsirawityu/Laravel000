<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    //ต้องใส่ protected $fillable ใน column ที่ต้องการให้ mass assignment ใช้ได้
    protected $fillable=['title','content'];
}
