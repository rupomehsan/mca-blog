<?php

namespace App\Modules\WebsiteSetting;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class ConatctModel extends EloquentModel
{
    protected $table = "contact_us";
    protected $guarded = [];
}
