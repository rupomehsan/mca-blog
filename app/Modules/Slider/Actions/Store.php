<?php

namespace App\Modules\Slider\Actions;

use App\Modules\Slider\Actions\Validation;
use Illuminate\Support\Facades\Hash;

class Store
{
    static $model = \App\Modules\Slider\Model::class;

    public static function execute(Validation $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/slider');
                $data['image'] = $imageName;
            }

            if (self::$model::query()->create($data)) {
                return messageResponse('User added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
