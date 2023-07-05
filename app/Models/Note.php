<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded=[];

    function vendor() {
        return $this->belongsTo(Vendor::class,'vendor_id')->withDefault();
    }
}
