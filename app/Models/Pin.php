<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pin extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'latitude', 'longitude', 'commentaries', 'image'];


    public function user() {
        return $this->belongsTo(User::class);
    }


}
