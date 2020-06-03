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
?>

<style type="text/css">
.table{
	table-layout: auto;
}
</style>
<script type="text/javascript" src="<?php echo base_url(); ?>js/restaurants.js"></script>
</head>
<body>
	<div class="container-fluid main-container" style="min-height: 660px;">
		<div class="row">
			<?php include('sidebar.php'); ?>
			<div class="col-md-2"></div>
			<div class="main col-md-10">
				<table class="table">
				    <thead>
				      <tr>
				      	<th></th>
				        <th>Product Name</th>
				        <th>Address</th>
				        <th>Status</th>
				        <th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php foreach ($data['data'] as $row) { 
				    	echo
					      '<tr>
					        <td></td>
					        <td>'.$row["prod_name"].'</td>
					        <td>'.$row["name"].'<br>'.$row["address"].'</td><td>';
					        if($row["order_status"]==0 and $user_type=='R')
					        {
					        	echo '<label><input class="delivery" id="'.$row["order_id"].'" type="checkbox"> Delivered </label>';
					        }
					      	else if($row["order_status"]==0 and $user_type=='U')
					      	{
					      		echo "ORDER PLACED";
					      	}
					      	else
					      	{
					      		echo 'DELIVERED';
					      	}
					    echo '</td></tr>';
				    }?>
				    </tbody>
				  </table>
		
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>
</body>
</html>
