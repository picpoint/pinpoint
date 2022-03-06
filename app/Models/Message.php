<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['currentuser_id', 'user_id', 'message', 'reading'];


    public function user() {
        return $this->belongsTo(User::class);
    }


}
