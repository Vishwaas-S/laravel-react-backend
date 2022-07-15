<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    use ApiResponse;

    public function getUsers(Request $request)
    {
        try {
            $roles = Role::all();


            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('messages.role.fetch'));
            $this->setData('roles', $roles);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), AppConstant::INTERNAL_SERVER_ERROR);
        }
    }
}
