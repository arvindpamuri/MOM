<?php
require_once('../dbconnect.php');
$query='select * from mom_menu';
$sql=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		var refernce=0;
		function getReference(){
			reference= "<?php echo $val ?>";
		}
		function showItem() {
			getReference();
			document.getElementById(reference).style.display = "block";	
		}
		function showCart(){
			document.getElementById('Cart').style.display ="block";
		}
		function addChocolate(){
			document.getElementById('ChocolateDrink').style.display='block';
		}
	</script>
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
					<?php
					while($row=mysqli_fetch_array($sql)){
					$val = row[p_id]; 
					echo'
					<div class="col-md-4">
						<div class="card product-card" style="width: 18rem;">';
						 echo' <img class="card-img-top" height="190rem" src="'.$row['img'].'" alt="Card image cap">';
						 echo' <div class="card-body">';
						  echo'  <h5 class="card-title">'.$row['p_name'].'</h5>';
						   echo' <h6><i class="fa fa-rupee"></i>'.$row['price'].'</h6>';
					        echo '<button class="btn btn-primary text-right" onclick="showItem(ref)">View</button>';
					        echo '
						  </div>
						</div>
					</div>';
					}
					?>
				</div>
			</div>
			<div class="col-lg-5 description-half" id = "Sale">
				<div class="container" id="desc" style="display:none">
				    <div class="card flex-row flex-wrap">
				        <div class="card-header border-0">
				            <img style="height: 13rem; width: 13rem;" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffreevector.co%2Fwp-content%2Fuploads%2F2013%2F10%2F82468-milkshake-with-straw.png&f=1" alt="cat">
				        </div>
				        <div class="card-block px-2">
				            <h4 class="card-title">Interesting Drink</h4>
				            <p class="card-text">Made with Love and cat pee</p>
				            <a href="#" class="btn btn-primary" onclick="showCart()">Add To Cart</a>
				        </div>
				        <div class="w-100"></div>
				        <div class="card-footer w-100 text-muted">
				            Footer stating cats are CUTE little animals
				        </div>
				    </div>
				    <br>
				</div>
				<div class="container" id="chocolate" style="display:none">
					<div class="card flex-row flex-wrap">
							<div class="card-header border-0">
						  <img class="card-img-top" height="190rem" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtuUN_AuZfof7KhbPwe1Q4EJlMB1FF2Tj9yUDpliph7J1M31DYIw" alt="Card image cap">
							</div>
							<div class="card-block px-2">
									<h4 class="card-title">Chocolate</h4>
									<p class="card-text">Made with Love and chocolate</p>
									<a href="#" class="btn btn-primary" onclick="addChocolate()">Add To Cart</a>
							</div>
							<div class="w-100"></div>
							<div class="card-footer w-100 text-muted">
									Footer stating this is a chocolate icecream
							</div>
					</div>
					<br>
			</div>
			<div class="container" id="strawberry" style="display:none">
				<div class="card flex-row flex-wrap">
						<div class="card-header border-0">
								<img style="height: 13rem; width: 13rem;" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffreevector.co%2Fwp-content%2Fuploads%2F2013%2F10%2F82468-milkshake-with-straw.png&f=1" alt="cat">
						</div>
						<div class="card-block px-2">
								<h4 class="card-title">StrawBerry</h4>
								<p class="card-text">Made with Love and strawberry</p>
								<a href="#" class="btn btn-primary" onclick="showCart()">Add To Cart</a>
						</div>
						<div class="w-100"></div>
						<div class="card-footer w-100 text-muted">
								Footer stating this is a strawberry icecream
						</div>
				</div>
				<br>
		</div>
		<div class="container" id="vanilla" style="display:none">
			<div class="card flex-row flex-wrap">
					<div class="card-header border-0">
							<img style="height: 13rem; width: 13rem;" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffreevector.co%2Fwp-content%2Fuploads%2F2013%2F10%2F82468-milkshake-with-straw.png&f=1" alt="cat">
					</div>
					<div class="card-block px-2">
							<h4 class="card-title">Vanilla</h4>
							<p class="card-text">Made with Love and vanilla</p>
							<a href="#" class="btn btn-primary" onclick="showCart()">Add To Cart</a>
					</div>
					<div class="w-100"></div>
					<div class="card-footer w-100 text-muted">
							Footer stating this is a vanilla icecream
					</div>
			</div>
			<br>
	</div>
				<div class="container" id="Cart" style="display:none">
					<table id="cart" class="table table-hover table-condensed">
				    				<thead>
										<tr>
											<th style="width:50%">Product</th>
											<th style="width:10%">Price</th>
											<th style="width:8%">Quantity</th>
											<th style="width:22%" class="text-center">Subtotal</th>
											<th style="width:10%"></th>
										</tr>
									</thead>
									<tbody>
										<tr id="drinkcartdefault">
											<td data-th="Product">
												<div class="row">
													<div class="col-sm-1 hidden-xs"><img style="height: 2rem; width: rem;" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffreevector.co%2Fwp-content%2Fuploads%2F2013%2F10%2F82468-milkshake-with-straw.png&f=1" alt="..." class="img-responsive"/></div>
													<div class="col-sm-10">
														<h5 class="nomargin">Interesting Drink</h5>
													</div>
												</div>
											</td>
											<td data-th="Price"><i class="fa fa-rupee"></i>300</td>
											<td data-th="Quantity">
												<input type="number" class="form-control text-center" value="1">
											</td>
											<td data-th="Subtotal" class="text-center">300</td>
											<td class="actions" data-th="">
												<button class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
											</td>
										</tr>
										<tr id="ChocolateDrink">
											<td data-th="Product">
												<div class="row">
													<div class="col-sm-1 hidden-xs"><img style="height: 2rem; width: rem;" src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Ffreevector.co%2Fwp-content%2Fuploads%2F2013%2F10%2F82468-milkshake-with-straw.png&f=1" alt="..." class="img-responsive"/></div>
													<div class="col-sm-10">
														<h5 class="nomargin">ChocolateDrink</h5>
													</div>
												</div>
											</td>
											<td data-th="Price"><i class="fa fa-rupee"></i>300</td>
											<td data-th="Quantity">
												<input type="number" class="form-control text-center" value="1">
											</td>
											<td data-th="Subtotal" class="text-center">300</td>
											<td class="actions" data-th="">
												<button class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="visible-xs">
											<td class="text-center"><strong>Total <i class="fa fa-rupee"></i>300</strong></td>
										</tr>
										<tr>
											<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
											<td colspan="2" class="hidden-xs"></td>
											<td class="hidden-xs text-center"><strong><i class="fa fa-rupee"></i>300</strong></td>
											<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
										</tr>
									</tfoot>
								</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>