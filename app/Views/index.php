<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<!-- Add Modal -->

        <!-- Modal -->
        <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <form action="#" method="POST" enctype="multipart/form-data" id="formm" novalidate>
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="titleadd" class="form-control " placeholder="Title" required>
                  <div class="invalid-feedback">Post Title is required</div>
                </div>
                <div class="mb-3">
                  <label for="category">category</label>
                  <input type="text" name="category" id="categoryadd" class="form-control" placeholder="category" required>
                  <div class="invalid-feedback">Post category is required</div>
                </div>
                <div class="mb-3">
                  <label for="body">body</label>
                  <input type="text" name="body" id="bodyadd" class="form-control" placeholder="body" required>
                  <div class="invalid-feedback">Post body is required</div>
                </div>
                <div class="mb-3">
                  <label for="image">image</label>
                  <input type="file" id="imageadd" name="image" class="form-control" placeholder="image" required>
                  <div class="invalid-feedback">Post image is required</div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="add_post_btn">Save changes</button>
              </div>
            </div>
          </form>
          </div>
        </div>

          <!-- Modal Edit-->
          <div class="modal fade" id="edit_post_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <form action="#" method="POST" enctype="multipart/form-data" id="formmedit" novalidate>
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control " placeholder="Title" required>
                  <input type="hidden" name="id" id="id">
                  <input type="hidden" name="image_old" id="image_old">
                  <div class="invalid-feedback">Post Title is required</div>
                </div>
                <div class="mb-3">
                  <label for="category">category</label>
                  <input type="text" name="category" id="category" class="form-control" placeholder="category" required>
                  <div class="invalid-feedback">Post category is required</div>
                </div>
                <div class="mb-3">
                  <label for="body">body</label>
                  <input type="text" name="body" id="body" class="form-control" placeholder="body" required>
                  <div class="invalid-feedback">Post body is required</div>
                </div>
                <div class="mb-3">
                  <label for="image">image</label>
                  <input type="file" name="image" id="image" class="form-control" placeholder="image" required>
                  <div class="invalid-feedback">Post image is required</div>
                  <div id="imagepost">

                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="edit_post_btn">Save changes</button>
              </div>
            </div>
          </form>
          </div>
        </div>
        

    <div class="container">
      <div class="row my-4">
        <div class="col-lg-12">
          <div class="card shadow">
              <div class="card-header d-flex justify-content-between align-items-center">
                <div class="text-secondary fw-bold fs-3">All Post</div>
                  <button type="button" id="add" class="btn btn-dark" data-toggle="modal" data-target="#add-modal">Add New Post</button>
                </div>
                <div class="card-body">
                  <div class="row" id="getdatashow">
                    <h1 class="text-center text-secondary my-y">Post Loading..</h1>
                  </div>
                </div>
                <!-- <img src="" alt="" > -->
            </div>
          </div>
        </div>
    </div>
<!--  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
        <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script type="text/javascript">

    var url = '<?= base_url('post/add') ?>';
    var form = $('#formm');

    $('#formm').submit(function(e){
      
          e.preventDefault();
          let formData = new FormData(this);
          var form = $('#formm');
        $.ajax({
            type: "POST",
            url: url,
            // processData:
            enctype: 'multipart/form-data',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
       

        success: function (response) 
        {
          // console.log(response);
       
                Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                html:'Paket Berhasil <b>Disimpan</b>'
            });
            $('#titleadd').val("");
            $('#categoryadd').val("");
            $('#bodyadd').val("");
            $('#imageadd').val("");
            getdata();
            // $('#add-modal').modal('hide');
  
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
    });
    getdata();
     
    //  $('.post_edit_btn').on('click', function(){
      
    // });
    function editbtn(id) { 
      var url = '<?= base_url('post/getdata/show') ?>/' + id;

      $.ajax({
        type: 'get',
        url:url,
        success: function(response){
          data = response.message
          // console.log(data);
          $('#title').val(data.title);
          $('#category').val(data.category);
          $('#body').val(data.body);
          $('#id').val(data.id);
          // $('#image').html(data.image);
          $('#image_old').val(data.image);
          $('#imagepost').html('<img src="upload/avatar/'+data.image+'"  alt="" class="img-fluid mt-4 img-thumbnail" width="150">')
        }
      });
     }
     
     function deletebtn(id) { 
      var url = '<?= base_url('post/getdata/delete') ?>/' + id;

      $.ajax({
        type: 'delete',
        url:url,
        success: function(response){
          data = response.message
          // console.log(data);
          Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            html:'Paket Berhasil <b>Disimpan</b>'
        });
        getdata();
          }
      });
     }
     function getdata() { 
      var url = '<?= base_url('post/getdata') ?>';
    
      var table3 = document.querySelector("#getdatashow");
      table3.innerHTML= "";
      table= "";
      $.ajax({
        type: 'get',
        url:url,
        success: function(response){
          $.each(response.message, function (x,y) { 
            // console.log(x,y)
            var html = '<div class="col-md-4">\
                  <div class="card shadow-ms">\
                      <img src="upload/avatar/'+y["image"]+'" alt="" width="300" height=" 200">\
                    <div class="card-body">\
                        <div class="d-flex justify-content-between align-items-center">\
                          <div class="card-title fs-5 fw-bold"> '+y["title"]+' </div>\
                          <div class="badge badge-dark">'+y["category"]+'</div>\
                        </div>\
                          <p>\
                          '+ y["title"]+'</p>\
                    </div>\
                    <div class="card-footer d-flex justify-content-between align-items-center">\
                      <div style="font-style: italic;">'+y["created_at"]+'</div>\
                      <div>\
                        <button type="button" id="'+y["id"]+'" onclick="editbtn('+y["id"]+')" data-toggle="modal" data-target="#edit_post_modal" data-attid="'+y["id"]+'" class="btn btn-success btn-sm post_edit_btn">Edit</button>\
                        <button type="button" id="'+y["id"]+'" onclick="deletebtn('+y["id"]+')" class="btn btn-danger btn-sm post_delete_btn">Delete</button>\
                      </div></div></div></div>  </div>'   
                      table3.innerHTML = table3.innerHTML + html;
                      // $('#getdatashow').html(response.html)
                      // table.html(html);   
                      
           })
        }
      })
      
     }

     $('#formmedit').submit(function(e){
      
      e.preventDefault();
      let formData = new FormData(this);
      var form = $('#formmedit');
      url = '<?= base_url('post/update') ?>';
    $.ajax({
        type: "POST",
        url: url,
        // processData:
        enctype: 'multipart/form-data',
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
   

    success: function (response) 
    {
      // console.log(response);
   
            Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            html:'Paket Berhasil <b>Disimpan</b>'
        });
        data = response.message
          console.log(data);
          $('#title').val(data.title);
          $('#category').val(data.category);
          $('#body').val(data.body);
          $('#id').val(data.id);
          $('#image_old').val(data.image);
          $('#imagepost').html('<img src="upload/avatar/'+data.image+'"  alt="" class="img-fluid mt-4 img-thumbnail" width="150">')
       
        getdata();
        // $('#add-modal').modal('hide');

    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
});
});

</script>
</body>
</html>