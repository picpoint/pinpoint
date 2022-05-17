<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $fillable = ['source_user', 'receiver_user', 'pin_id'];


    public function pin() {
        return $this->belongsTo(Pin::class);
    }


    public function user() {
        return $this->belongsTo(User::class);
    }


}
