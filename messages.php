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
                                                <a class="btn btn-info btn-block" href="compose_mail.php"><i class="fa fa-edit"></i> Compose</a><br>
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
                                                    <div class="mailbox-header">
                                                        <div class="d-flex justify-content-between">
                                                            <h5 class="d-none d-lg-block inbox-title"><i class="fa fa-envelope-o m-r-5"></i> Inbox (15)</h5>
                                                            <form class="mail-search" action="javascript:;">
                                                                <div class="input-group">
                                                                    <input class="form-control" type="text" placeholder="Search email">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-info">Search</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="d-flex justify-content-between inbox-toolbar p-t-20">
                                                            <div class="d-flex">
                                                                <div class="form-check m-l-22">
                                                                    <label class="form-check-label">
                                                                        <input class="form-check-input" type="checkbox" value="" data-select="all">
                                                                        <span class="form-check-sign"></span>
                                                                    </label>
                                                                </div>
                                                                <div id="inbox-actions">
                                                                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Mark as read"><i class="fa fa-eye"></i></button>
                                                                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Reply"><i class="fa fa-reply"></i></button>
                                                                    <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></button>
                                                                </div>
                                                                <span class="counter-selected m-l-5" hidden="">Selected
                                                                    <span class="font-strong text-warning counter-count">3</span>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="p-r-10 font-13">1-50 of 420</span>
                                                                <div class="btn-group btn-group-sm">
                                                                    <button class="btn btn-primary"><i class="fa fa-chevron-left"></i></button>
                                                                    <button class="btn btn-primary"><i class="fa fa-chevron-right"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mailbox clf">
                                                        <table class="table table-hover table-inbox" id="table-inbox">
                                                            <tbody class="rowlinkx" data-link="row">
                                                                <tr data-id="1">
                                                                    <td class="check-cell rowlink-skip">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="checkbox" value="">
                                                                                <span class="form-check-sign"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="mail_view.php">Emma Johnson</a>
                                                                    </td>
                                                                    <td class="mail-message">Fusce suscipit semper erat, vel solo.</td>
                                                                    <td class="hidden-xs"></td>
                                                                    <td class="mail-label hidden-xs"><i class="fa fa-circle text-success"></i></td>
                                                                    <td class="text-right">5.22 AM</td>
                                                                </tr>
                                                                <tr class="unread" data-id="2">
                                                                    <td class="check-cell">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="checkbox" value="">
                                                                                <span class="form-check-sign"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="mail_view.php">Olivia Smith</a>
                                                                    </td>
                                                                    <td class="mail-message">Mauris in sem at quam elementum sagittis vel.</td>
                                                                    <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                                    <td class="mail-label hidden-xs"><i class="fa fa-circle text-warning"></i></td>
                                                                    <td class="text-right">4.10 AM</td>
                                                                </tr>
                                                                <tr class="unread" data-id="3">
                                                                    <td class="check-cell">
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="checkbox" value="">
                                                                                <span class="form-check-sign"></span>
                                                                            </label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <a href="mail_view.php">Noah Williams</a>
                                                                    </td>
                                                                    <td class="mail-message">Neque porro quisquam est qui dolorem ipsum quia</td>
                                                                    <td class="hidden-xs"></td>
                                                                    <td class="mail-label hidden-xs"></td>
                                                                    <td class="text-right">1.20 AM</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                        <ul class="pagination justify-content-end m-t-0 m-r-10 p-b-10">
                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:;" aria-label="Previous">
                                                                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a class="page-link" href="javascript:;">1</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:;">2</a>
                                                            </li>

                                                            <li class="page-item">
                                                                <a class="page-link" href="javascript:;" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                                                            </li>
                                                        </ul>
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
