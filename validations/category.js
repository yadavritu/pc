$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		category:
		{
			required:true,
			
		},
		
	},
	
	messages:
	{
			category:
		{
			required:"Please Enter the category",
			
		},
		
	},
});
});