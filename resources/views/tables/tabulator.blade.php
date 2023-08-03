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

    <!-- Tabulator styles [ OPTIONAL ] -->
    <link rel="stylesheet"
        href="{{asset('assets/pages/tabulator.2a59ff14623e249df38d0b35e42466880dc7066804e98ad05051219674361c06.css')}}">
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
                            <li class="breadcrumb-item active" aria-current="page">Tabulator</li>
                        </ol>
                    </nav>
                    <!-- END : Breadcrumb -->

                    <h1 class="page-title mb-0 mt-2">Tabulator</h1>

                    <p class="lead">
                        Interactive Tables and Data Grids for JavaScript.
                    </p>

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="mb-3">
                                <h2>Tabulator</h2>
                                <p class="m-0">Tabulator allows you to create interactive tables in seconds from any
                                    HTML Table, Javascript Array or JSON formatted data.</p>
                            </div>

                            <h5 class="card-title">Basic Example</h5>

                            <!-- Basic table -->
                            <div id="_dm-tabulatorBasic" class="table table-striped"></div>
                            <!-- END : Basic table -->

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">

                            <h5 class="card-title">Formatting headers</h5>

                            <!-- Formatting table headers -->
                            <div id="_dm-tabulatorFormatHead" class="table"></div>
                            <!-- END : Formatting table headers -->

                        </div>
                    </div>

                    <h2 class="mt-5 mb-3">Bootstrap styles</h2>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Striped rows</h5>

                                    <!-- Table striped -->
                                    <div id="_dm-tabulatorStriped" class="table table-striped"></div>
                                    <!-- END : Table striped -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Bordered tables</h5>

                                    <!-- Bordered tables -->
                                    <div id="_dm-tabulatorBorderedTable" class="table table-bordered table-striped">
                                    </div>
                                    <!-- END : Bordered tables -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt-5 mb-3">Advanced options</h2>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Pagination</h5>

                                    <!-- Pagination -->
                                    <div id="_dm-tabulatorPagination" class="table table-striped"></div>
                                    <!-- END : Pagination -->

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Editing Data ( click name field to edit the name )</h5>

                                    <!-- Edit Data -->
                                    <div id="_dm-tabulatorEditData" class="table table-striped"></div>
                                    <!-- END : Edit Data -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">

                            <h5 class="card-title">Formatting data</h5>

                            <!-- Formatting table headers -->
                            <div id="_dm-tabulatorFormatData" class="table table-striped"></div>
                            <!-- END : Formatting table headers -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Filter Data</h5>

                            <!-- Toolbar -->
                            <div class="d-flex gap-2 py-3" style="max-width: 700px;">
                                <select id="_dm-filterField" class="form-select">
                                    <option value="none">Select field</option>
                                    <option value="name">Name</option>
                                    <option value="gender">Gender</option>
                                    <option value="rating">Rating</option>
                                    <option value="col">Favourite Colour</option>
                                    <option value="dob">Date Of Birth</option>
                                    <option value="car">Drives</option>
                                    <option value="function">Drives & Rating < 3</option>
                                </select>

                                <select id="_dm-filterType" class="form-select">
                                    <option value="like">Like</option>
                                    <option value="=">=</option>
                                    <option value="<">
                                        << /option>
                                    <option value="<=">
                                        <=< /option>
                                    <option value=">">></option>
                                    <option value=">=">>=</option>
                                    <option value="!=">!=</option>
                                </select>

                                <input id="_dm-filterValue" class="form-control" type="text"
                                    placeholder="value to filter">
                                <button id="_dm-filterClear" class="btn btn-primary text-nowrap">Clear Filter</button>
                            </div>
                            <!-- END : Toolbar -->

                        </div>
                        <div class="card-body">

                            <!-- Filter Data -->
                            <div id="_dm-tabulatorFilter" class="table table-striped"></div>
                            <!-- END : Filter Data -->

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
        defer></script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script src="{{asset('assets/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js')}}"
        defer>
    </script>

    <!-- Tabulator scripts [ OPTIONAL ] -->
    <script
        src="{{asset('assets/pages/tabulator.min.5ea76031726287800898bcd233feaca754b848ebcd959b2e60030220a5b4a790.js')}}"
        defer></script>


</body>

</html>