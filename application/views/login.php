<!-- Modal -->
<div class="modal fade" id="login_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Welcome Back</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
            <div class="form-group">
              <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
            </div>
    		    <div class="form-group">
    		      <input type="email" class="form-control" id="login-email" placeholder="Enter email" name="email" value="" required>
    		    </div>
    		    <div class="form-group">
    		      <input type="password" class="form-control" id="passwd" placeholder="Enter password" name="passwd" value="" required>
    		    </div>
            
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="user_type" value="U" required>User
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="user_type" value="R">Restaurant Owner
              </label>
            </div>
            <br><br>
            <div>
      		    <button class="btn btn-primary" id="login_btn" style="margin: auto;display: block;">Login</button>
            </div>
		      </form>
        </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
