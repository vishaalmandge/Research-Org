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
                                    <div class="card-title">My Profile</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Orgnization Name</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Orgnization Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Address 1</label>
                                                <textarea class="form-control" placeholder="Enter Address 1"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Address 2</label>
                                                <textarea class="form-control" placeholder="Enter Address 2"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Upload Profile Image</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter City">
                                            </div>
                                            <div class="form-group">
                                                <label>State</label>
                                                <select data-placeholder="Select State" class="chosen-select form-control">
                                                    <option value=""></option>
                                                    <option value="">New York</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Zip</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Zip Code">
                                            </div>


                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact Person</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Contact Person">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact No</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Contact No">
                                            </div>
                                            <div class="form-group">
                                                <label>Orgnization Contact No</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Orgnization Contact No">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Website">
                                            </div>
                                            <div class="form-group">
                                                <label>Tax ID</label>
                                                <input type="test" class="form-control" id="email2" placeholder="Enter Tax ID">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button class="btn btn-primary pull-right">Submit</button>
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
        <!--- view org modal start --->
        <div class="modal fade research-modal" id="viewRModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Orgnization(s)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Orgnization Name</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <div></div>
                                </div>

                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>City</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Zip</label>
                                    <div></div>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Orgnization Contact No</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <div></div>
                                </div>
                                <div class="form-group">
                                    <label>Tax ID</label>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--- view org modal end --->
        <!--- edit org modal start --->
        <div class="modal fade research-modal" id="viewEModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Orgnization(s)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Orgnization Name</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Orgnization Name">
                                </div>
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <textarea class="form-control" placeholder="Enter Address 1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <textarea class="form-control" placeholder="Enter Address 2"></textarea>
                                </div>

                            </div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>City</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter City">
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter State">
                                </div>
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Zip Code">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Contact Person">
                                </div>
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Contact No">
                                </div>
                                <div class="form-group">
                                    <label>Orgnization Contact No</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Orgnization Contact No">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Website">
                                </div>
                                <div class="form-group">
                                    <label>Tax ID</label>
                                    <input type="test" class="form-control" id="email2" placeholder="Enter Tax ID">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--- edit org modal end --->
    </div>
    <!--   Core JS Files   -->
    <!--js files-->
    <?php include 'common/jsfiles.php';?>
    <script src="assets/js/addorg.js"></script>
    <script src="assets/js/research.js"></script>

</body>

</html>
