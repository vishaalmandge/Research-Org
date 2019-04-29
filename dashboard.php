<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kannafill Research Orgnization</title>
    <?php include 'common/cssfiles.php';?>
</head>



<body data-gr-c-s-loaded="true" cz-shortcut-listen="true" data-background-color="bg3">
    <div class="wrapper">

        <?php include 'common/header.php';?>
        <!-- Sidebar -->
        <?php include 'common/sidebar.php';?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title">Overall statistics</div>
                                    <div class="card-category">Daily information</div>
                                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                                        <div class="px-2 pb-2 pb-md-0 text-center">
                                            <div id="circles-1"></div>
                                            <h6 class="fw-bold mt-3 mb-0">Orgnizations</h6>
                                        </div>
                                        <div class="px-2 pb-2 pb-md-0 text-center">
                                            <div id="circles-2"></div>
                                            <h6 class="fw-bold mt-3 mb-0">Patients</h6>
                                        </div>
                                        <div class="px-2 pb-2 pb-md-0 text-center">
                                            <div id="circles-3"></div>
                                            <h6 class="fw-bold mt-3 mb-0">Reports</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card full-height">
                                <div class="card-body">
                                    <div class="card-title">Total income & spend statistics</div>
                                    <div class="row py-3">
                                        <div class="col-md-4 d-flex flex-column justify-content-around">
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
                                                <h3 class="fw-bold">$9.782</h3>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
                                                <h3 class="fw-bold">$1,248</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="chart-container">
                                                <canvas id="totalIncomeChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--footer start-->
            <?php include 'common/footer.php';?>
            <!--footer ends-->
        </div>


    </div>
    <!--js files-->
    <?php include 'common/jsfiles.php';?>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/research.js"></script>

</body>

</html>
