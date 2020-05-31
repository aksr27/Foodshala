<!-- Modal -->
<div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Welcome Back</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
    		    <div class="form-group">
    		      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    		    </div>
    		    <div class="form-group">
    		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    		    </div>
            
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio" required>User
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Restaurant Owner
              </label>
            </div>
            <br><br>
            <div>
      		    <button type="submit" class="btn btn-primary" style="margin: auto;display: block;">Login</button>
            </div>
		      </form>
        </div>

        <div class="modal-footer">
        	
        </div>

      </div>
    </div>
</div>
