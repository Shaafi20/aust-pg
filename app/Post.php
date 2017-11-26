<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

//    protected $primaryKey = "slug";
    //fillables
    protected $fillable = ['title', 'body', 'category_id', 'slug','author_id',];

    // getting the user of this particular blog by foreign key system built in laravel
    public function user()
    {
        return $this->belongsTo(User::class, "author_id");
    }

//    getting only the published posts
    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, "blog_id")->where('comment_status', '1'); // returns a obj of typ comment
    }

    public function addComment($comment_text, $user_id)
    {

//        dd($body, $user_id);

//        return $this->comments()->create([
//            'body' => $body,
//            'user_id' => $user_id
//        ]);
        return $this->comments()->create(compact('comment_text', 'user_id'));
    }
}
