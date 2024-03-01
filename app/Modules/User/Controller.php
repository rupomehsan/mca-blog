<?php

namespace App\Modules\User;

use App\Modules\User\Actions\All;
use App\Modules\User\Actions\Delete;
use App\Modules\User\Actions\Show;
use App\Modules\User\Actions\Store;
use App\Modules\User\Actions\Update;
use App\Modules\User\Actions\Validation;
use App\Modules\User\Actions\BulkActions;
use \App\Modules\User\Model as User;
use App\Http\Controllers\Controller as ControllersController;
use App\Modules\User\Actions\ProfileUpdate;
use App\Modules\User\Actions\ProfileValidation;

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

    public function update(User $user, Validation $request)
    {
        $data = Update::execute($user, $request);
        return $data;
    }

    public function destroy($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function BulkActions()
    {
        $data = BulkActions::execute();
        return $data;
    }
    public function ProfileUpdate(ProfileValidation $request)
    {
        $data = ProfileUpdate::execute($request);
        return $data;
    }
}
