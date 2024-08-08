<div class="p2">
<form id="myform" enctype="multipart/form-data">
   @csrf
      <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">Nama Usaaaar {{ $data->id }}</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="text" oninput="this.value = this.value.toUpperCase()"  class="form-control" name="user_name"
               value="{{ $data->name }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('name')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      
        <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">email</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="text" oninput="this.value = this.value.toLowerCase()"  class="form-control" name="email"
               value="{{ $data->email }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('email')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      
      <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">Departemen</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
	      <!-- select -->
	      <div class="form-group">
		<select class="form-control" style="width: 300px;" name="departemen">           
		 @foreach ($dep as $pt)
		     <option value="{{ $pt->id }}" {{ $pt->id == $data->departemen->id  ? 'selected' :''}}>{{ $pt->id }}--{{ $pt->nama_departemen }}</option>
		 @endforeach		
		</select>        
            <!-- error message untuk title -->
            @error('departemen')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>
      
               
        <div class="mb-4 row row-body">
         <label class="col-sm-4 col-form-label">Password</label>
         <div class="col-sm-9 col-md-9 col-lg-10 col-xl-10">
            <input type="password" class="form-control" name="password"
               value="{{ $data->password }}" style="width: 300px;">
         
            <!-- error message untuk title -->
            @error('password')
               <div class="alert alert-danger mt-2">
                     {{ $message }}
               </div>
            @enderror
         </div>
      </div>


         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" onclick="Close()" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="editstore()">Simpan</button>
         </div>
   </form>
   
   
   
</div>
