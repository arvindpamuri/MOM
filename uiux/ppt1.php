<?php
require_once('../dbconnect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-7" id = "Products">
			<nav class="navbar navbar-light bg-light nav1 sticky">
			  <a class="navbar-brand" href="#">
			    <img src="https://scontent-maa2-1.xx.fbcdn.net/v/t1.0-9/11219587_425160724353150_1752025976610683128_n.png?_nc_cat=109&_nc_ht=scontent-maa2-1.xx&oh=2eff34b9b42852d6f9ddf53af33e83c2&oe=5CAFFDB8" width="40" height="40" class="d-inline-block align-top" alt="">
			    Makers of MilkShakes
			  </a>
			</nav>
			<h1 align="center">Our Shakes</h1>
				<div class="row grid-padding">
			
				<!---------- LEFT CARD -------------------------------------------------------------------------------------------------------------------------------------->
					<?php
					$query="select * from mom_menu";
					$sql=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($sql))
					{
					echo'
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">
						  <img class="card-img-top" height="190rem" src='.$row['img'].' alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">'.$row['p_name'].'</h5>
						    <h6><i class="fa fa-rupee"></i>'.$row['price'].'</h6>
						    <button class="btn btn-primary add" onclick="showItem('.$row['p_id'].')">View</button>
						  </div>
						</div>
					</div>';
					}
					?>
					<!----------------------------->
				</div>
			</div>
			<div class="col-lg-5 description-half" id = "Sale">
				<div class="container">

						<section id="cart"> 
						<!----      Replicate    -------------------------------------------------------->
						<?php
						
						$query1="select * from mom_menu";
						$sql1=mysqli_query($con,$query1);
						while($row1=mysqli_fetch_array($sql1)){
						echo'
							<article class="product" style = "display: none; " id = "'.$row1['p_id'].'">
								<header>
									<a class="remove">
										<img src='.$row1['img'].' alt="">

										<h3>Remove product</h3>
									</a>
								</header>

								<div class="content">

									<h1>'.$row1['p_name'].'</h1>

									'.$row1['description'].'

								</div>

								<footer class="content">
									<span class="qt-minus">-</span>
									<span class="qt">1</span>
									<span class="qt-plus">+</span>

									<h2 class="full-price">
										'.$row1['price'].'
									</h2>

									<h2 class="price">
										'.$row1['price'].'
									</h2>
								</footer>
							</article>
							
						    ';
						}
							?>
							<!----      Replicate    -------------------------------------------------------->

						</section>

					</div>

					<footer id="site-footer">
						<div class="container clearfix">

							<div class="left">
								<h2 class="subtotal">Subtotal: <span>180.00</span></h2>
								<h3 class="tax">Taxes (5%): <span>8.2</span></h3>
								<h3 class="shipping">Shipping: <span>5.00</span></h3>
							</div>

							<div class="right">
								<h1 class="total">Total: <span>180.00</span></h1>
								<a class="btn checkout">Checkout</a>
							</div>

						</div>
					</footer>
			</div>
		</div>
	</div>
</body>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	function showItem(x) {
	    var y = document.getElementById(x);
		if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
	}


	var check = false;

	function changeVal(el) {
	  var qt = parseFloat(el.parent().children(".qt").html());
	  var price = parseFloat(el.parent().children(".price").html());
	  var eq = Math.round(price * qt * 100) / 100;
	  
	  el.parent().children(".full-price").html( eq);
	  
	  changeTotal();			
	}

	function changeTotal() {
	  
	  var price = 0;
	  
	  $(".full-price").each(function(index){
	    price += parseFloat($(".full-price").eq(index).html());
	  });
	  
	  price = Math.round(price * 100) / 100;
	  var tax = Math.round(price * 0.05 * 100) / 100
	  var shipping = parseFloat($(".shipping span").html());
	  var fullPrice = Math.round((price + tax + shipping) ) / 100;
	  
	  if(price == 0) {
	    fullPrice = 0;
	  }
	  
	  $(".subtotal span").html(price);
	  $(".tax span").html(tax);
	  $(".total span").html(fullPrice);
	}

	$(document).ready(function(){
	  
	  $(".remove").click(function(){
	    var el = $(this);
	    el.parent().parent().addClass("removed");
	    window.setTimeout(
	      function(){
	        el.parent().parent().slideUp('fast', function() { 
	          el.parent().parent().remove(); 
	          if($(".product").length == 0) {
	            if(check) {
	              $("#cart").html("<h1>The shop does not function, yet!</h1>");
	            } else {
	              $("#cart").html("<h1>No products!</h1>");
	            }
	          }
	          changeTotal(); 
	        });
	      }, 200);
	  });
	  
	  $(".qt-plus").click(function(){
	    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
	    
	    $(this).parent().children(".full-price").addClass("added");
	    
	    var el = $(this);
	    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
	  });
	  
	  $(".qt-minus").click(function(){
	    
	    child = $(this).parent().children(".qt");
	    
	    if(parseInt(child.html()) > 1) {
	      child.html(parseInt(child.html()) - 1);
	    }
	    
	    $(this).parent().children(".full-price").addClass("minused");
	    
	    var el = $(this);
	    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
	  });
	  
	  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
	  
	  $(".checkout").click(function(){
	    check = true;
	    $(".remove").click();
	  });
	});
</script>

</html>