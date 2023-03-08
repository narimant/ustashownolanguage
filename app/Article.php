<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Route;

class Article extends Model
{
    use SoftDeletes;
    use Sluggable;

    protected $guarded=[];
    protected $casts=[
        'images'=>'array',

    ];

   /* protected $attributes = [
        'CreateTimeDiff' => '0',
    ];*/
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => false,
            ],

        ];
    }

    public function scopeStatus($query,$status =true)
    {
        return $query->where('status', $status);
    }

    public function scopeSearch($query,$keyword)
    {
        return $query->where('title','LIKE','%'.$keyword.'%');
    }
    public function path()
    {

            return "/blog/$this->slug";




    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }




    public function getCreateTimeDiffAttribute()
    {
        $created = new Carbon($this->created_at);
        $now = Carbon::now();
        $difference = ($created->diff($now)->days < 1)
            ? __('messages.today')
            : $created->diffForHumans($now);




        return $difference;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    /**
     * @param string $value
     */

    public function seoData($value='seoTitle')
    {
        if($value=='seoTitle')
        {
            if($this->seoTitle != null)
            {
                return $this->seoTitle;
            }else
            {
                return  $this->title;
            }

        }elseif($value=='seoDescription')
        {
            if($this->seoDescription != null)
            {
                return $this->seoDescription;
            }else
            {
                return  $this->description;
            }
        }elseif ($value=='seoKeyword')
        {
            if($this->seoKeyword != null)
            {
                return $this->seoKeyword;
            }else
            {

                $keyword='';
                $i=0;
                foreach($this->tags()->get() as $tag)
                {

                    if($i==0)
                    {
                        $keyword=$tag->name;
                    }else
                    {
                        $keyword=$keyword.' , '.$tag->name;
                    }
                    $i++;

                }

                return $keyword ;
            }
        }
    }

}
