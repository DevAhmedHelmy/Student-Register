<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Students</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li class="active">
                <i class="fa fa-graduation-cap"></i> Outlay
            </li>
        </ol>
    </div>
</div>
<a href="/outlay/add"><i class="fa fa-money"></i> Pay Outlay</a>



<div class="col-md-12">
    <h2>Outlay</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>Student Name</th>
                <th>Outlay</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody>
                <?php if(false !== $result):?>
                    <?php foreach ($result as $value) :?>
                        <tr>
                            <td><?=$value->name?></td>
                            <td><?=$value->outlay?></td>

                            <td>
                                <a href="http://www.students.com/student/edit/<?=$value->id?>"><i class="fa fa-edit"></i></a>
                                <a href="http://www.students.com/student/delete/<?=$value->id?>" onclick="if(!confirm('Do you want delete this employee')) return false;">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>

                <?php else:?>
                    <td colspan="5"><p>Sorry no data in Student table</p></td>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>
