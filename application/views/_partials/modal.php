<div class="modal fade" id="tambahproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- strat form -->
       <div style="color: red;"><?php echo validation_errors(); ?></div>
 <?php echo form_open_multipart('pages/product/tambah');?>
       <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo set_value('name'); ?>">
  </div>
  <div class="form-group">
                  <label for="name">Photo</label>
                  <input class="form-control-file "
                   type="file" name="image" />
                  
                </div>
                <div class="form-group">
    <label >Barcode</label>
    <input type="text" class="form-control" name="barcode"  value="<?php echo set_value('barcode'); ?>">
  </div>
 <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" name="description"  value="<?php echo set_value('description'); ?>">
  </div>

   <div class="form-group">
   
          <label>Categorys</label>
          <select   class="chosen-select " name="select" style=" background: black !important;">
          <?php  foreach($product_category as $data){
          echo "<option value='".$data->id."' style='color:black;'>".$data->name."</option>";
        }  ?>
       </select>

</div>
   <div class="form-group">
    <label >buyprice</label>
    <input type="text" class="form-control" name="buyprice"  value="<?php echo set_value('buyprice'); ?>">
  </div>
  <div class="form-group">
    <label >sellprice</label>
    <input type="text" class="form-control" name="sellprice"  value="<?php echo set_value('sellprice'); ?>">
  </div>

  <!-- end form -->
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Save" class="btn btn-primary">
       <?php echo form_close(); ?>

      </div>
    </div>
  </div>
</div>


<!-- modalcat -->
<div class="modal fade" id="tambahcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Input Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <div style="color: red;"><?php echo validation_errors(); ?></div>
 <?php echo form_open_multipart('pages/category/tambah');?>
     <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo set_value('name'); ?>">
  </div>
  <div class="form-group">
                  <label for="name">Photo</label>
                  <input class="form-control-file "
                   type="file" name="image" />
                  
                </div>
 <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" name="description"  value="<?php echo set_value('description'); ?>">
  </div>
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <input type="submit" name="submit" value="Save" class="btn btn-primary"></input>
      </div>
       <?php echo form_close(); ?>

    </div>
  </div>
</div>

