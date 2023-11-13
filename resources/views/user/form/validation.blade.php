@if ($errors)
    @foreach ($errors -> all() as $error)
        <div class="alert alert-danger d-flex justify-content-between" role="alert">
            {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif