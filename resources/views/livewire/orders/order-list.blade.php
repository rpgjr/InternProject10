<div class="table-responsive-xl">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Order Type</th>
                <th scope="col">Payment Status</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th>{{ $order->order_id }}</th>
                    @foreach ($menu as $item)
                        @if (($item->item_id) == ($order->item_id))
                            <td>{{ $item->item_name }}</td>
                            <td>{{ number_format($item->item_price, 2) }}</td>
                        @endif
                    @endforeach
                    <td>{{ $order->order_type }}</td>
                    <td>{{ $order->payment_status }}</td>
                    <td class="text-center">
                        <button data-bs-target="#showEditOrder{{ $order->order_id }}" data-bs-toggle="collapse" class="btn btn-info">Edit <i class="fa-solid fa-pen-to-square"></i></button>
                        <button data-bs-target="#showDeleteOrder{{ $order->order_id }}" data-bs-toggle="collapse" class="btn btn-danger">Delete <i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <livewire:orders.edit-order
                            :order_id="$order->order_id"
                            :item_id="$order->item_id"
                            :order_type="$order->order_type"
                            :payment_status="$order->payment_status"
                        />
                        <livewire:orders.delete-order
                            :order_id="$order->order_id"
                            :item_id="$order->item_id"
                        />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
