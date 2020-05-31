<?php include('header.php'); ?>
	
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">


<script type="text/javascript">
	$('#signup_btn').click(function(){
		// if($('#cust').is(':checked'){
			$(this).hide();
		// }
	});
</script>

</head>

<body>
<div class="container-fluid head-image">
	<nav>
		<ul class="nav justify-content-end" >
			<li class="nav-item">
				<a class="nav-link" type="button" data-toggle="modal" id="login_btn" data-target="#login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" type="button" data-toggle="modal" id="signup_btn" data-target="#signup">Signup</a>
			</li>
		</ul>
	</nav>

	<div class="head-text">
	    <p class="head-text1">foodshala</p><br>
	    <p class="head-text2">Discover the best food & drinks around you</p>
	    <br>
	    <!-- search bar over image, not in use yet -->
	    <form class="search-form">
		    <div class="input-group">
		      <div class="input-group-prepend">
		        <button style="background-color: white; color: black;" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">Location</button>
		        <div class="dropdown-menu">
		          <a class="dropdown-item" href="#">Delhi NCR</a>
		          <a class="dropdown-item" href="#">Mumbai</a>
		          <a class="dropdown-item" href="#">Kolkata</a>
		        </div>
		      </div>
		      <input  style="opacity: 0.7" type="text" class="form-control" placeholder="Uncover your taste here..">
		    </div>
	  </form>

	</div>
</div>

<!-- it contains all restaurants -->
<div class="container restaurants">

<!-- cards -->
<div class="row">

<?php 
$data = json_decode($data, true);
foreach ($data as $row):
?>
	<div class="col-sm-6">
		<div class="card">
		  <img class="card-img" src="<?php echo base_url().'images/restaurant/'.$row['restaurant_img']?>" alt="Denim Jeans" style="width:100%">
		  <p class="p-card">
		  <span class="vendor_name"><?php echo $row['company_name']; ?></span>
		  <span class="rating"> - <?php echo $row['rating']; ?> <i class="fa fa-star" aria-hidden="true"></i></span>
		  <br>
		  <span class="about"><?php echo $row['about']; ?></span><br>
		  
		  <span class="address"><?php echo $row['vendor_address']; ?></span><br>
		  <span class="cusine"><?php echo ucwords($row['cusine']); ?></span><br>
		  </p>
		  <button onclick="window.open('<?php echo base_url()."restaurant/".$row['vendor_id']; ?>')">Order online</button>
		</div>
	</div>
<?php endforeach; ?>

</div>
<!-- card ends -->


<?php include('login.php'); ?>
<?php include('signup.php'); ?>

</div>

<?php include('footer.php'); ?>
</body>
</html>