<?php

namespace App\Modules\CourseManagement\Course\Actions;

use App\Modules\CourseManagement\Course\Actions\Validation;
use Illuminate\Support\Facades\Storage;

class Update
{
    static $model = \App\Modules\CourseManagement\Course\Model::class;

    public static function execute(Validation $request, $id)
    {
        try {

            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }


            $reqtags = json_decode($request->tags);
            $tags = null;

            $imageName = $data->image;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $currentDate = now()->format('Y/m');
                $imageName = Storage::disk('public')->put("uploads/course/{$currentDate}", $image);
            }

            if ($reqtags && count($reqtags)) {
                foreach ($reqtags as $item) {
                    $tags .= $item . ',';
                }
            }


            if ($data->update(array_merge(
                $request->validated(),
                [
                    "image" => $imageName,
                    "tags" => $tags,
                ]
            ))) {

                return messageResponse('Item updated successfully');
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
