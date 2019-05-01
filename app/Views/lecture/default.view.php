<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Lecture</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li class="active">
                <i class="fa fa-book"></i> Lecture
            </li>
        </ol>
    </div>
</div>
<div class="col-md-12">
    <a href="/lecture/add"><i class="fa fa-plus-square"></i> Add New Lecture</a>
</div>

<div class="col-md-6 col-lg-offset-3">
    <h2>Lectures</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>Lecture Name</th>
                <th>Lecture Time</th>
                <th>Doctor Name</th>
                <th>control</th>
            </tr>
            </thead>
            <tbody>
            <?php if(false !== $result):?>
                <?php foreach ($result as $value) :?>
                    <tr>
                        <td><?=$value->sub_name?></td>
                        <td><?=$value->lecture_time?></td>
                        <td><?=$value->name?></td>
                        <td>
                            <a href="http://www.students.com/lecture/edit/<?=$value->lecture_id?>"><i class="fa fa-edit"></i></a>
                            <a href="http://www.students.com/lecture/delete/<?=$value->lecture_id?>" onclick="if(!confirm('Do you want delete this subject')) return false;">
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