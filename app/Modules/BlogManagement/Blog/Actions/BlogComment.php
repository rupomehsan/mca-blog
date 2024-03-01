<?php

namespace App\Modules\BlogManagement\Blog\Actions;

use App\Modules\BlogManagement\Blog\Actions\CommentValidation;
use Illuminate\Support\Facades\Storage;

class BlogComment
{
    static $blogModel = \App\Modules\BlogManagement\Blog\Model::class;
    static $model = \App\Modules\BlogManagement\Blog\CommentModel::class;

    public static function execute(CommentValidation $request)
    {
        try {
            if (self::$model::query()->create($request->validated())) {
                return messageResponse('Comment successfully send', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
    public static function getBlogCommentByBlogId($slug)
    {
        try {

            $blog = self::$blogModel::query()->where('slug', $slug)->first();
            if (!$blog)  return messageResponse('Data not found...', 404, 'error');;
            if ($data = self::$model::query()->where('blog_id', $blog->id)->get()) {
                return entityResponse($data);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
