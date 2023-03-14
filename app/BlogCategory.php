<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    use HasFactory;

    protected $fillable=[
        'name',
        'color',
        'parent_id',
        'lang',
        'seoTitle',
        'seoDescription',
        'seoKeyword',
        'status',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function path()
    {

        return "/blog/category/$this->slug";

    }

    public function articles()
    {
        return $this->hasMany(Article::class,  'category_id', 'id');
    }

}
