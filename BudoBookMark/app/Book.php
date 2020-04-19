<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Author');
    }

    public static function findBySlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }

    public function reverseTitle()
    {
        $this->title = strrev($this->title);
        return $this->title;
    }
}
