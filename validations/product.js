$(document).ready(function(){
$("#Form_control").validate({
	rules:
	{
		product:
		{
			required:true,
			
		},
		
	},
	
	messages:
	{
			product:
		{
			required:"Please select product",
			
		},
		
	},
});


$("#menu").change(function(){
	//alert($("#menu").val());
	$("#result").html("please wait..."+$("#menu").val());
	$.ajax({
		url:'product_submenu_fetch',
		method:'post',
		data:{value:$("#menu").val()}
	})
	.done(function(message){
		$("#result").html(message);
	});
});


});







