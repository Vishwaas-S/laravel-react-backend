<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class AddUserRequest extends FormRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->setMeta('message', $validator->messages()->first());
        $this->setMeta('status', 'fail');
        $response = new JsonResponse($this->setResponse(), Response::HTTP_UNPROCESSABLE_ENTITY);
        throw (new ValidationException($validator, $response))->status(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
