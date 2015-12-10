<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Routing\Route;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\File;
use Session;

class RegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$detail = User::get();
		//echo "<pre>";print_r($detail);die();
		return View('pages.user')->with('user_detail',$detail);
		//return view('app');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View('pages.addedit_user');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		$file = array('image' => $request->file('image'));
		//echo "<pre>";print_r($file);die();
		
		//if (!empty($file)){
			if (!empty($request->input('id'))){
				$old_data=User::where('id',$request->input('id'))->get();
				$new_image=$old_data[0]->image;
				if ($request->file('image')!=null){
					$image=$this->upload_file($file,'uploads');
				}
				if (!empty($image)) {
					$new_image=$image;
					File::delete(public_path().'/uploads/'.$old_data[0]->image);
					User::where('id',$request->input('id'))->update(array('image'=>$new_image));
				}
				//update
				if( User::where('id',$request->input('id'))->update($request->except('action','submit','id','image'))){
					$input=$request->input('id');
					Session::set('suc_message', 'User Updated Successfully!');
				}else {
					Session::set('err_message', 'Please Try Again !!!');
				}
				
			}else {		
			//insert
			if ($request->file('image')!= null){
				$new_image=$this->upload_file($file,'uploads');
			}
			$input = User::insertGetId($request->except('action','submit'));
			if (!empty($new_image) && ($input != null)) {
				//File::delete(public_path().'/uploads/'.$old_image);
				User::where('id',$input)->update(['image'=>$new_image]);
				Session::set('suc_message', 'User Inserted Successfully!');
			}else {
				Session::set('err_message', 'Please Try Again !!!!');
				return redirect()->action('RegistrationController@create');
			}
		}
		return redirect()->action('RegistrationController@show',$input);
		//}
						
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//$get_user_detail = User::where('id',$id)->get();
		
		$get_user_detail = User::find($id);
		
		return View('pages.addedit_user',['user_detail' => $get_user_detail]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$get_user_detail = User::find($id);
		if (!empty($get_user_detail->image)) {
			File::delete(public_path().'/uploads/'.$get_user_detail->image);
		}
		if (User::where('id',$id)->delete()) {
			Session::set('suc_message', 'User Deleted Successfully!');
		}
		return $this->index();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function upload_file($field=array(),$dir_name = ''){
		//echo "<pre>";print_r($field);die();
		if ($field['image']->isValid()) {
			$destinationPath = public_path().'/'.$dir_name.'/';// upload path
			$extension = $field['image']->getClientOriginalExtension();// getting image extension
			$fileName = rand(11111,99999).'.'.$extension; // renameing image
			$field['image']->move($destinationPath, $fileName); // uploading file to given path
			//sending back with message
			//Session::flash('success', 'Upload successfully');
			return $fileName;
		}else {
			return false;
		}
		
	}

}
