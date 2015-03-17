$( document ).ready(function() {
var Carts=[];
var selectedCart;

    console.log("Javascript Ready");
    $('#submitCart').click(function(){
		
        $(".items:checked").each(function() {
         
		    var  sThisVal = (this.checked ? $(this).val() : "");
		   Carts.push(sThisVal);
        });
			window.location="AddToCartPageIncluded.php?key="+Carts;
    });
	 
});
