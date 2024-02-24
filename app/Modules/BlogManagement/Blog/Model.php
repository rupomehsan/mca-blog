<?php

namespace App\Modules\BlogManagement\Blog;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Model extends EloquentModel
{
    static $model = \App\Modules\Category\Model::class;
    static $BlogViewModel = \App\Modules\BlogManagement\Blog\BlogViewModel::class;

    protected $table = "blogs";
    protected $guarded = [];


    protected static function booted()
    {
        static::created(function ($data) {
            $random_no = random_int(100, 999) . $data->id . random_int(100, 999);
            $slug = $data->title . " " . $random_no;
            $data->slug = Str::slug($slug);
            $data->save();
        });
    }

    public function scopeActive($q)
    {
        return $q->where('status', 'active');
    }
    public function categories()
    {
        return $this->belongsToMany(self::$model, 'blog_post_categories', 'blog_id', 'blog_category_id');
    }
    public function view()
    {
        return $this->hasMany(self::$BlogViewModel,  'blog_id');
    }
}
