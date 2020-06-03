<div class="sidenav col-md-2">
	  <a href="<?php echo base_url();?>" id="foodshala">foodshala</a>
	  <hr style="background-color: white;">
	  <a href="<?php echo base_url();?>">Home</a>
	  <!-- <a href="#">Go to Cart</a> -->
	  <?php if($is_logged_in){?>
	  <a href="<?php echo base_url().'orders/'.$id;?>">Track Orders</a>
	  <a id="logouts">Logout</a>
	  <?php } else{?>
	  <a id="sidebar_login">Login</a>
	  <a id="sidebar_signup">Signup</a>
	  <?php } ?>
	  <a href="#">About</a>
	  <a href="#">Contact</a>
</div>
