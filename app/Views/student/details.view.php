<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Students Details</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa fa-graduation-cap"></i> Students
            </li>
            <li class="active">
                <i class="fa fa-graduation-cap"></i> <?=$student->name?>
            </li>
        </ol>
    </div>
</div>

<div class="row panel panel-success" style="margin-top:2%;">
    <div class="panel-heading lead">
        <div class="row">
            <div class="col-lg-8 col-md-8"><i class="fa fa-users"></i> View Student Details</div>
            <div class="col-lg-4 col-md-4 text-right">
                <div class="btn-group text-center">

                    <a href="http://www.students.com/student/edit/<?=$student->id?>"
                       class="btn btn-success btn-sm btn-default"><i class="fa fa-edit fa-1x"></i></a>

                    <a href="http://www.students.com/student/delete/<?=$student->id?>"
                       class="btn btn-success btn-sm btn-default"><i class="fa fa-trash-o fa-1x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                    <div class="col-lg-9 col-md-9">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#Summery"
                                class="text-success"><i class="fa fa-indent"></i> Details</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="Summery" class="tab-pane fade in active">
                                <div class="table-responsive panel">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-user"></i>
                                                Student Name </td>
                                            <td><?=$student->name?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-envelope"></i>
                                                Email Address</td>
                                            <td><?=$student->email?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-address-book">
                                                </i> Address</td>
                                            <td><?=$student->address?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-calendar"></i>
                                                Birthday</td>
                                            <td><?=$student->birthDate?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-success"><i class="fa fa-clock-o"></i>
                                                Time Register</td>
                                            <td><?=$student->register_time?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

            </div>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>

