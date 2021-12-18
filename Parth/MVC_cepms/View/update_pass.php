<?php
    session_start();
    include_once 'config.php';

    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {

    if (isset($_POST['update'])) {

        $name=$_POST['fn'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $it=$_POST['it'];
        $icn=$_POST['icn'];
        $category=$_POST['category'];
        $fd=$_POST['fd'];
        $td=$_POST['td'];

        if ($name=="") {
            $ern="Full Name can not be empty.";
        }
        if ($mobile=="") {
            $erm="Contact No. can not be empty.";
        }
        if ($email=="") {
            $ere="Email Address can not be empty.";
        }
        if ($it=="") {
            $erit="Identity Type must be selected.";
        }
        if ($icn=="") {
            $ericn="Identity Card No. can not be empty.";
        }
        if ($category=="") {
            $erc="Category must be selected.";
        }
        if ($fd=="") {
            $erfd="From date can not be empty.";
        }
        if ($td=="") {
            $ertd="To date can not be empty.";
        }

        if (!isset($ern) && !isset($erm) && !isset($ere) && !isset($erit) && !isset($ericn) && !isset($erc) && !isset($erfd) && !isset($ertd)) {
        
            $query = "UPDATE `pass` SET `name`='$name',`mobile`='$mobile',`email`='$email',`identity_type`='$it',`identity_card_no`='$icn',`category`='$category',`from_date`='$fd',`to_date`='$td',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id=".$_GET['id'];
            $res = mysqli_query($conn, $query);
            if ($res) {
                    $message="Successfull";
                }    
        }
            
    }

    if (isset($_GET['id'])) {
        $gid=$_GET['id'];

        $query = "SELECT * FROM pass WHERE id=".$gid;

        $res = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($res);

    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>CePMS</title>
</head>
<body>

    <?php include_once 'header.php'; ?>
    
    <div class="container">
        <br>
        <h1>Update Pass</h1>
        <?php 
            if (isset($message)) {
                echo "<span style='color:green;'>".$message."</span>";
            }
        ?>
        <hr>
        <form method="post">
            <label class="form-label">Pass Number</label>
            <input type="text" class="form-control" name="fn" value="<?php echo $data['pass_number']; ?>" disabled>
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fn" value="<?php echo $data['name']; ?>">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $data['mobile']; ?>">
            <?php 
                if (isset($erm)) {
                echo "<span style='color:red;'>".$erm."</span>";
                }
            ?>
            <label class="form-label">Email Address</label>
            <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
            <?php
                if (isset($ere)) {
                echo "<span style='color:red;'>".$ere."</span>";
                }
            ?>
            <label class="form-label">Identity Type</label>
            <select class="form-control" name="it">
                <option value="" <?php if ($data['identity_type']== '') echo ' selected="selected"'; ?>>Choose Identity Type</option>
                <option value="Voter Card" <?php if ($data['identity_type']== 'Voter Card') echo ' selected="selected"'; ?>>Voter Card</option>
                <option value="PAN Card" <?php if ($data['identity_type']== 'PAN Card') echo ' selected="selected"'; ?>>PAN Card</option>
                <option value="Adhar Card" <?php if ($data['identity_type']== 'Adhar Card') echo ' selected="selected"'; ?>>Adhar Card</option>
                <option value="Student Card" <?php if ($data['identity_type']== 'Student Card') echo ' selected="selected"'; ?>>Student Card</option>
                <option value="Driving Liciense" <?php if ($data['identity_type']== 'Driving Liciense') echo ' selected="selected"'; ?>>Driving Liciense</option>
                <option value="Passport" <?php if ($data['identity_type']== 'Passport') echo ' selected="selected"'; ?>>Passport</option>
                <option value="Any Official Card" <?php if ($data['identity_type']== 'Any Official Card') echo ' selected="selected"'; ?>>Any Official Card</option>
                <option value="Any Other Govt issued Doc" <?php if ($data['identity_type']== 'Any Other Govt issued Doc') echo ' selected="selected"'; ?>>Any Other Govt issued Doc</option>
            </select>
            <?php 
                if (isset($erit)) {
                echo "<span style='color:red;'>".$erit."</span>";
                }
            ?>
            <label class="form-label">Identity Card No.</label>
            <input type="text" class="form-control" name="icn" value="<?php echo $data['identity_card_no']; ?>">
            <?php 
                if (isset($ericn)) {
                echo "<span style='color:red;'>".$ericn."</span>";
                }
            ?>
            <label class="form-label">Category</label>
            <select class="form-control" name="category" value="<?php echo $data['category']; ?>">
                <option value="" <?php if ($data['category']== '') echo ' selected="selected"'; ?>>Select Category</option>
                <?php
                $query = "SELECT id, name FROM `category`";
                $res = mysqli_query($conn, $query);
                while($category = mysqli_fetch_assoc($res)) {
                    ?>
                    <option value="<?php echo $category['id']; ?>" <?php if ($data['category']== $category['id']) echo ' selected="selected"'; ?>><?php echo $category['name']; ?></option>
                    <?php
                } 
                ?>
            </select>
            <?php 
                if (isset($erc)) {
                echo "<span style='color:red;'>".$erc."</span>";
                }
            ?>
            <label class="form-label">From Date</label>
            <input type="date" class="form-control" name="fd" value="<?php echo $data['from_date']; ?>">
            <?php 
                if (isset($erfd)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">To Date</label>
            <input type="date" class="form-control" name="td" value="<?php echo $data['to_date']; ?>">
            <?php 
                if (isset($ertd)) {
                echo "<span style='color:red;'>".$ertd."</span>";
                }
            ?>
            <label class="form-label">Pass Creation Date</label>
            <input type="text" class="form-control" name="td" value="<?php echo $data['created_at']; ?>" readonly>
            <br>
            <input type="submit" class="btn btn-primary" name="update" value="Update">
        </form>
        

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
<?php 
    } else {
        header("Location: index.php");
    }
?>
