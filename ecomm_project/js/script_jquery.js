$(document).ready(function(){
				
					
					$('#order').change(function()
					{
					
						displayresult();
						
					
					});
					
				});
				
					function displayresult()
					{
						//alert("Hello");
						
						var dropbox1value=$("#order").val();
						var radiovalue=$("input:radio[name=order]:checked").val();
						//alert(radiovalue);
						//alert(dropbox1value);
						if(typeof(dropbox1value)==='undefined'|| typeof(radiovalue)==='undefined')
						{
							alert("Please Select Both to continue!");
							window.stop();
						}
						else
						{
					
					$.ajax(
						{
							//var opeartion="view_ajax";
						type:"GET",
						url:"Product_ajax.php",
						data:"value1="+dropbox1value+"&value2="+radiovalue,
						success:function(response)
						{
							//alert(response);
							$("#content").html(response);
						}
					
					
						});
						}
					}