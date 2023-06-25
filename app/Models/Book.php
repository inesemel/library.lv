<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','publisher_id', 'pages', 'year', 'genre', 'reprint', 'cased', 'desription'];
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
