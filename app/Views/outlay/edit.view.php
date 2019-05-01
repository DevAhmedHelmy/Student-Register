<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Edit Pay Outlay</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa fa-money"></i> Outlay
            </li>
            <li class="active">
                <i class="fa fa-plus-square"></i> Edit Pay Outlay
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form  method="POST" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <div class="form-group">
                <label>Outlay</label>
                <input type="number" class="form-control" placeholder="Enter Your outlay" name="outlay" required>
            </div>
            <div class="form-group">
                <label>Student Name</label>
                <select class="form-control" name="student_id">
                    <?php foreach ($students as $student):?>
                        <option value="<?=$student->id?>"><?=$student->name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Submit" name="submit">
            <!--            <button type="submit" class="btn btn-primary">Submit</button>-->
        </form>

    </div>
</div>
