<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Add New Lecture</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa book"></i> Lecture
            </li>
            <li class="active">
                <i class="fa fa-plus-square"></i> Add New Lecture
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
                <select class="form-control" name="subject_id">
                    <?php foreach ($subjects as $subject):?>
                        <option value="<?=$subject->sub_id?>"><?=$subject->sub_name?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Lecture Time</label>
                <input type="time" class="form-control" placeholder="Enter Lecture Time" name="lecture_time" required>
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
