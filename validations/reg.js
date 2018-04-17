$(document).ready(function(){
//alert("Hiii");
$("#form_values").validate({
		
		rules:
		{
			tfname:
			{
				required:true,
				minlength:4,
			},
			tlname:
			{
				required:true,
				minlength:5,
			},
			teamil:
			{
				required:true,
				minlength:20,
			},
			tpassword:
			{
				required:true,
				minlength:4,
			},
		},
		massages:
		{
			tfname:
			{
				required:"please Entre Your Full Name",
				minlength:"pleas Enter  minimum 4 charcater",
			},
			tlname:
			{
				required:"pleas Enter Your Full Last Name",
				minlength:"pleas Enter minimum 5 charcater",
			},
			temail:
			{
				required:"Please enter a valid email address",
				minlength:"pleas Enter minimum 20 charcater ",
			},
			tpassword:
			{
				required:"Pleas Enter Your Password",
				minlength:"Your password must be at least 4 character long",
			},
		},
	});
});
