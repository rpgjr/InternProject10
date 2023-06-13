<div class="collapse hide my-3 p-4 rounded bg-secondary bg-opacity-10" id="showEditOrder{{ $order_id }}" wire:ignore.self>
    <form class="container" wire:submit.prevent='editOrder'>
        <div class="row">
            <div class="col-4 mb-3">
                <label class="form-label">Item</label>
                <select class="form-select" wire:model='item_id' required>
                    <option selected hidden value="">Select Item...</option>
                    @foreach ($menu as $item)
                        <option value="{{ $item->item_id }}">{{ $item->item_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4 mb-3">
                <label class="form-label">Order Type</label>
                <select class="form-select" wire:model='order_type' required>
                    <option selected hidden value="">Select Item...</option>
                    <option value="Dine-in">Dine-in</option>
                    <option value="Take-out">Take-out</option>
                </select>
            </div>
            <div class="col-4 mb-4">
                <label class="form-label">Payment Status</label>
                <select class="form-select" wire:model='payment_status' required>
                    <option selected hidden value="">Select Item...</option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                </select>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-4">Update Order</button>
            </div>
        </div>
    </form>
</div>
