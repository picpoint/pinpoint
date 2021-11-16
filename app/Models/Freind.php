<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freind extends Model
{
    use HasFactory;

    protected $fillable = ['currentuser_id', 'user_id'];


    public function users() {
        return $this->belongsToMany(User::class);
    }


}
