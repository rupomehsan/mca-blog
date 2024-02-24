<?php

namespace App\Modules\WebsiteSetting;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class VisitorCountModel extends EloquentModel
{
    protected $table = "website_visitor_count";
    protected $guarded = [];
}
