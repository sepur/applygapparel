@extends('admin.header')
<table  id="example1" class="table table-bordered table-striped">
<thead>
            <tr>
                <th>Date</th>
                <th>Style Code</th>
                <th>Total Size</th>
                <th>Total Output</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($finalSummary as $item)
                <tr>
                <td>{{ $item['Date'] }}</td>
                    <td>{{ $item['StyleCode'] }}</td>
                    <td>{{ $item['TotalSize'] }}</td>
                    <td>{{ $item['TotalOutput'] }}</td>
                    <td>
                      <!-- <a href="javascript:void(0);" class="success" data-id="{{ $item['Date'] }}" onClick="a({{$item['Date']}})">
                      <button class="btn btn-sm btn-success" ><i class="fas fa-eye"></i></button></a> -->
                      <a href="javascript:void(0);" class="success" data-id="{{ $item['Date'] }}" data-stylecode="{{ $item['StyleCode'] }}" onclick="showDetails('{{ $item['Date'] }}', '{{ $item['StyleCode'] }}')">
                        <button class="btn btn-sm btn-success"><i class="fas fa-eye"></i></button>
                      </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>


<script>
   function showDetails(date, styleCode) {
    $.get("{{ url('/sewingoutput/details') }}",{ date: date, styleCode: styleCode}, function(data) {

      // $.get("{{ url('/sewingoutput/details') }}", { date: date, styleCode: styleCode }, function(data) {
         $("#readDetail").html(data);
      });
   }
</script>
