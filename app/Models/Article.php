<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'excerpt', 'body'];
    // protected $guarded = []; will allow everything you set to go through

    // Add a path that is accessible on an instance of the Article class
    public function path() {
        // returns /articles/:id
        return route('articles.show', $this);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
