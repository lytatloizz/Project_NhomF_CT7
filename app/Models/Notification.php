<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Notification extends Model
{
    use HasFactory;
    //protected $guarded = [];
    protected $fillable = [
        'name',
        'title'
    ];

    protected $dates = [
        'created_at'
       
    ];

    protected static function booted()
    {
        static::creating(function ($notification) {
            $notification->created_at = Carbon::now();
        });
    }

}
