$(document).on('click', '.add_btn',function(e) {
  $('#title-viewform').html('Input Data Kategori Produk');
  $('#old_image').remove();
  $('.myform form').attr('action','category/tambah')
  $('.myform form')[0].reset();
});

$(document).on('click', '.edit_btn',function(e) {
  var id_edit = $(this).data('id_edit');
  $('#old_image').remove();
  
  $.ajax({
    type: 'POST',
    url: 'category/ajax_edit',
    cache: true,
    dataType: 'json',
    data : {id:id_edit},
    success: function(result){
      console.log(result);
      for (var x = 0; x < result.length; x++) {
        $('#name').val(result[x].name);
        $('#image').after('<input type="hidden" name="old_image" id="old_image" value="'+result[x].picture+'">');
        $('#description').html(result[x].description);

        $('#title-viewform').html('Edit Data Kategori Produk : <b>'+result[x].name+'</b>');
      }
    },
    error: function(result){
      console.log('error : error ajaxnya bruh');
    }
  });

  $('.myform form').attr('action','category/ubah/'+id_edit);
});

$(document).on( 'click', '.hapus_button',function(e) {
  var id_hapus = $(this).data('id_hapus');
  var nm_del = $(this).data('nm_del');
  $('.id_hapus').val(id_hapus);

  $.ajax({
    type: 'POST',
    url: 'category/ajax_del',
    cache: true,
    dataType: 'json',
    data : {id:id_hapus},
    success: function(result){
      if (result>0) {
        $('#del-msg').html('Kategori produk ini tidak dapat dihapus, karena masih terikat dengan produk yang ada');
        $('#bt-del').attr('disabled', true);
      } else {
        $('#del-msg').html('Apakah anda yakin akan menghapus kategori produk <b id="nm_del"></b>?');
        $('#bt-del').attr('disabled', false);
      }
      
      $('#nm_del').html(nm_del);
    },
    error: function(result){
      console.log('error : error ajaxnya bruh');
    }
  });
});