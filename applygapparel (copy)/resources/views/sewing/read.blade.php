@extends('admin.header')
<table  id="example1" class="table">
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
        <!-- <a href="javascript:void(0);" class="success" data-id="{{ $item['Date'] }}" data-stylecode="{{ $item['StyleCode'] }}" onclick="showDetails('{{ $item['Date'] }}', '{{ $item['StyleCode'] }}')">
        <button class="btn btn-sm btn-success">View Detail</button>
        </a> -->
        <a href="javascript:void(0);" class="success" data-id="{{ $item['Date'] }}" data-stylecode="{{ $item['StyleCode'] }}" onclick="toggleDetails(this, '{{ $item['Date'] }}', '{{ $item['StyleCode'] }}')">
            <button class="btn btn-sm btn-success">View Detail</button>
          </a>
        </td>
      </tr>
    @endforeach
</tbody>
</table>


<script>
// function showDetails(date, styleCode) {
//   $.get("{{ url('/sewingoutput/details') }}",{ date: date, styleCode: styleCode}, function(data) {
//   $("#judulDetailTransaksi").html('' + styleCode + ' #' + date); // Set judul dengan styleCode dan date
//   $("#readDetail").html(data);
//   });
// }
  let currentRow = null;
  let currentButton = null;

  function toggleDetails(element, date, styleCode) {
    const $button = $(element).find('button');
    const $row = $(element).closest('tr');

    if ($button.text() === 'View Detail') {
      if (currentRow) {
        $(currentRow).removeClass('highlighted');
        $(currentButton).text('View Detail');
      }

      $button.text('Close Detail');
      $row.addClass('highlighted');

      $.get("{{ url('/sewingoutput/details') }}", { date: date, styleCode: styleCode }, function(data) {
        $("#judulDetailTransaksi").html(styleCode + ' #' + date);
        $("#readDetail").html(data);
      });

      currentRow = $row;
      currentButton = $button;
    } else {
      $button.text('View Detail');
      $row.removeClass('highlighted');
      $("#judulDetailTransaksi").html('');
      $("#readDetail").html('');

      currentRow = null;
      currentButton = null;
    }
  }
</script>

<style>
  .highlighted {
    background-color: #ff0000; 
  }
</style>

