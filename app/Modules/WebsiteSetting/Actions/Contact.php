<?php

namespace App\Modules\WebsiteSetting\Actions;

use App\Modules\WebsiteSetting\Actions\ContactValidation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Contact
{
    static $model = \App\Modules\WebsiteSetting\ConatctModel::class;

    public static function execute(ContactValidation $request)
    {
        try {
            if (self::$model::create($request->validated())) {
                return messageResponse('Message successfully send', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
