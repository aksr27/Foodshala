<!-- Modal -->
<div class="modal fade" id="add_item">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Items</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="usr">Food Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Restaurant Name" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Food Description:</label>
              <input type="text" class="form-control" id="description" placeholder="Enter Restaurant Description in short" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Price:</label>
              <input type="text" class="form-control" id="cusine" placeholder="Enter Restaurant Cusine" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Quantity:</label>
              <input type="text" class="form-control" id="address" placeholder="Updated Address" name="email" required>
            </div>
            <div class="form-group">
              <label for="usr">Type:</label><br>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio" required>Veg
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Non-Veg
              </label>
            </div>
          </div>
            <br>
            <div class="form-group">
              <label for="usr">Food Image:</label>
              <input type="file" class="form-control-sm" id="email" name="email" required>
            </div>
            <br>
            <div>
              <button type="submit" class="btn btn-primary" style="margin: auto;display: block;">Add</button>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          
        </div>

      </div>
    </div>
</div>
