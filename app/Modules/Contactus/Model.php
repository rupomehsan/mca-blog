<?php

namespace App\Modules\Contactus;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Str;

class Model extends EloquentModel
{
    protected $table = "contact_us";
    protected $guarded = [];
}
