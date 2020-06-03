<!-- Modal -->
<div class="modal fade" id="signup_modal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<form method="POST" enctype="multipart/form-data">
				<span id="err"></span>
				<div id="user_type">
				<div class="form-check-inline">
	              <label class="form-check-label">
	                <input type="radio" class="form-check-input" value="U" id="user_U" name="signup_user_type" required>User
	              </label>
	            </div>
	            <div class="form-check-inline">
	              <label class="form-check-label">
	                <input type="radio" class="form-check-input" value="R" id="user_R" name="signup_user_type">Restaurant Owner
	              </label>
	            </div>
	        	</div>
	            <br>
				<div class="form-group">
				  <input type="text" class="form-control" id="signup_name" placeholder="Enter Your Full Name" name="name" value="" required>
				  <p id="name_err"></p>
				</div>
				<div class="form-group">
				  <input type="email" class="form-control" id="signup_email" placeholder="Enter Email" name="email" value="" required>
				  <p id="email_err"></p>
				</div>
				<div class="form-group">
				  <input type="text" class="form-control" id="signup_rest_name" placeholder="Enter Restaurant Name" name="rest_name" value="" required hidden>
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" id="pwd1" placeholder="Enter Password" name="passwd" value="" required>
				</div>
				<div class="form-group">
				  <input type="password" class="form-control" id="pwd2" placeholder="Re-enter Password" name="repasswd" value="" required>
				  <p id="pass_err"></p>
				</div>
				<div class="form-group">
				  <input type="number" class="form-control" id="signup_contact" placeholder="Enter 10 digit contact Number" name="moNumber" value="" required>
				  <p id="cont_err"></p>
				</div>
				<div class="form-group">
				    <textarea class="form-control" id="signup_address" placeholder="Enter Address" rows="3" id="addr" name="addr" value="" required></textarea>
				</div>
				<!-- <br> -->
				<div>
				<button class="btn btn-primary" name="signup_btn" type="button" id="signup_btn" style="margin: auto;display: block;">Sign Up</button>
				</div>
			</form>
	    </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
