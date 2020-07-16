$(document).ready(function(){
	$('#btn-place-order').click(function(event){
		event.preventDefault();
		//receive all variables
		var name_of_food = $('#name_of_food').val();
		var number_of_units = $('#number_of_units').val();
		var unit_price = $('#unit_price').val();
		var order_status = $('#status').val();

		//we now build an http post request and we send it using ajax

		$.ajax({
			url:"http://localhost/externalapp/index.php",
			type:"post",
			data:{name_of_food:name_of_food,number_of_units,number_of_units,unit_price,unit_price,order_status,order_status},
			headers:{
				'Authorization':'Basic qo9Hzm7QeV3C1RAfSjCjTA3ijfsBhgb6DYQ6P4dcBJcljlOhWwAlE4YbK7lYGMa'

			},
			success: function(data){
				alert(data['message']);
			},
			error: function(){
				alert ("An error occured");
			}
		});
	});
});