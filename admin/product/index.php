<?php
require_once __DIR__ . "/../layouts/header.php";
?>
<div class="container">
  <div class="mt-5">
    <form id="image_form" enctype="multipart/form-data" action="/admin/product/upload-image.php" method="post">
      <div class="form-group">
        <label for="image">이미지</label><br />
        <input type="file" id="image" name="image" onchange="uploadFile()">
      </div>
    </form>
    <form id="form" action="/admin/product/save.php" method="post">
      <div class="form-group">
        <label for="image">이미지</label><br />
        <img src="" id="product_image_src">
        <input type="hidden" name="image" id="product_image">
      </div>
      <div class="form-group">
        <label for="title">상품명</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="description">상품설명</label>
        <textarea class="form-control" id="description" name="description" rows="10"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">저장</button>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="image_cropper" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="image_cropper_body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="saveImage()">저장</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>

<script>
  var jcrop;
  var imageFileName;

  function saveImage() {
    var bounds = jcrop.getBounds();
    var select = jcrop.tellSelect();

    $.ajax({
      url: '/admin/product/crop.php',
      data: {
        bound: bounds,
        image: imageFileName,
        select: select
      },
      type: 'post',
      success: function(response) {
        var json = JSON.parse(response);

        $('#product_image_src').attr('src', json.filename);
        $('#product_image').val(json.filename);

        $('#image_cropper').modal('hide');
      }
    })
  }

  function uploadFile() {
    var $form = $('#image_form');

    $form.ajaxSubmit({
      success: function(response) {
        var json = JSON.parse(response);

        if (json.result == 'success') {
          $('.modal-image').remove();

          var $img = $('<img style="max-width: 100%;">');

          $img.attr('src', json.filename);
          $img.addClass('modal-image');

          $img.appendTo($('#image_cropper_body'));

          imageFileName = json.filename;

          $('#image_cropper').modal();
        }
      }
    });
  }

  $(function() {
    $('#image_cropper').on('shown.bs.modal', function() {
      $(this).find('img').Jcrop({
        boxWidth: $('#image_cropper_body').width()
      }, function() {
        jcrop = this;
      });
    });
  });
</script>

<?php
require_once __DIR__ . '/../layouts/footer.php';
