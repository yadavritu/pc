$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		banner:
		{
			required:true,
			
		},
		
	},
	
	messages:
	{
			banner:
		{
			required:"Please select Banner",
			
		},
		
	},
});
});