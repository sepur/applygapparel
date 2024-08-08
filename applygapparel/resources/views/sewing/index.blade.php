@extends('welcome')
@section('content')

<!--conten tittle dan bredcrumb -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
	<h1 class="m-0">Sewing</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
	  <li class="breadcrumb-item"><a href="#">Home</a></li>
	  <li class="breadcrumb-item active">Sewing</li>
	</ol>
      </div>
    </div>
  </div>
</div>
<!-- akhir conten tittle dan bredcrumb -->
<!--conten -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow rounded">
        <div class="card-body">
	       <div class="p-2 mb-2">
            </div>
            <h2>Summery</h2>

          <div id="read" class="mt-3 mb-6 card card-shadow" style="width: 100%;"></div>
          <h3 id="judulDetailTransaksi"></h3>
          <div id="readDetail" class="card card-shadow" style="width: 100%;"></div> <!-- Tambahkan elemen ini -->
        </div>
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

   function read() {
      $.get("{{ url('/sewingoutput/read') }}",{},
	    function(data,status){
        $("#read").html(data);
	    });
    }

</script>
</body>

@endsection
