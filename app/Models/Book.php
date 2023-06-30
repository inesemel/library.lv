<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','publisher_id', 'pages', 'year', 'genre', 'reprint', 'cased', 'description', 'image_url'];
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'book_user')
            ->withPivot('issue_date', 'return_date')
            ->withTimestamps();
    }

    public function voters()
    {
        return $this->belongsToMany(User::class, 'book_user_additional')
            ->withTimestamps();
    }

}
