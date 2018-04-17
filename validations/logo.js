$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		logo:
		{
			required:true,
			
		},
		
	},
	
	messages:
	{
			logo:
		{
			required:"Please select logo",
			
		},
		
	},
});
});