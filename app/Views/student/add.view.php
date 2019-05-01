<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard <small>Add New Student</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
            <li>
                <i class="fa fa-graduation-cap"></i> Students
            </li>
            <li class="active">
                <i class="fa fa-plus-square"></i> Add New Student
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form  method="POST" autocomplete="off">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="address" required>
            </div>
            <div class="form-group">
                <label>Birth Date</label>
                <input type="date" class="form-control" placeholder="Birth Date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Phone" name="phone" required>
            </div>
            <input type="submit" value="Submit" name="submit">
<!--            <button type="submit" class="btn btn-primary">Submit</button>-->
        </form>

    </div>
</div>
