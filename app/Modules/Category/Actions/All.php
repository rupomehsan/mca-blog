<?php

namespace App\Modules\Category\Actions;

class All
{
    static $model = \App\Modules\Category\Model::class;

    public static function execute()
    {
        try {

            $offset = request()->input('offset') ?? 10;
            $condition = [];
            $with = ['child_categories'];
            $data = self::$model::query();

            if (request()->has('for') && request()->input('for')) {
                $condition['for'] = request()->input('for');
            }

            if (request()->has('status') && request()->input('status')) {
                $condition['status'] = request()->input('status');
            }

            if (request()->has('search') && request()->input('search')) {
                $data = $data->where('title', 'like', '%' . request()->input('search') . '%');
            }

            if (request()->has('get_all') && (int)request()->input('get_all') === 1) {
                if (request()->input('for') == 'course') {
                    $data = $data->where('for', 'course')->latest()->get();
                    return entityResponse($data);
                }
                $data = $data->where('parent_id', null)->with($with)->where($condition)->latest()->get();
            } else {
                $data = $data->with($with)->where($condition)->latest()->paginate($offset);
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
