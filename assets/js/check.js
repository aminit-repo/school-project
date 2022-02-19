 	$(document).ready(function(){

 		var server= {
 			url: "img/objectjson.php",
 			type: "post",
 			data: {name: "value"},
 			success: function(response){
 				 alert(response.message);
 			}
 		}

 	 function submit(obj){
 				  $.ajax({
  					dataType: "json",
 					url: obj.url,
  					type: obj.type, 
  					data: obj.data,
  					success: function(response,status,jqXHR){
  						alert(response.password);
  					}
  				})
 			}

 		$('form').submit(function(){
 			submit(server);
 			return false;
 		})
 	})