@extends('layout.default')
@section('content')
	<aside class="right-side">                
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>USER<small>LIST OF ALL UESERS</small></h1>
        <ol class="breadcrumb">
           	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="#">User List</a></li>
        </ol>
     </section>
     <!-- Main content -->
 <section class="content">
<!-- TO DO List -->
<div class="box box-primary">
	<div class="box-header">
		<i class="ion ion-clipboard"></i>
		<h3 class="box-title">To Do List</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
	<?php if(Session::has('suc_message')){?>
		<p class="alert alert-success"><?php echo Session::get('suc_message') ?></p>
		<?php Session::clear();?>
<?php }?>
		<table id="myTable">
			<thead>
				<tr>
					<th>SL. NO.</th><th>NAME</th><th>DESIGNATION</th><th>DEPARTMENT</th><th>DOB</th><th>DOJ</th><th>EMAIL</th><th>ACTION</th>
				</tr>
			</thead>
			<tbody>
			<?php if (!empty($user_detail)){
				$slno=1;
			foreach ($user_detail as $value) {?>
	 			<tr>
		 			<td><?=$slno?></td>
		 			<td>{{ $value->name }}</td>
		 			<td>{{ $value->designation_id }}</td>
		 			<td>{{ $value->dept_id }}</td>
		 			<td>{{ $value->dob }}</td>
		 			<td>{{ $value->doj }}</td>
		 			<td>{{ $value->email_id }}</td>
		 			<td>
		 				<button class="btn btn-warning" onclick="edit_user(<?php echo $value->id;?>)">Edit</button>
		 				<button class="btn btn-danger" onclick="dlt_user(<?php echo $value->id;?>)">Delete</button>		
		 			</td>
	 			</tr>
 			<?php $slno++; }
			}?>
			</tbody>
		</table>
	 </div><!-- /.box-body -->
	 <div class="box-footer clearfix no-border">
	 	<button class="btn btn-default pull-right" onclick="add_user();"><i class="fa fa-plus"></i> Add New User</button>
	 </div>
</div><!-- /.box -->
@stop
<script>
	function add_user() {
		window.location.href = "{!! url('new_user') !!}";
	}
	function edit_user(id) {
		var ul="{!! url('doedit/"+id+"') !!}";
		window.location.href = ul;
	}
	function dlt_user(id) {
		var ul="{!! url('dodelete/"+id+"') !!}";
		window.location.href = ul;
	}
	
</script>