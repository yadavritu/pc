$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		menu:
		{
			required:true,
			
		},
		submenu:
		{
			required:true,
			minlength:2,
		},
	},
	
	messages:
	{
			menu:
		{
			required:"Please select menu",
			
		},
			submenu:
		{
			required:"Please Enter sub menu",
			minlength:"minimum 2 charcater",
		},
	},
});
});