<!-- Modal -->
<div class="modal fade" id="restaurant_detail">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Your Restaurant</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" id="rest_email" name="email" value="<?php echo $restaurant[0]['email'] ?>" hidden>
            </div>
            <p id="update_err"></p>
    		    <div class="form-group">
              <label for="name">Restaurant Name:</label>
    		      <input type="text" class="form-control" id="rest_name" placeholder="Enter Restaurant Name" name="name" required>
    		    </div>
            <div class="form-group">
              <label for="desc">Short Description:</label>
              <input type="text" class="form-control" id="rest_description" placeholder="Enter Restaurant Description in short" name="desc" required>
            </div>
            <div class="form-group">
              <label for="cusine">Cusine:</label>
              <input type="text" class="form-control" id="rest_cusine" placeholder="Enter Restaurant Cusine" name="cusine" required>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="rest_address" placeholder="Updated Address" name="address" required>
            </div>
            <div class="form-group">
              <label for="contact">Contact:</label>
              <input type="number" class="form-control" id="rest_contact" placeholder="Updated Contact" name="contact" required>
              <p id="update_cont_err"></p>
            </div>
            <!-- <div class="form-group">
              <label for="restaurant_img">Restaurant Image:</label>
              <input type="file" class="form-control-sm" id="email" name="restaurant_img" required>
            </div> -->
            <br>
            <div>
      		    <button id="update_btn" type="button" class="btn btn-primary" style="margin: auto;display: block;">Update</button>
            </div>
		      </form>
        </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
