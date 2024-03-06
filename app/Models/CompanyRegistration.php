<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    protected $fillable = ['id','customername','mobileno','whatsappnumber','gmail','supportemail','headoffice','logo','facebooklink','instagramlink','youtubelink','twitterlink','linkedinlink','customeraddress'];
}
