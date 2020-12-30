<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    //RELACION MUCHOS A MUCHOS
    public function tagsRelacion(){
        return $this->belongsToMany(Tag::class);
    }



}
