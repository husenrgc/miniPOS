<div class="modal fade" id="tambahproduct" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Input Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- strat form -->
        <div style="color: red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open_multipart('pages/product/tambah');?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nama Produk</label>
              <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Photo</label>
              <input class="form-control-file" type="file" name="image" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Kode Barcode</label>
              <input type="text" class="form-control" name="barcode" value="<?php echo set_value('barcode'); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Harga Beli</label>
              <input type="number" class="form-control" name="buyprice" value="<?php echo set_value('buyprice'); ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Harga Jual</label>
              <input type="number" class="form-control" name="sellprice" value="<?php echo set_value('sellprice'); ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Kategori</label>
              <select class="mycat" name="select[]" multiple>
              <?php  foreach($product_category as $data){
                echo "<option value='".$data->id."' style='color:black;'>".$data->name."</option>";
                }  ?>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" name="description"><?php echo set_value('description'); ?></textarea>
            </div>
          </div>
        </div>
        <!-- end form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Save" class="btn btn-success">
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
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
        </div>
        <div class="form-group">
          <label for="name">Photo</label>
          <input class="form-control-file "
            type="file" name="image" />
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" class="form-control" name="description" value="<?php echo set_value('description'); ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Save" class="btn btn-success"></input>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>