<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Edit Student</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa fa-graduation-cap"></i> Doctor
            </li>
            <li class="active">
                <i class="fa fa-plus-square"></i> Edit Doctor
            </li>
        </ol>
    </div>
</div>
<div class="col-md-12">


    <form class="form-horizontal" method="POST">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Doctor Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Doctor Name" required
                       value="<?=isset($doctor) ? $doctor->name : ''?>">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Email" required
                       value="<?=isset($doctor) ? $doctor->email : ''?>">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Degree</label>
            <div class="col-sm-10">
                <select class="form-control" name="degree" required>
                    <option><?=isset($doctor) ? $doctor->degree : ''?></option>
                    <option>Professor Dr</option>
                    <option>Doctor</option>
                    <option>Assistant Professor</option>
                    <option>Teaching Assistant</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Address" name="address" required
                       value="<?=isset($doctor) ? $doctor->address : ''?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Birth Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="Birth Date" name="birth_date" required
                       value="<?=isset($doctor) ? $doctor->birthDate : ''?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Phone" name="phone" required
                       value="<?=isset($doctor) ? $doctor->phone : ''?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Save</label>
            <div class="col-sm-10">
                <input type="submit" value="Submit" name="submit">
            </div>
        </div>

    </form>
</div>