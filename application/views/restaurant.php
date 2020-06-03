<?php
	$data = json_decode($data, true);
 	$is_logged_in=$this->session->has_userdata('logged_in');
 	$id=$this->session->userdata('id');
 	$user_type=$this->session->userdata('user_type');
 	$name=$this->session->userdata('name');
 	$email=$this->session->userdata('email');
	include('header.php');
 	include('login.php');
 	include('signup.php');
	include('sidebar.php');
 	include('add_item.php');
 	include('restaurant_detail.php');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/restaurant.css">

<script type="text/javascript">
	var is_logged_in='<?php echo $is_logged_in;?>';
	if(is_logged_in!='')
	{
		var user_id='<?php echo $id;?>';
		var user_type='<?php echo $user_type;?>';
	}
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/restaurants.js"></script>

</head>

<body>

	<div class="container-fluid" style="min-height: 660px;">
	<div class="row">
		<p id="user"></p>
		<div class="main col-md-2"></div>
		<div class="main col-md-10">
			<div class="top" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)),url('<?php echo base_url().'images/restaurant/'.$restaurant[0]['restaurant_img'];?>')">

				<div class="head-text">
					<p>
						<?php echo $restaurant[0]['company_name'].' - '.$restaurant[0]['rating']; ?>
						<i class="fa fa-star" aria-hidden="true"></i>
					</p>
					<p>
						<h4><?php echo ucwords($restaurant[0]['about']);?></h4>
					</p>
					<p id="rest_id" hidden> <?php echo $restaurant[0]['id'];?> </p>
				</div>
			</div>
			<?php
			if($is_logged_in and $user_type=='R' and $restaurant[0]['id']==$id)
			{
				echo 
				'<div class="edit-restaurant">
					<span>
						<button type="submit" class="vendor-btn" data-toggle="modal" data-target="#restaurant_detail">Update Restaurant</button>
					</span>
					<span>
						<button type="submit" class="vendor-btn" data-toggle="modal" data-target="#add_item">Add Items</button>
					</span>
				</div>';
			}
			?>
			<div class="food-card">
				<?php 
				foreach ($data['product_data'] as $row){
				?>
				<div class="col-md-12 cards">
					<img src="<?php echo base_url().'images/'.$row['prod_type'];?>.png" style="position: absolute;left: 0;z-index: 1">
					<img src="<?php echo base_url().'images/food/'.$row['prod_image'];?>" alt="product_image" class="card-img">

					<span>
						<div class="card-content">
							<p class="about"><?php echo $row['prod_name']; ?> - <?php echo $row['prod_rating']; ?> <i class="fa fa-star" aria-hidden="true"></i>
							<?php
							if($is_logged_in and $user_type=='R' and $restaurant[0]['id']==$id){
							echo 
							'<span id="remove_item">
							<button class="remove_btn" id="'.$row['prod_id'].'">Remove <i class="fa fa-trash-o"></i></button>
							</span>';
							}?>
							</p>
							<p class="about">Description : <?php echo $row['prod_description']; ?></p>
							<p class="about">Price : ₹<?php echo $row['prod_price']; ?></p>
							<p class="about">Quantity : <input type="number" id="<?php echo $row['prod_id'].'qty';?>"></p>
						</div>
					</span>
					<button class="cart-button" id="<?php echo $row['prod_id']; ?>">Order Now</button>
				</div>
				<?php }; ?>

			</div>
		</div>
	</div>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>