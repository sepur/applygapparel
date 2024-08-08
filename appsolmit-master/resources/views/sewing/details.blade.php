<h2>Detail Transaction</h2>
<table id="details-table" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th rowspan="2">Operator</th>
            @foreach ($sizes as $size)
                <th>{{ $size }}</th>
            @endforeach
            <th rowspan="2">Total Qty</th>
            <th rowspan="2">Destination</th>
        </tr>
        <tr>
            <!-- Header untuk Size, jika diperlukan -->
        </tr>
    </thead>
    <tbody>
        @foreach ($groupedDetails as $operator => $destinations)
            @foreach ($destinations as $destination => $sizes)
                <tr>
                    @if ($loop->first)
                        <td rowspan="{{ $destinations->count() }}">{{ $operator }}</td>
                    @endif
                    @foreach ($sizes as $sizeName => $totalQty)
                        <td class="editable {{ $totalQty == 0 ? 'text-danger' : '' }}" data-size="{{ $sizeName }}" data-destination="{{ $destination }}" data-operator="{{ $operator }}" contenteditable="true">{{ $totalQty }}</td>
                    @endforeach
                    <td class="total-qty">
                        {{ $sizes->sum() }} <!-- Total Qty for the row -->
                    </td>
                    <td>{{ $destination }}</td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#details-table').on('blur', '.editable', function() {
        const $this = $(this);
        const newValue = $this.text().trim();
        const size = $this.data('size');
        const destination = $this.data('destination');
        const operator = $this.data('operator');

        // Kirim pembaruan ke server
        $.ajax({
            url: "{{ url('/sewingoutput/update') }}", 
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}', 
                size: size,
                destination: destination,
                operator: operator,
                value: newValue
            },
            success: function(response) {
                console.log('Data updated successfully');
                updateTotalQty($this.closest('tr'));

                // Update total size dan total output di view
                $('#total-size-summary').text(response.totalSize);
                $('#total-output-summary').text(response.totalOutput);
            },
            error: function(xhr) {
                console.error('Failed to update data');
            }
        });
    });

    function updateTotalQty($row) {
        let totalQty = 0;
        $row.find('.editable').each(function() {
            const qty = parseInt($(this).text().trim(), 10) || 0;
            totalQty += qty;
        });
        $row.find('.total-qty').text(totalQty);
    }
});
</script>
