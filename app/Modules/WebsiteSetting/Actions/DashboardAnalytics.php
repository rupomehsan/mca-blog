<?php

namespace App\Modules\WebsiteSetting\Actions;



class DashboardAnalytics
{
    static $blogModel = \App\Modules\BlogManagement\Blog\Model::class;
    static $courseModel = \App\Modules\CourseManagement\Course\Model::class;
    static $categoryModel = \App\Modules\Category\Model::class;
    static $visitorModel = \App\Modules\WebsiteSetting\VisitorCountModel::class;


    public static function execute()
    {
        try {
            $data = [
                "totalVisitor" => self::$visitorModel::count(),
                "totalBlog" => self::$blogModel::count(),
                "totalCourse" => self::$courseModel::count(),
                "totalCategory" => self::$categoryModel::count(),
            ];
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
