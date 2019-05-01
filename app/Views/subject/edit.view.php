<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Edit Subject
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa fa-graduation-cap"></i> Subjects
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Edit Subject
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form  method="POST" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <div class="form-group">
                <label>Subject Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required value="<?= isset($subject) ? $subject->sub_name : ''?>">
            </div>
            <div class="form-group">
                <label>Doctor Name</label>
                <select class="form-control" name="doctor_id">
                    <?php foreach ($doctors as $doctor):?>
                        <option value="<?=$doctor->id?>"><?=$doctor->name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Submit" name="submit">
            <!--            <button type="submit" class="btn btn-primary">Submit</button>-->
        </form>

    </div>
</div>

