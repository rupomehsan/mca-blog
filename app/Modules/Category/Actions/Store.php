<?php

namespace App\Modules\Category\Actions;

use App\Modules\Category\Actions\Validation;
use Illuminate\Support\Facades\Hash;

class Store
{
    static $model = \App\Modules\Category\Model::class;

    public static function execute(Validation $request)
    {
        try {
            // dd($request->all());
            $imageName = 'dummy.png';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/category');
            }
            if (self::$model::query()->create(array_merge(
                $request->validated(),
                [
                    "image" => $imageName,
                ]
            ))) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
