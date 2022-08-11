<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Vector Maps')); ?>

    <!-- plugin css -->
    <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle' => 'Maps', 'title' => 'Vector')); ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="world-map-line-markers" data-colors='["--vz-light"]' style="height: 420px"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">World Vector Map with Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="world-map-markers" data-colors='["--vz-light"]' style="height: 350px" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">World Vector Map with Image Markers</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="world-map-markers-image" data-colors='["--vz-light"]' style="height: 350px" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">USA Vector Map</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="usa-vectormap" data-colors='["--vz-primary"]' style="height: 350px"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Canada Vector Map</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="canada-vectormap" data-colors='["--vz-info"]' style="height: 350px"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Russia Vector Map</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="russia-vectormap" data-colors='["--vz-success"]' style="height: 350px"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Spain Vector Map</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="spain-vectormap" data-colors='["--vz-secondary"]' style="height: 350px"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <?= $this->include('partials/customizer') ?>

    <?= $this->include('partials/vendor-scripts') ?>

    <!-- prismjs plugin -->
    <script src="/assets/libs/prismjs/prism.js"></script>

    <!-- Vector map-->
    <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="/assets/libs/jsvectormap/maps/us-merc-en.js"></script>
    <script src="/assets/libs/jsvectormap/maps/canada.js"></script>
    <script src="/assets/libs/jsvectormap/maps/russia.js"></script>
    <script src="/assets/libs/jsvectormap/maps/spain.js"></script>

    <!-- vector-maps init -->
    <script src="/assets/js/pages/vector-maps.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
</body>

</html>