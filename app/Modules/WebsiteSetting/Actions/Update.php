<?php

namespace App\Modules\WebsiteSetting\Actions;

use App\Modules\WebsiteSetting\Actions\Validation;

class Update
{
    static $model = \App\Modules\WebsiteSetting\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {
            // dd($request->all());

            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }

            $requestData = $request->validated();
            if ($data->is_image) {
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = uploader($image, 'uploads/website');
                    $requestData['field_value'] = $imageName;
                } else {
                    $requestData['field_value'] = $requestData->field_value;
                }
            }


            $data->update($requestData);
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
