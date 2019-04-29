<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kannafill Research Orgnization</title>
    <?php include 'common/cssfiles.php';?>
</head>

<body data-gr-c-s-loaded="true" cz-shortcut-listen="true" data-background-color="bg3">
    <div class="wrapper">
        <div class="main-header">
            <?php include 'common/header.php';?>
            <!-- Sidebar -->
            <?php include 'common/sidebar.php';?>
            <!-- End Sidebar -->
        </div>
        <!-- Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Lab Report(s)</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Orgnization</label>
                                                <select data-placeholder="Select Orgnization" class="chosen-select form-control">
                                                    <option value=""></option>
                                                    <option value="">All</option>
                                                    <option value="">Org 1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Select Patient</label>
                                                <select data-placeholder="Select Patient" class="chosen-select form-control">
                                                    <option value=""></option>
                                                    <option value="">All</option>
                                                    <option value="">Patient 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <table id="addorg-datatables" class="display table table-striped table-hover table-bordered dataTable no-footer research-table">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No</th>
                                                    <th>Patient ID</th>
                                                    <th>Patient Name</th>
                                                    <th>Order ID</th>
                                                    <th>Order By</th>
                                                    <th>Order Date</th>
                                                    <th>Org Name</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1455</td>
                                                    <td>Tom</td>
                                                    <td>61889</td>
                                                    <td>Leonard</td>
                                                    <td>29/04/2019</td>
                                                    <td>Kannafill</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1455</td>
                                                    <td>Tom</td>
                                                    <td>61889</td>
                                                    <td>Leonard</td>
                                                    <td>20/04/2019</td>
                                                    <td>Kannafill</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1455</td>
                                                    <td>Tom</td>
                                                    <td>61889</td>
                                                    <td>Leonard</td>
                                                    <td>10/04/2019</td>
                                                    <td>Kannafill</td>
                                                </tr>

                                            </tbody>
                                        </table>
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
    <!--   Core JS Files   -->
    <!--js files-->
    <?php include 'common/jsfiles.php';?>
    <script src="assets/js/labreports.js"></script>
    <script src="assets/js/research.js"></script>

</body>

</html>
