<?php

include('cartController.php');

Session::init();
//pressing on removing button
if(isset($_POST["remove"]) && isset($_POST['item_number'])){
		 $cart=gettingCart(Session::get('customer_id'));

		removeItem($_POST['item_number'],$cart,Session::get('customer_id'));
			echo '<script>alert("The item has been removed")
			window.location.replace("../Cart.php");
			</script>';
}


//pressing on add to cart button
if(isset($_POST["add_to_cart"]))
{
	$cart = $cart=gettingCart(Session::get('customer_id'));
	$f = 1;
	updatingCart($_GET['id'],Session::get('customer_id'),$cart,$_POST['qty'],$f);
	if($f){
	echo '<script>alert("The item has been successfully added")
				window.location.replace("../HOME.php");
	</script>';

}else {

	echo '<script>alert("This item has been already in cart")
	window.location.replace("../HOME.php");
	</script>';

}
}
