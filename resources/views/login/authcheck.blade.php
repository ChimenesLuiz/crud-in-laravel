@if (auth() -> check())
    <script>window.location = "/dashboard";</script>
@endif