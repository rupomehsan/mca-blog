<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Actions\ProfileValidation;
use Illuminate\Support\Facades\Hash;

class ProfileUpdate
{
    static $model = \App\Modules\User\Model::class;

    public static function execute(ProfileValidation $request)
    {
        try {

            $authUser = auth()->user();
            $user = self::$model::where('email', $authUser->email)->first();
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
                $user->save();
                return messageResponse('Password updated successfully', 201,);
            } else {
                return messageResponse('Password did not match', 404, 'error');
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
