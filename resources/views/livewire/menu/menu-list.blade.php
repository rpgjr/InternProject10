<div class="table-responsive-xl">
    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">Item ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Price</th>
                <th scope="col">Stock</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($menu) > 0)
                @foreach ($menu as $item)
                    <tr>
                        <th>{{ $item->item_id }}</th>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ number_format($item->item_price, 2) }}</td>
                        <td>{{ $item->item_stock }}</td>
                        <td class="text-center">
                            <button data-bs-target="#showEditItem{{ $item->item_id }}" data-bs-toggle="collapse" class="btn btn-info">Edit <i class="fa-solid fa-pen-to-square"></i></button>
                            <button data-bs-target="#showDeleteItem{{ $item->item_id }}" data-bs-toggle="collapse" class="btn btn-danger">Delete <i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <livewire:menu.edit-menu
                                :item_id="$item->item_id"
                                :item_name="$item->item_name"
                                :item_price="$item->item_price"
                                :item_stock="$item->item_stock"
                            />
                            <livewire:menu.delete-menu
                                :item_id="$item->item_id"
                                :item_name="$item->item_name"
                            />
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6">
                        <div class="alert alert-danger mb-0" role="alert">
                            No item on the list. Please add.
                        </div>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
