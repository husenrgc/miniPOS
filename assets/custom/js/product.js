$(document).ready(function() {
  $('.mycat').select2({dropdownParent: $("#modalform")});
});
$(document).on("click", '.add_btn',function(e) {
  $("#title-viewform").html('Input Data Produk');
  $('#old_image').remove();
  $('.myform form').attr('action','product/tambah')
  $('.myform form')[0].reset();
});

$(document).on("click", '.view_btn',function(e) {
  var id_view = $(this).data('id_view');
  
  $.ajax({
    type: "POST",
    url: "product/ajax_view",
    cache: true,
    dataType: 'json',
    data : {id:id_view},
    success: function(result){
      var pro = result.view;
      for (var x = 0; x < pro.length; x++) {
        $("#gambar_produk").attr({
          src: base_url+'upload/product/'+pro[x].picture,
          alt: pro[x].name
        });
        $("#v_barcode").html(pro[x].barcode);
        $("#v_nama").html(pro[x].name);
        $("#v_beli").html('Rp. '+ribuan(pro[x].buyprice));
        $("#v_jual").html('Rp. '+ribuan(pro[x].sellprice));
        $("#v_cat").html(pro[x].category);
        $("#v_desc").html(pro[x].description);
      }
    },
    error: function(result){
      console.log('error : error ajaxnya bruh');
    }
  });
});

$(document).on("click", '.edit_btn',function(e) {
  var id_edit = $(this).data('id_edit');
  $('#old_image').remove();
  
  $.ajax({
    type: "POST",
    url: "product/ajax_edit",
    cache: true,
    dataType: 'json',
    data : {id:id_edit},
    success: function(result){
      console.log(result);
      for (var x = 0; x < result.length; x++) {
        $("#name").val(result[x].name);
        $("#barcode").val(result[x].barcode);
        $("#buyprice").val(result[x].buyprice);
        $("#sellprice").val(result[x].sellprice);
        $("#image").after('<input type="hidden" name="old_image" id="old_image" value="'+result[x].picture+'">');
        var v = result[x].categoryid;
        var w = v.split(',');
        $('#mycat').val(w).change();
        $("#description").html(result[x].description);

        $("#title-viewform").html('Edit Data Produk : <b>'+result[x].name+'</b>');
      }
    },
    error: function(result){
      console.log('error : error ajaxnya bruh');
    }
  });

  $('.myform form').attr('action','product/ubah/'+id_edit);
});

$(document).on( "click", '.hapus_button',function(e) {
  var id_hapus = $(this).data('id_hapus');
  var nm_del = $(this).data('nm_del');
  $(".id_hapus").val(id_hapus);
  $("#nm_del").html(nm_del);
});