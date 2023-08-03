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
                            <li class="breadcrumb-item active" aria-current="page">Static Tables</li>
                        </ol>
                    </nav>
                    <!-- END : Breadcrumb -->

                    <h1 class="page-title mb-0 mt-2">Static Tables</h1>

                    <p class="lead">
                        A table is an arrangement of information or data, typically in rows and columns, or possibly in
                        a more complex structure.
                    </p>

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Striped rows</h5>

                                    <!-- Striped rows -->
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>User</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53451</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td>$24.98</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53452</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td>$564.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53453</a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td>$58.87</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53454</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td>$97.50</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53455</a></td>
                                                    <td>Lucy Doe</td>
                                                    <td>$12.79</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53456</a></td>
                                                    <td>Michael Bunr</td>
                                                    <td>$249.99</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END : Striped rows -->

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Bordered table</h5>

                                    <!-- Bordered table -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>User</th>
                                                    <th>Plan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><a href="#" class="btn-link">Scott S. Calabrese</a></td>
                                                    <td><span class="badge bg-success">Bussines</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
                                                    <td><span class="badge bg-info">Personal</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><a href="#" class="btn-link">Steve N. Horton</a></td>
                                                    <td><span class="badge bg-warning">Trial</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><a href="#" class="btn-link">Charles S Boyle</a></td>
                                                    <td><span class="badge bg-success">Bussines</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><a href="#" class="btn-link">Lucy Doe</a></td>
                                                    <td><span class="badge bg-warning">Trial</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td><a href="#" class="btn-link">Michael Bunr</a></td>
                                                    <td><span class="badge bg-info">Personal</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END : Bordered table -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Hover table</h5>

                                    <!-- Hover rows -->
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Device</th>
                                                    <th>Name</th>
                                                    <th class="text-center">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><i class="demo-pli-monitor-2 fs-1"></i></td>
                                                    <td>
                                                        <span class="h6">Desktop</span>
                                                        <br>
                                                        <small class="text-muted">Last 7 days : 4,234k</small>
                                                    </td>
                                                    <td class="text-center"><span class="text-danger fw-bolder">-
                                                            28.76%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><i class="demo-pli-laptop fs-1"></i></td>
                                                    <td>
                                                        <span class="h6">Laptop</span>
                                                        <br>
                                                        <small class="text-muted">Last 7 days : 3,876k</small>
                                                    </td>
                                                    <td class="text-center"><span class="text-warning fw-bolder">-
                                                            8.55%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><i class="demo-pli-tablet-2 fs-1"></i></td>
                                                    <td>
                                                        <span class="h6">Tablet</span>
                                                        <br>
                                                        <small class="text-muted">Last 7 days : 45,678k</small>
                                                    </td>
                                                    <td class="text-center"><span class="text-success fw-bolder">+
                                                            58.56%</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><i class="demo-pli-smartphone-3 fs-1"></i>
                                                    </td>
                                                    <td>
                                                        <span class="h6">Smartphone</span>
                                                        <br>
                                                        <small class="text-muted">Last 7 days : 34,553k</small>
                                                    </td>
                                                    <td class="text-center"><span class="text-success fw-bolder">+
                                                            35.76%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END : Hover rows -->

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">

                                    <h5 class="card-title">Small table</h5>

                                    <!-- Small table -->
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th>User</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53451</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td>$24.98</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53452</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td>$564.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53453</a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td>$58.87</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53454</a></td>
                                                    <td>Charles S Boyle</td>
                                                    <td>$97.50</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53455</a></td>
                                                    <td>Lucy Doe</td>
                                                    <td>$12.79</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53456</a></td>
                                                    <td>Michael Bunr</td>
                                                    <td>$249.99</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53451</a></td>
                                                    <td>Scott S. Calabrese</td>
                                                    <td>$24.98</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53452</a></td>
                                                    <td>Teresa L. Doe</td>
                                                    <td>$564.00</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn-link">Order #53453</a></td>
                                                    <td>Steve N. Horton</td>
                                                    <td>$58.87</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END : Small table -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header -4 mb-3">
                            <h5 class="card-title mb-3">Table with toolbar</h5>
                            <div class="row">

                                <!-- Left toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Add New
                                    </button>
                                    <button class="btn btn-icon btn-outline-light">
                                        <i class="demo-pli-printer fs-5"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light"><i
                                                class="demo-pli-exclamation fs-5"></i></button>
                                        <button class="btn btn-icon btn-outline-light"><i
                                                class="demo-pli-recycling fs-5"></i></button>
                                    </div>
                                </div>
                                <!-- END : Left toolbar -->

                                <!-- Right Toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search..." class="form-control"
                                            autocomplete="off">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light"><i
                                                class="demo-pli-download-from-cloud fs-5"></i></button>
                                        <div class="btn-group dropdown">
                                            <button
                                                class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END : Right Toolbar -->

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsove">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Invoice</th>
                                            <th>User</th>
                                            <th>Order date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Tracking Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="btn-link" href="#"> Order #53431</a></td>
                                            <td>Steve N. Horton</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22,
                                                    2021</span></td>
                                            <td>$45.00</td>
                                            <td class="fs-5">
                                                <div class="badge d-block bg-success">Paid</div>
                                            </td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn-link" href="#"> Order #53432</a></td>
                                            <td>Charles S Boyle</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 24,
                                                    2021</span></td>
                                            <td>$245.30</td>
                                            <td class="fs-5">
                                                <div class="badge d-block bg-danger">Refund</div>
                                            </td>
                                            <td><i class="demo-pli-mine"></i> CGX0089734531</td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn-link" href="#"> Order #53433</a></td>
                                            <td>Lucy Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 24,
                                                    2021</span></td>
                                            <td>$38.00</td>
                                            <td class="fs-5">
                                                <div class="badge d-block bg-info">Shipped</div>
                                            </td>
                                            <td><i class="demo-pli-mine"></i> CGX0089934571</td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn-link" href="#"> Order #53434</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 15,
                                                    2021</span></td>
                                            <td>$77.99</td>
                                            <td class="fs-5">
                                                <div class="badge d-block bg-info">Shipped</div>
                                            </td>
                                            <td><i class="demo-pli-mine"></i> CGX0089734574</td>
                                        </tr>
                                        <tr>
                                            <td><a class="btn-link" href="#"> Order #53435</a></td>
                                            <td>Teresa L. Doe</td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 12,
                                                    2021</span></td>
                                            <td>$18.00</td>
                                            <td class="fs-5">
                                                <div class="badge d-block bg-success">Paid</div>
                                            </td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <nav class="text-align-center mt-5" aria-label="Table navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

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
    <script
        src="{{asset('assets/pages/dashboard-1.min.07239cfbfa13a684f5c4668d5282cf217c7793bc57557b4ec22c36740ffb5bf1.js')}}"
        defer></script>

</body>

</html>