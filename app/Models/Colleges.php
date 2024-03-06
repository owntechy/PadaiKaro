<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colleges extends Model
{
    protected $fillable = ['id','collegename','universityname','coverimage','logo','city','state','country','pincode','discription'];
}
