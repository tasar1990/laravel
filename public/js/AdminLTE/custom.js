//NEW USER REGISTRATION FORM VALIDATION
$(function(){
	 //Datemask dd/mm/yyyy
	$("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
	$("#datemask_doj").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
});

$(document).ready(function(){
	$("#dept_id").change(function(){
		var deptid = $("#dept_id").val();
		$.ajax({
			type: "POST",
			url: "ajax/ajax_check.php",
			data: { deptid: deptid, form: "skills" }
			})
			.done(function(msg) {
			$("#list_skill").append(msg);
		});
	});
});

$(document).ready(function(){
	$("#exampleInputName1").change(function(){
		var uname = $("#exampleInputName1").val();
		$("#uname_chk").hide();
		$.ajax({
			type: "POST",
			url: "ajax/ajax_check.php",
			data: { uname: uname, form: "username" }
			})
			.done(function(msg) {
				if(msg > 0){
					$("#uname_chk").show();
					return false;
				}
		});
	});
});

$(document).ready(function(){
    $('#myTable').DataTable();
});

//$(document).ready(function () {
//   $('#add_user').validate({ 
//       rules: {
//    	   name: {
//               required: true
//           },
//           email_id: {
//               required: true,
//               email: true
//           },
//           phone_no: {
//               required: true,
//               number: true,
//               minlength: 10,
//               maxlength: 12
//           },
//           dob: {
//               required: true
//           },
//           username: {
//               required: true,
//               minlength: 5,
//           },
//           password: {
//               required: true,
//               minlength: 5,
//           },
//           blood_group: {
//               required: true
//           },
//           address: {
//               required: true
//           },
//           status: {
//               required: true
//           },
//           doj: {
//               required: true
//           }
//       }
//   });
//});
