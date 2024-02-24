<?php

namespace App\Modules\Slider\Actions;

use App\Modules\Slider\Actions\Validation;

class Update
{
    static $model = \App\Modules\Slider\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $reqData = $request->validated();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uploader($image, 'uploads/slider');
                $reqData['image'] = $imageName;
            } else {
                $reqData['image'] = $data->image;
            }
            $data->update($reqData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
