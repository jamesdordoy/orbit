<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Post extends Model
{
    use \Orbit\Concerns\Orbital;

    public static function schema(Blueprint $table)
    {
        $table->string('title');
        $table->string('slug');
        $table->timestamp('published_at');
    }
}