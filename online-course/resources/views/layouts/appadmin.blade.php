
@include('layouts.top')

<div>
    <main class="flex-shrink-0">
        @include('sweetalert::alert')
        @yield('content')
    </main>
</div>


@include('layouts.bottom')