@extends('admin.header')
<table  id="example1" class="table table-bordered table-striped">
  <thead>
        <tr class="judul">
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">email</th>
	  <th scope="col">Password</th>
          <th scope="col">Departemen</th>
          <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($data as $item)
        <tr> 
            <td>{{$loop->iteration}}</td>        
            <td>{{$item->name}}</td>   
            <td>{{$item->email}}</td> 
            <td>{{$item->password}}</td>
            <td>{{$item->departemen->nama_departemen}}</td>
            <td><button class="btn btn-sm btn-success" value="Edit"  onClick="showedit({{$item->id}})">
        <i class="fas fa-calendar-check"></i></button>
        <a href="javascript:void(0);" class="delete" data-id="{{ $item->id }}" onClick="deletedata({{$item->id}})">
        <button class="btn btn-sm btn-danger" ><i class="fas fa-calendar-check"></i></button></a>
      </td>
	</tr>

    @endforeach

  </tbody>
</table>


