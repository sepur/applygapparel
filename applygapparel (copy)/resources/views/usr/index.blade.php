@extends('welcome')
@section('content')
<!--conten tittle dan bredcrumb -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
	<h1 class="m-0">User</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
	  <li class="breadcrumb-item"><a href="#">Home</a></li>
	  <li class="breadcrumb-item active">User</li>
	</ol>
      </div>
    </div>
  </div>
</div>
<!-- akhir conten tittle dan bredcrumb -->
<!--conten -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
	  <div class="p-2 mb-2">
            <button type="button" class="btn btn-primary" onClick="create()"><i class="fas fa-plus" style="color:#fff;"></i> Tambah </button>
	  </div>
          <div id="read" class="mt-3"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Akhir conten -->


<!-- Modal -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" onClick="Close()" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div id="page" class="p-2"></div>
          </div>
        </div>
      </div>
    </div>

  



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
<script type="text/javascript">


   $(document).ready(function(){
    read();
   });

  function create() {
    $.get("{{ route('usr.adduser') }}",{},
  function(data,status){
      $("#exampleModalLabel").html('Add User');
      $("#page").html(data);
      $("#exampleModal").modal('show');
    });
  }
    function Close() {
      $("#exampleModal").modal("hide");
    }

//Membuat Untuk Simpan Data Dari Modal Form Create
    function store(){
      event.preventDefault();
        var form = $('#myform')[0];
        var formData = new FormData(form);
        console.log("ini datanya = ", formData)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
          url:"{{ url('usr/saveuser') }}",
          data: formData,
          cache: false,
          processData: false,
          contentType: false,
          type: 'POST',
          success:function(data){
            //$("#close-button").click();
	    $("#page").html('');
	    read();
            $("#exampleModal").modal("hide");
            console.log("ini data 2",data);
            //alert("berhasil",data)
          },
          
	    error: function (request, error) {
            var err = JSON.parse(request.responseText);
            console.log('ini erroorr euuyy')
            alert(err.message);
	},
      });
    }

    function read() {
        $.get("{{ url('/usr/read') }}",{},
	    function(data,status){
            $("#read").html(data);
	    });
    }


// Edit Kelurahan
function showedit(id) {
  $.get("{{ url('/usr/showedit') }}/"+id,{},
    function(data,status){
      $("#exampleModalLabel").html('Edit User');
      $("#page").html(data);
      $("#exampleModal").modal('show');
    });
 }


//Membuat Untuk Simpan Data Dari Modal Form Update(approve)
function editstore(id){
event.preventDefault();
var form = $('#myform')[0];
  var formData = new FormData(form);
  console.log("ini datanya = ", formData)
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $.ajax({
    url:"{{ url('/usr/editstore') }}/"+id,
    data: formData,
    cache: false,
    processData: false,
    contentType: false,
    type: 'POST',
    success:function(data){
      read()
      $("#page").html('');
      $("#exampleModal").modal("hide");
      console.log("ini data 2",data);
    },
      error:function(data){
        console.log('ini error ==',data);
    }
  });
}    


//delete
function deletedata(id) {
  $.ajax({ 
      url:"{{ url('/usr/destroy') }}/"+id,
      data: {"id": id,"_token": "{{ csrf_token() }}"},
      type: 'post',
      success: function(result){
        alert('Yakin Akan Menghapus ini?');
        read()
      }
    });
  
}
    </script>
</body>

@endsection
