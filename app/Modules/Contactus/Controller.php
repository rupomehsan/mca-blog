<?php

namespace App\Modules\Contactus;

use App\Modules\Contactus\Actions\All;
use App\Modules\Contactus\Actions\Delete;
use App\Modules\Contactus\Actions\Show;
use App\Modules\Contactus\Actions\Store;
use App\Modules\Contactus\Actions\Update;
use App\Modules\Contactus\Actions\Validation;
use App\Modules\Contactus\Actions\BulkActions;
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

}