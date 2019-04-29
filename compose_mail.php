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
                                    <div class="card-title">Mailbox</div>
                                </div>
                                <div class="card-body">
                                    <div class="m-t-15">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <a class="btn btn-info btn-block" href="messages.php"><i class="fa fa-edit"></i> Inbox</a><br>
                                                <h6 class="m-t-10 m-b-10">FOLDERS</h6>
                                                <ul class="list-group list-group-divider inbox-list">
                                                    <li class="list-group-item">
                                                        <a href="javascript:;"><i class="fa fa-inbox"></i> Inbox (6)
                                                            <span class="badge badge-warning badge-square pull-right">17</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:;"><i class="fa fa-envelope-o"></i> Sent</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:;"><i class="fa fa-file-text-o"></i> Drafts</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:;"><i class="fa fa-trash-o"></i> Trash</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-9 col-md-8">
                                                <div class="ibox" id="mailbox-container">
                                                    <div class="mailbox-header d-flex justify-content-between">
                                                        <h5 class="inbox-title">Compose mail</h5>
                                                        <div class="inbox-toolbar m-l-20">
                                                            <button class="btn btn-primary btn-sm" data-action="reply" data-toggle="tooltip" data-original-title="Reply"><i class="fa fa-reply"></i></button>
                                                            <button class="btn btn-primary btn-sm" data-action="delete" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="mailbox-body">
                                                        <form class="form-horizontal" action="javascript:void(0)" method="POST" if="compose_form">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 control-label">To:</label>
                                                                <div class="col-sm-10">
                                                                    <select data-placeholder="Select Email Id" class="chosen-select form-control" multiple>
                                                                        <option value=""></option>
                                                                        <option value="">All</option>
                                                                        <option value="">Org 1</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 control-label">Subject:</label>
                                                                <div class="col-sm-10">
                                                                    <input class="form-control" type="text" name="subject">
                                                                </div>
                                                            </div>
                                                            <textarea id="summernote" name="message">
                                        <h4>Thank you for your attention</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur velit, corporis iste. Dolorem sapiente at, quibusdam fuga ea voluptatem iste. Cupiditate dignissimos, iure impedit, perferendis in beatae fuga
                                            voluptate, sapiente pariatur, libero ab odit. Placeat saepe sunt ipsam laboriosam temporibus nostrum ea optio, dolore soluta.</p>
                                    </textarea>
                                                            <input class="btn btn-info m-t-20" type="submit">
                                                        </form>
                                                    </div>
                                                </div>
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
    <!--   Core JS Files   -->
    <!--js files-->
    <?php include 'common/jsfiles.php';?>
    <script src="assets/js/mailbox.js"></script>
    <script src="assets/js/research.js"></script>

</body>

</html>
