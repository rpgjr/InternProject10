<div class="collapse hide my-3 p-4 rounded bg-secondary bg-opacity-10" id="showDeleteItem{{$item->item_id}}">
    <form class="container" action="{{ route('item.deleteItem') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger text-center" role="alert">
                    <p>Are you sure you want to delete <b>{{ $item->item_name }}</b>?</p>
                    <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                    <button type="submit" class="btn btn-danger px-4">Delete</button>
                </div>
            </div>
        </div>
    </form>
</div>
