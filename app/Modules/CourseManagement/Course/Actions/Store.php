<?php

namespace App\Modules\CourseManagement\Course\Actions;

use App\Modules\CourseManagement\Course\Actions\Validation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Store
{
    static $model = \App\Modules\CourseManagement\Course\Model::class;

    public static function execute(Validation $request)
    {
        try {


            // $reqtags = json_decode($request->tags);
            $tags = null;

            $imageName = 'dummy.png';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $currentDate = now()->format('Y/m');
                $imageName = Storage::disk('public')->put("uploads/course/{$currentDate}", $image);
            }

            // if ($reqtags && count($reqtags)) {
            //     foreach ($reqtags as $item) {
            //         $tags .= $item . ',';
            //     }
            // }



            if ($course = self::$model::query()->create(array_merge(
                $request->validated(),
                [
                    "image" => $imageName,
                    // "tags" => $tags,
                    "creator" => auth()->id(),
                ]
            ))) {

                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
