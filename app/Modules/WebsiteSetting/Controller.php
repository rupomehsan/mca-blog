<?php

namespace App\Modules\WebsiteSetting;

use App\Modules\WebsiteSetting\Actions\All;
use App\Modules\WebsiteSetting\Actions\Delete;
use App\Modules\WebsiteSetting\Actions\Show;
use App\Modules\WebsiteSetting\Actions\Store;
use App\Modules\WebsiteSetting\Actions\Update;
use App\Modules\WebsiteSetting\Actions\Validation;
use App\Modules\WebsiteSetting\Actions\BulkActions;
use App\Modules\WebsiteSetting\Actions\DashboardAnalytics;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($id)
    {
        $data = Show::execute($id);
        return $data;
    }

    public function update(Validation $request, $id)
    {
        $data = Update::execute($request, $id);
        return $data;
    }

    public function destroy($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function bulkAction()
    {
        $data = BulkActions::execute();
        return $data;
    }
    public function dashboardAnalytics()
    {
        $data = DashboardAnalytics::execute();
        return $data;
    }
}
