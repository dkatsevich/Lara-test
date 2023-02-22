<x-layouts.base title="Main page">
    <div class="alert alert-info">
       @auth
       Hi there! Menu on left will help you
        @else
        Please Login
       @endauth
    </div>
</x-layouts.base>