<?php include('header.php'); ?>
<style type="text/css">
.top {
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  box-shadow: 5px 9px 7px rgba(0, 0, 0, 0.3);
}

.food-card{
	padding: 10px 80px 10px 80px;
}

.cards {
	height: 180px; 
	border-radius:5px;
	box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.18);
	padding-left: 0px!important; 
	margin-top: 40px;
	margin-bottom: 40px;
}

.card-img{
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url("../images/pic.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  width: 250px;
  height: 100%;
  float: left;
  margin-right: 20px;
}

.about{
	/*padding-top: 10px;*/
	margin-bottom: 0!important;
	margin-top: 8px!important;
}

.cart-button{
	position: absolute; 
	right: 0;
	bottom: 0;
	height: 28%;
	width: 30%;
	background-color: black;
	color: white;
	border: none;
  	outline: 0;
}
.cart-button:hover {
  opacity: 0.7;
}

.vendor-btn{
	background-color: black;
	color: white;
	border: none;
  	outline: 0;
	position: relative;
	margin-top: 30px;
	margin-left: 10%;
	padding: 10px;
	width: 30%;
}

.vendor-btn:hover {
  opacity: 0.7;
}

.head-text {
  position: absolute;
  top: 40%;
  left: 44%;
  transform: translate(-50%, -50%);
  text-align: center;
  font-size:55px;
  font-family: cursive;
  position: relative;
  color: white;
}

#qty {
	width: 10%;
}

.card-content{
	padding-top: 10px;
}

#remove_item{
position: absolute;
right: 5px
}

#remove_item_btn{
font-size:20px;
color: white;
background-color: red;
border: none;
outline: 0;
}

</style>

</head>
<body>
<div class="container-fluid" style="min-height: 660px;">
<div class="row">
	<?php include('sidebar.php');
	 	include('add_item.php');
	 	include('restaurant_detail.php');
		$data = json_decode($data, true);
	?>
	<div class="main col-md-2"></div>
	<div class="main col-md-10">
		<div class="top" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)),url('<?php echo base_url().'images/restaurant/'.$img[0]['restaurant_img'];?>')">

			<div class="head-text">
				<p>
					<?php echo $img[0]['company_name'].' - '.$img[0]['rating']; ?>
					<i class="fa fa-star" aria-hidden="true"></i>
				</p>
				<p>
					<h4><?php echo ucwords($img[0]['about']);?></h4>
				</p>
			</div>
		</div>
		<div class="edit-restaurant">
			<span>
				<button type="submit" class="vendor-btn" data-toggle="modal" data-target="#restaurant_detail">Update Restaurant</button>
			</span>
			<span>
				<button type="submit" class="vendor-btn" data-toggle="modal" data-target="#add_item">Add Items</button>
			</span>
		</div>
		<div class="food-card">
			<?php 
			foreach ($data['data'] as $row):
			?>
			<div class="col-md-12 cards">
				<img src="<?php echo base_url();?>images/veg.png" style="position: absolute;left: 0;z-index: 1">
				<img src="<?php echo base_url().'images/food/'.$row['prod_image'];?>" alt="product_image" class="card-img">

				<span>
					<div class="card-content">
						<p class="about"><?php echo $row['prod_name']; ?> - <?php echo $row['prod_rating']; ?> <i class="fa fa-star" aria-hidden="true"></i>
						<span id="remove_item">
						<button id="remove_item_btn">Remove <i class="fa fa-trash-o"></i></button>
						</span>
						</p>
						<p class="about">Description : <?php echo $row['prod_description']; ?></p>
						<p class="about">Price : ₹<?php echo $row['prod_price']; ?></p>
						<p class="about">Quantity : <input type="number" name="quantity" id="qty"></p>					
					</div>  
				</span>
				<button class="cart-button" >Add to cart</button>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
</div>

<?php include('footer.php'); ?>
</body>
</html>