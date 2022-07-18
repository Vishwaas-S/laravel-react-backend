<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use App\Utils\AppConstant;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponse;

    public function getUsers(Request $request)
    {
        try {
            $users = User::with('roles');
            $paginatedList = $users->orderBy('id', 'DESC')->paginate(AppConstant::DEFAULT_PAGINATE);
            $pagination = [
                "total" => $paginatedList->total(),
                "current_page" => $paginatedList->currentPage(),
                "next_page_url" => $paginatedList->nextPageUrl(),
                "previous_page_url" => $paginatedList->previousPageUrl(),
            ];

            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('messages.user.fetch'));
            $this->setPaginate($pagination);
            $this->setData('users', $paginatedList->getCollection());
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), AppConstant::INTERNAL_SERVER_ERROR);
        }
    }

    public function addUser(AddUserRequest $request)
    {
        try {
            $validated = $request->validated();

            $user = User::create([
                'full_name' => $validated['fullname'],
                'email' => $validated['email'],
            ]);

            $user->roles()->sync($request->roles);


            $this->setMeta('status', AppConstant::STATUS_OK);
            $this->setMeta('message', __('messages.user.create'));
            $this->setData('user', $user);
            return response()->json($this->setResponse(), AppConstant::OK);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), AppConstant::INTERNAL_SERVER_ERROR);
        }
    }
}
