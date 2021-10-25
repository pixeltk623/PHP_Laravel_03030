<?php

    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['date'];
        $address = $_POST['address'];
        $ocupation = $_POST['ocupation'];
        

        if($name=='') {
            $err1 = "Name Can Not be blank.";
        }
        
        if($email=='') {
            $err2 = "Email Can Not be blank.";
        }
        
        if($mobile=='') {
            $err3 = "Mobile Can Not be blank.";
        }
        
        if (!isset($_POST['gender'])) {
            $err4 = "Gender must be selected.";
        }else {
            $gender = $_POST['gender'];
        }
        
        if($dob=='') {
            $err5 = "Date must be selected.";
        }
        
        if($address=='') {
            $err6 = "Address Can Not be blank.";
        }
        
        if($ocupation=='') {
            $err7 = "Ocupation must be selected.";
        }
        
        if (!isset($_POST['hobby'])) {
            $err8 = "Please select atleast one Hobby";
        }else {
            $hobby = $_POST['hobby'];
        }
        
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form with validation</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Form</h1>
        <hr>
        <form method="post">
            <div class="form-group row">
                <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="inputname" placeholder="Name">
                    <?php
                        if (isset($err1)) {
                            ?>
                            <span style="color: red;"><?php echo $err1; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputemail" placeholder="Email">
                    <?php
                        if (isset($err2)) {
                            ?>
                            <span style="color: red;"><?php echo $err2; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputmobile" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="mobile" id="inputmobile" placeholder="Mobile">
                    <?php
                        if (isset($err3)) {
                            ?>
                            <span style="color: red;"><?php echo $err3; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male">
                        <label class="form-check-label" for="gender1">
                            Male
                        </label>
                        </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female">
                        <label class="form-check-label" for="gender2">
                            Female
                        </label>
                    </div>
                    <?php
                        if (isset($err4)) {
                            ?>
                            <span style="color: red;"><?php echo $err4; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            </fieldset>
            <div class="form-group row">
                <label for="inputdate" class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="inputdate" >
                    <?php
                        if (isset($err7)) {
                            ?>
                            <span style="color: red;"><?php echo $err7; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputaddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" id="inputaddress" >
                <?php
                    if (isset($err7)) {
                        ?>
                        <span style="color: red;"><?php echo $err7; ?></span>
                        <?php 
                    }
                ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputocupation" class="col-sm-2 col-form-label">Ocupation</label>
                <div class="col-sm-10">
                    <select class="form-control" id="inputocupation" name="ocupation">
                        <option value="">Select</option>
                        <option value="Job">Job</option>
                        <option value="Business">Business</option>
                        <option value="Student">Student</option>
                        <option value="Jobless">Jobless</option>
                    </select>
                    <?php
                        if (isset($err7)) {
                            ?>
                            <span style="color: red;"><?php echo $err7; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobby[]" value="Reading">
                            <label class="form-check-label" for="gridCheck1">
                                Reading
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="hobby[]" value="Collecting">
                            <label class="form-check-label" for="gridCheck2">
                                Collecting
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck3" name="hobby[]" value="Sports">
                            <label class="form-check-label" for="gridCheck3">
                                Sports
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck4" name="hobby[]" value="Camping">
                            <label class="form-check-label" for="gridCheck4">
                                Camping
                            </label>
                        </div>
                    </div>
                    <?php
                        if (isset($err8)) {
                            ?>
                            <span style="color: red;"><?php echo $err8; ?></span>
                            <?php 
                        }
                    ?>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <div>
            <table class="table caption-top table-bordered border-primary">
            <tr>
                <td>Name</td>
                <td><?php if(isset($name)){
                    echo $name;
                } ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php if(isset($email)){
                    echo $email;
                } ?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><?php if(isset($mobile)){
                    echo $mobile;
                } ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php if(isset($gender)){
                    echo $gender;
                } ?></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><?php if(isset($dob)){
                    echo $dob;
                } ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php if(isset($address)){
                    echo $address;
                } ?></td>
            </tr>
            <tr>
                <td>Ocupation</td>
                <td><?php if(isset($ocupation)){
                    echo $ocupation;
                } ?></td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td><?php if(isset($hobby)){
                    foreach ($hobby as $key => $value) {
                        echo $value."  ";
                    }
                } ?></td>
            </tr>
        </table>
        </div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
