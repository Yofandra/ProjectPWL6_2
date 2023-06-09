<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public static function getById($id)
    {
        return Post::where([
            'id' => $id,
        ])->first();
    }
}
