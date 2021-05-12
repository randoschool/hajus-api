<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden = ['img'];
    protected $appends = ['img_link'];

    public function getImgLinkAttribute()
    {
        return asset($this->attributes['img']);
    }
}
