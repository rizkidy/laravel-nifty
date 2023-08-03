<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rizkidy | Nifty Template</title>
    <meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description"
        content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="{{asset('assets/css/bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css')}}">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="{{asset('assets/css/nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css')}}">

    <!-- GridJS styles [ OPTIONAL ] -->
    <link rel="stylesheet"
        href="{{asset('assets/pages/gridjs.e1d3038bb47390cb5f45d445324bacec91d3521551788d5d4898e460eda844a3.css')}}">


</head>

<body class="jumping">

    <!-- PAGE CONTAINER -->

    <div id="root" class="root mn--max hd--expanded">

        <!-- CONTENTS -->

        <section id="content" class="content">
            <div class="content__header content__boxed overlapping">
                <div class="content__wrap">

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="../index.html">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gridjs</li>
                        </ol>
                    </nav>
                    <!-- END : Breadcrumb -->

                    <h1 class="page-title mb-0 mt-2">Gridjs</h1>

                    <p class="lead">
                        A table library that works everywhere
                    </p>

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="mb-3">
                                <h2>GridJS</h2>
                                <p class="m-0">Grid.js is a Free and open-source JavaScript table plugin. It works with
                                    most JavaScript frameworks, including React, Angular, Vue and VanillaJs.</p>
                            </div>

                            <h5 class="card-title">Basic Example</h5>

                            <!-- GridJS - Basic Example -->
                            <div id="_dm-gridjsBasic"></div>
                            <!-- END : GridJS - Basic Example -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Sorting</h5>

                                    <!-- GridJS - Sorting -->
                                    <div id="_dm-gridjsSorting"></div>
                                    <!-- END : GridJS - Sorting -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Resizable columns</h5>

                                    <!-- GridJS - Resizable columns -->
                                    <div id="_dm-gridjsResizableCol"></div>
                                    <!-- END : GridJS - Resizable columns -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Fixed header</h5>

                                    <!-- GridJS - Fixed header -->
                                    <div id="_dm-gridjsFixedHeader"></div>
                                    <!-- END : GridJS - Fixed header -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Hidden columns</h5>

                                    <!-- GridJS - Hidden columns -->
                                    <div id="_dm-gridjsHiddenCol"></div>
                                    <!-- END : GridJS - Hidden columns -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">

                            <h5 class="card-title">Cell formatting</h5>

                            <!-- Row Buttons -->
                            <div id="_dm-gridjsCellformatting"></div>
                            <!-- END : Row Buttons -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- FOOTER -->

            @include('layouts.footer')

            <!-- END - FOOTER -->

        </section>

        <!-- END - CONTENTS -->

        <!-- HEADER -->

        @include('layouts.header')

        <!-- END - HEADER -->

        <!-- SIDEBAR -->

        @include('layouts.sidebar')

        <!-- END - SIDEBAR -->

    </div>

    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->

    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>

    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- JAVASCRIPTS -->
    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script
        src="{{asset('assets/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js')}}"
        defer>
    </script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="{{asset('assets/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js')}}"
        defer>
    </script>

    <!-- Plugin scripts [ OPTIONAL ] -->
    <script src="../../assets/pages/gridjs.min.d520dabe68d38340f7a56fda29a0b5ac8216fcbdc172a524cffb890c7a13db0d.js"
        defer></script>

</body>

</html>