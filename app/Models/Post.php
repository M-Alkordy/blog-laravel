<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'cat_id',
        'title',
        'description',
        'image',
        'views'
    ];

    public function categorys()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function posts()
    {
        $this->hasMany(Comment::class,'post_id','id');
    }
    public function user()
    {
        $this->belongsTo(User::class,'user_id','id');
    }
}
