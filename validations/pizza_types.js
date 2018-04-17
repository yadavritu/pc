$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		pizza:
		{
			required:true,
			
		},
		
	},
	
	messages:
	{
			pizza:
		{
			required:"Please Enter the pizza_types",
			
		},
		
	},
});
});