<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGetTitleAttribute(){
        return strtoupper($this->title);//devuelve mayuscula
    }

    public function setNameAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }
}
