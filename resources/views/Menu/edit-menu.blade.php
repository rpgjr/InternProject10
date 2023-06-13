<div class="collapse hide my-3 p-4 rounded bg-secondary bg-opacity-10" id="showEditItem{{$item->item_id}}">
    <form class="container" action="{{ route('item.editItem') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" class="form-control" name="item_name" value="{{ $item->item_name }}" required>
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">Item Price</label>
                <input type="text" class="form-control" name="item_price" value="{{ number_format($item->item_price, 2) }}" required>
            </div>
            <div class="col-6 mb-4">
                <label class="form-label">Item Stock</label>
                <input type="text" class="form-control" name="item_stock" value="{{ $item->item_stock }}" required>
            </div>
            <div class="col-12 text-center">
                <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                <button type="submit" class="btn btn-primary px-4">Update</button>
            </div>
        </div>
    </form>
</div>
