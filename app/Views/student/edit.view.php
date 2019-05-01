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
                <i class="fa fa-graduation-cap"></i> Students
            </li>
            <li class="active">
                <i class="fa fa-plus-square"></i> Edit Student
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form  method="POST">
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required
                value="<?=isset($student) ? $student->name : ''?>">
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" required
                       value="<?=isset($student) ? $student->email : ''?>">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" placeholder="New Password" name="new_password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="address" required
                       value="<?=isset($student) ? $student->address : ''?>">
            </div>
            <div class="form-group">
                <label>Birth Date</label>
                <input type="date" class="form-control" placeholder="Birth Date" name="birth_date" required
                       value="<?=isset($student) ? $student->birthDate : ''?>">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" required
                       value="<?=isset($student) ? $student->phone : ''?>">
            </div>
            <input type="submit" value="Submit" name="submit"/>
        </form>

    </div>
</div>
