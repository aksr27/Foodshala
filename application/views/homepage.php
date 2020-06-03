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
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">

</head>

<body>
<div class="container-fluid head-image">
	<nav>
		<?php
		if(!$is_logged_in)
		echo '<ul class="nav justify-content-end" >
			<li class="nav-item">
				<a class="nav-link" type="button" data-toggle="modal" id="login" data-target="#login_modal">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" type="button" data-toggle="modal" id="signup" data-target="#signup_modal">Signup</a>
			</li>
		</ul>';
		
		else 
			echo '<ul class="nav justify-content-end" >
			<li class="nav-item">
				<a class="nav-link" type="button" >'.$name.'</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" type="button" id="logout">Logout</a>
			</li>
		</ul>'
		?>
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
foreach ($data as $row):
?>
	<div class="col-sm-6">
		<div class="card">
		  <img class="card-img" src="<?php echo base_url().'images/restaurant/'.$row['restaurant_img']?>" alt="Denim Jeans" style="width:100%">
		  <p class="p-card">
		  <span class="vendor_name"><?php echo $row['company_name']; ?></span>
		  <span class="rating"> - <?php echo $row['rating']; ?> <i class="fa fa-star" aria-hidden="true"></i></span>
		  <br><span class="about"><?php echo $row['about']; ?></span><br>
		  <span class="address"><?php echo $row['address']; ?></span><br>
		  <span class="cusine"><?php echo ucwords($row['cusine']); ?></span><br>
		  </p>
		  <button onclick="window.open('<?php echo base_url()."restaurant/".$row['id']; ?>')">Order online</button>
		</div>
	</div>
<?php endforeach; ?>

</div>
<!-- card ends -->

</div>

<?php include('footer.php'); ?>

</body>
</html>