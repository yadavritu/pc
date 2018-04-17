$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		menu:
		{
			required:true,
			minlength:4,
		},
	},
	
	messages:
	{
			menu:
		{
			required:"Please Enter the menu",
			minlength:"minimum 4 charcater",
		},
	},
});
});