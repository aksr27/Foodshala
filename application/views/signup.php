<!-- Modal -->
<div class="modal fade" id="signup">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form action="/action_page.php">
				<div id="user_type">
				<div class="form-check-inline">
	              <label class="form-check-label">
	                <input type="radio" class="form-check-input" id="cust" name="user_type" required>User
	              </label>
	            </div>
	            <div class="form-check-inline">
	              <label class="form-check-label">
	                <input type="radio" class="form-check-input" id="rest" name="user_type">Restaurant Owner
	              </label>
	            </div>
	        	</div>
	            <br>
				<div class="form-group">
				  <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="email" required>
				</div>
				<div class="form-group">
				  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" id="pwd1" placeholder="Enter Password" name="pswd" required>
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" id="pwd2" placeholder="Re-enter Password" name="pswd" required>
				</div>
				<div class="form-group">
				  <input type="number" class="form-control" id="contact" placeholder="Enter Contact Number" name="email" required>
				</div>
				<div class="form-group">
				    <textarea class="form-control" id="comment" placeholder="Enter Address" rows="3" id="comment" required></textarea>
				</div>
				<!-- <br> -->
				<div>
				<button type="submit" class="btn btn-primary" id="signup_btn" style="margin: auto;display: block;">Sign Up</button>
				</div>
			</form>
	    </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
