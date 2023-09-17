<table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id" data-page-list="[5, 10, 20]"
    data-page-size="5" data-pagination="true" data-show-pagination-switch="true" class="table-borderless">
    <thead class="table-light">
        <tr>
            <th data-field="id" data-sortable="true" data-align="center" data-formatter="invoiceFormatter">Order ID</th>
            {{-- <th data-field="name" data-sortable="true">menu</th> --}}
            <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Amount</th>
            <th data-field="date" data-sortable="true" data-align="center" data-formatter="dateFormatter">Timestamp</th>
            <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status
            <th  data-align="center">Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($groupedOrders  as $orderId => $orders)
            @foreach($orders as $order)
            <tr>
                <td>{{ $orderId }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->getDate() }}</td>
                <td>{{ $order->getStatus() }}</td>
                <td colspan="2">
                    <a href="#" class="btn btn-sm btn-warning">Reject</a>
                    <a href="{{ route('order.paid', $orderId) }}" class="btn btn-sm btn-success">Paid</a>
                </td>
            </tr>
            @endforeach
        @endforeach
    </tbody>
</table>