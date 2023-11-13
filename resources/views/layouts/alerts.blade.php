<div>
    @if (session() -> has('message'))
        <div class="alert alert-success d-flex justify-content-between" role="alert">
            {{ session('message') }}
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>