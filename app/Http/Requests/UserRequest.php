<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
			'name' => 'required|alpha',
			'email_id' => 'required|email|unique:user,email_id',
			'phone_no' => 'required|digits:10|numeric',
			'dob' => 'required'
		];
	}

}
