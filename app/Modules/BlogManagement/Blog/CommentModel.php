<?php

namespace App\Modules\BlogManagement\Blog;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;


class CommentModel extends EloquentModel
{


    protected $table = "blog_comments";
    protected $guarded = [];
}
