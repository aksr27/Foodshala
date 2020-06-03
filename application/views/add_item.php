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
          <form enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" id="food_id" name="food_name" value="<?php echo $restaurant[0]['id']; ?>" hidden>
            </div>
            <p id="err"></p>
            <div class="form-group">
              <label>Food Name:</label>
              <input type="text" class="form-control" id="food_name" placeholder="Enter Food Name" name="food_name" required>
            </div>
            <div class="form-group">
              <label>Food Description:</label>
              <input type="text" class="form-control" id="food_description" placeholder="Enter Food Description in short" name="food_description" required>
            </div>
            <div class="form-group">
              <label>Price:</label>
              <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" required>
            </div>
            <div class="form-group">
              <label>Type:</label><br>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="0" name="food_type" required>Veg
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="1" name="food_type">Non-Veg
              </label>
            </div>
          </div>
            <!-- <br>
            <div class="form-group">
              <label for="usr">Food Image:</label>
              <input type="file" class="form-control-sm" id="email" name="email" required>
            </div> -->
            <br>
            <div>
              <button type="button" id="item_btn" class="btn btn-primary" style="margin: auto;display: block;">Add</button>
            </div>
          </form>
        </div>

        <div class="modal-footer">
          
        </div>

      </div>
    </div>
</div>
