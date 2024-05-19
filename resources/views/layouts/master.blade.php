@include('layouts.header')
@include('layouts.navbar')
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        @yield('content')
        <!-- Side widgets-->
        <div class="col-lg-4">
            @section('sidbar')
            @include('layouts.sidbar')
            @show
        </div>
    </div>
</div>
<!-- Footer-->
@include('layouts.footer')
<!-- Bootstrap core JS-->
<script src="/js/bootstrap.bundle.min.js"></script> <!-- Core theme JS-->
<script src="/js/index.js"></script>

</body>

</html>
