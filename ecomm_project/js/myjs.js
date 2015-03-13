$(document).ready(function() {




    $('#example').dataTable();
	
	
	
	
		 x = $(".message").text().trim(); 
    if ( !!x) { 
        $("#button_login").hide(); 
        $("#button_logout").show(); 
    } 
    else { 
        $("#button_logout").hide(); 
        $("#button_login").show(); 
    } 
	
	
	    $('#button_home').click(function(){
		alert('button clicked');
		console.log("button click");
		
		window.location="../ecomm_project/index.php";
		
      });
			//
   
	
	 $('#button_login').click(function(){
		alert('button clicked');
		console.log("button click");
		
		window.location="../ecomm_project/LoginPageincluded.php";
		
      });
	  
	   $('#button_signup').click(function(){
		alert('button clicked');
		console.log("button click");
		
		window.location="../ecomm_project/SignupPageincluded.php";
		
      });
	
	
	 $('#button_logout').click(function(){
		alert('button clicked');
		console.log("button click");
		
		window.location="../ecomm_project/SignOutPageincluded.php";
		
      });
	
	 $('#back_to_shopping').click(function(){
		window.location="index.php";
		
      });
	
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  $('#back_to_shopping').click(function(){
	  
	  
	  
	   
	
	
	
		
      });
	 
	 
	 
	 
	 
	 
	
   

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

	
	
	
	
	
	
	
	
} );

