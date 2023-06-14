<div class="collapse hide my-3 p-4 rounded bg-secondary bg-opacity-10" id="showDeleteOrder{{ $order_id }}" wire:ignore.self>
    <form class="container" wire:submit.prevent="deleteOrder">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger text-center mb-0" role="alert">
                    <p>Are you sure you want to delete <b>{{ $item_name }}</b>?</p>
                    <button type="submit" class="btn btn-danger px-4">Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>
