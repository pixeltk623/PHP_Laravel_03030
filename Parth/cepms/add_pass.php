<?php
    session_start();
    include_once 'config.php';

    if(isset($_SESSION['is_login']) && isset($_SESSION['admin_id'])) {

    if (isset($_POST['add'])) {

        $name=$_POST['fn'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $it=$_POST['it'];
        $icn=$_POST['icn'];
        $category=$_POST['category'];
        $fd=$_POST['fd'];
        $td=$_POST['td'];
        $passNumber = "COVID".rand(1500123,8900123);

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
        
            $query = "INSERT INTO `pass`(`pass_number`, `name`, `mobile`, `email`, `identity_type`, `identity_card_no`, `category`, `from_date`, `to_date`) VALUES ('$passNumber','$name','$mobile','$email','$it','$icn','$category','$fd','$td')";


            $res = mysqli_query($conn, $query);
            if ($res) {
                    $message="Successfull";
                }    
        }
            
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
        <h1>Add Pass</h1>
        <?php 
            if (isset($message)) {
                echo "<span style='color:green;'>".$message."</span>";
            }
        ?>
        <hr>
        <form method="post">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fn">
            <?php 
                if (isset($ern)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control" name="mobile">
            <?php 
                if (isset($erm)) {
                echo "<span style='color:red;'>".$erm."</span>";
                }
            ?>
            <label class="form-label">Email Address</label>
            <input type="text" class="form-control" name="email">
            <?php
                if (isset($ere)) {
                echo "<span style='color:red;'>".$ere."</span>";
                }
            ?>
            <label class="form-label">Identity Type</label>
            <select class="form-control" name="it">
                <option value="">Choose Identity Type</option>
                <option value="Voter Card">Voter Card</option>
                <option value="PAN Card">PAN Card</option>
                <option value="Adhar Card">Adhar Card</option>
                <option value="Student Card">Student Card</option>
                <option value="Driving Liciense">Driving Liciense</option>
                <option value="Passport">Passport</option>
                <option value="Any Official Card">Any Official Card</option>
                <option value="Any Other Govt issued Doc">Any Other Govt issued Doc</option>
            </select>
            <?php 
                if (isset($erit)) {
                echo "<span style='color:red;'>".$erit."</span>";
                }
            ?>
            <label class="form-label">Identity Card No.</label>
            <input type="text" class="form-control" name="icn">
            <?php 
                if (isset($ericn)) {
                echo "<span style='color:red;'>".$ericn."</span>";
                }
            ?>
            <label class="form-label">Category</label>
            <select class="form-control" name="category">
                <option value="">Select Category</option>
                <?php
                $query = "SELECT id, name FROM `category`";
                $res = mysqli_query($conn, $query);
                while($data = mysqli_fetch_assoc($res)) {
                    ?>
                    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
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
            <input type="date" class="form-control" name="fd">
            <?php 
                if (isset($erfd)) {
                echo "<span style='color:red;'>".$ern."</span>";
                }
            ?>
            <label class="form-label">To Date</label>
            <input type="date" class="form-control" name="td">
            <?php 
                if (isset($ertd)) {
                echo "<span style='color:red;'>".$ertd."</span>";
                }
            ?>
            <br>
            <input type="submit" class="btn btn-primary" name="add" value="Add">
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
