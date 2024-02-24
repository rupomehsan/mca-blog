<?php

namespace App\Modules\BlogManagement\Blog;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogViewModel extends EloquentModel
{

    protected $table = "blog_views";
    protected $guarded = [];
}
