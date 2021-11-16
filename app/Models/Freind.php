<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freind extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'freind_id'];


    public function user() {
        return $this->hasMany(User::class);
    }


}
