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
          <form action="/action_page.php">
    		    <div class="form-group">
              <label for="usr">Restaurant Name:</label>
    		      <input type="text" class="form-control" id="name" placeholder="Enter Restaurant Name" name="email" required>
    		    </div>
            <div class="form-group">
              <label for="usr">Short Description:</label>
              <input type="text" class="form-control" id="description" placeholder="Enter Restaurant Description in short" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Cusine:</label>
              <input type="text" class="form-control" id="cusine" placeholder="Enter Restaurant Cusine" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Address:</label>
              <input type="text" class="form-control" id="address" placeholder="Updated Address" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Contact:</label>
              <input type="text" class="form-control" id="contact" placeholder="Updated Contact" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Restaurant Image:</label>
              <input type="file" class="form-control-sm" id="email" name="email" required>
            </div>
            <br>
            <div>
      		    <button type="submit" class="btn btn-primary" style="margin: auto;display: block;">Update</button>
            </div>
		      </form>
        </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
