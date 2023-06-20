@include('customer.partials.header')

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center pt-4 pb-5">
                        <h1>
                            <img alt="404" src="{!! url('img/404.png') !!}" class="img-fluid" />
                        </h1>
                        <h1>Sorry! Page not found.</h1>
                        <p class="land">
                            Unfortunately the page you are looking for has
                            been moved or deleted.
                        </p>
                        <div class="mt-5">
                            <a class="btn btn-outline-primary" href="index.html"><i class="mdi mdi-home"></i> GO TO HOME
                                PAGE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('customer.partials.footer')
</body>

</html>
