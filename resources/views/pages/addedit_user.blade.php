@extends('layout.default')
@section('content')
<?php //echo "<pre>";print_r($user_detail);?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">                
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>USER<small>ADD UESERS</small></h1>
        <ol class="breadcrumb">
           	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User List</a></li>
            <li class="active">Add User</li>
        </ol>
     </section>
     <!-- Main content -->
 <section class="content">
 <!-- form start -->
 <?php if(Session::has('suc_message')){?>
		<p class="alert alert-success"><?php echo Session::get('suc_message') ?></p>
		<?php Session::clear();?>
<?php }?>
<?php if(Session::has('err_message')){?>
		<p class="alert alert-danger"><?php echo Session::get('err_message') ?></p>
		<?php Session::clear();?>
<?php }?>

<form action="{{ url('addedit') }}" method="post" name="add_user" id="add_user" enctype="multipart/form-data">
<?php if (!empty($user_detail->id)){?>
<input type="hidden" name="id" value="<?php echo $user_detail->id;?>">
<?php }?>
<div class="row">
<?php if (!empty($errors->all())) {?>
		<div class="alert alert-danger alert-dismissable">
		   	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<?php foreach ($errors->all() as $value) {
		   	echo $value." | ";
	 	}?>
	  </div>
<?php }?>
	<!-- left column -->
	<div class="col-md-6">
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Personal Information</h3>
			</div><!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputName">Name</label>
						<input type="text" class="form-control" name="name" id="exampleInputName" value="<?php if (!empty($user_detail->name)){echo $user_detail->name;}?>" placeholder="Enter Name" >
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" name="email_id" id="exampleInputEmail1" placeholder="Enter email" value="<?php if (!empty($user_detail->email_id)){echo $user_detail->email_id;}?>" >
					</div>
					<div class="form-group">
						<label for="exampleInputPhone_no">Phone No</label>
						<input type="text" class="form-control" id="exampleInputPhone" name="phone_no" placeholder="Enter phone" value="<?php if (!empty($user_detail->phone_no)){echo $user_detail->phone_no;}?>" >
					</div>
					<!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                        <label>Date Of Birth:</label>
                        <div class="input-group">
                           <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                           </div>
                           <input type="text" class="form-control" name="dob" id="datemask" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask  value="<?php if (!empty($user_detail->dob)){echo $user_detail->dob;}?>" >
                         </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <div class="form-group">
						<label for="exampleInputName">Username</label>
						<input type="text" class="form-control" name="username" id="exampleInputName1" placeholder="Enter Name" value="<?php if (!empty($user_detail->username)){echo $user_detail->username;}?>" >
						<label id="uname_chk" class="error" style="display: none;">USERNAME EXIST.</label>
					</div>
					<?php if (empty($user_detail->password)){?>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
					</div>
					<?php }?>
					<div class="form-group">
						<label for="exampleInputName">Blood Group</label>
						<input type="text" class="form-control" name="blood_group" id="exampleInputName2" placeholder="Enter Name" value="<?php if (!empty($user_detail->blood_group)){echo $user_detail->blood_group;}?>" >
					</div>
					<!-- textarea -->
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter ..."><?php if (!empty($user_detail->address)){ echo $user_detail->address;}?></textarea>
					</div>
					<div class="form-group">
					
						<label></label>
						<label for="exampleInputFile">Image</label>
						<input type="file" name="image" id="exampleInputFile">
						<?php if (!empty($user_detail->image)) {
							
						}?>	
					</div>
				</div><!-- /.box-body -->
				<div class="box-footer">
<!-- 				<button type="submit" class="btn btn-primary">Submit</button> -->
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
				</div>
		</div><!-- /.box -->
	</div><!--/.col (left) -->
	<!-- right column -->
	<div class="col-md-6">
	<!-- general form elements disabled -->
		<div class="box box-warning">
			<div class="box-header">
			<h3 class="box-title">General Elements</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
					<div class="form-group">
                        <label>Date masks:</label>
                        <div class="input-group">
                           <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                           </div>
                           <input type="text" class="form-control" name="doj" id="datemask_doj" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="<? if (!empty($user_detail->doj)){ echo $user_detail->doj;}?>" >
                         </div><!-- /.input group -->
                    </div><!-- /.form group -->
					<div class="form-group">
						<label>Select Type Of User</label>
						<select class="form-control" name="user_type_id">
							<option value="">SELECT ONE</option>
							<option value="1">xx</option>
						</select>
					</div>
					<!-- select -->
					<div class="form-group">
						<label>Select Department</label>
						<select class="form-control" name="dept_id" id="dept_id">
							<option value="">SELECT ONE</option>
							<option value="1">xx</option>
						</select>
					</div>
					<!-- skills -->
					<div class="form-group" id="list_skill">
						<label>Select Skills</label><br>
						<option value="1">xx</option>
					</div>
					<div class="form-group">
						<label>Select Designation</label>
						<select class="form-control" name="designation_id">
							<option value="">SELECT ONE</option>
							<option value="1">xx</option>
						</select>
					</div>
					<!-- radio -->
					<div class="form-group"> 
						<div class="radio">
							<label>
								<input type="radio" name="status" value="1" <?php //if ((!empty($user_detail->status)) && ($user_detail->status==1)){echo "checked='checked'";}?> >Active
								<input type="radio" name="status" value="0" <?php //if ((empty($user_detail->status)) && ($user_detail->status==0)){echo "checked='checked'";}?> >In-Active
							</label>
						</div>
					</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!--/.col (right) -->
</div> <!-- /.row -->
</form>
@stop