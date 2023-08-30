<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSlideshow extends Model
{
    use HasFactory;
    protected $fillable = ['banner_img', 'banner_status', 'updated_at'];
}
