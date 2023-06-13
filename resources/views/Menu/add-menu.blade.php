<div class="collapse hide my-3 p-4 rounded bg-secondary bg-opacity-10" id="showAddItem">
    <form class="container" action="{{ route('item.addItem') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" class="form-control" name="item_name" required>
            </div>
            <div class="col-6 mb-3">
                <label class="form-label">Item Price</label>
                <input type="text" class="form-control" name="item_price" required>
            </div>
            <div class="col-6 mb-4">
                <label class="form-label">Item Stock</label>
                <input type="text" class="form-control" name="item_stock" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-4">Save</button>
            </div>
        </div>
    </form>
</div>
