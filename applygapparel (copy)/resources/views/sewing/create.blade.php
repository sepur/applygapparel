<div class="p2">
<form id="myform" enctype="multipart/form-data">
   @csrf
      <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">Departemen</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="text" oninput="this.value = this.value.toUpperCase()"  class="form-control" name="nama_departemen"
               value="{{ old('nama_departemen') }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('nama_departemen')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">Tanggal Dept</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="date" class="form-control" name="tanggal"
               value="{{ old('tanggal') }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('tanggal')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>      


         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="Close()" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="store()">Simpan</button>
         </div>
   </form>
   
   
   
</div>
