<div class="p2">
<form id="myform" enctype="multipart/form-data">
   @csrf
      <div class="mb-3 row row-body">
         <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Departemen</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="text" oninput="this.value = this.value.toUpperCase()" class="ms-1 form-control form-control-sm col-form-input @error('nama_kota') is-invalid @enderror" name="nama_departemen"
               value="{{ $data->nama_departemen }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('nama_departemen')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>

      <div class="mb-3 row row-body">
         <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Tanggal</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="date"  class="ms-1 form-control form-control-sm col-form-input @error('nama_kecamatan') is-invalid @enderror" name="tanggal"
               value="{{$data->tanggal }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('tanggal')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>

      <div class="mb-3 row row-body">
         <label class="col-sm-3 col-md-3 col-lg-2 col-xl-2 col-form-label">Status</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
         <select class="form-control form-control-sm col-form-input  @error('status') is-invalid @enderror" id="status" name="status">
               <option value="">--Please Select--</option>
               <option value="Aktif">Aktif</option>
               <option value="Non Aktif">Non Aktif</option>
            </select>
            @error('status')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
            </div>
            
      </div>

	 </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="Close()" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="editstore({{$data->id}})">Simpan</button>
         </div>
   </form>
</div>
