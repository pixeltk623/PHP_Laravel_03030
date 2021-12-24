<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<title>Crud | New Employee Registration</title>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	<style type="text/css">
		table {
			margin: auto;
		}

		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">New Employee Registration</h1>
	<div class="container">
	<form method="post" id="uploadForm" enctype="multipart/form-data">
		<label class="form-label">Full Name</label>
		<input type="text" name="fname" id=name class="form-control" placeholder="Enter Your First Name" >
		<span id="e1"></span>
		
		<label class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Last Email" >
		<span id="e2"></span>

		<label class="form-label">Gender</label><br>
		<input type="radio" class="form-radio" name="gender" value="Male">Male
		<input type="radio" class="form-radio" name="gender" value="Female">Female
		<input type="radio" class="form-radio" name="gender" value="Others">Others
		<span id="e3"></span>

		<br>
		<label class="form-label">DOB</label>
		<input type="date" class="form-control" id="dob" name="dob" >
		<span id="e4"></span>

		<label class="form-label">City</label>
		<select name="city" id="city" class="form-control">
			<option value="">Select</option>
			<option value="Vadodara">Vadodara</option>
			<option value="Anand">Anand</option>
			<option value="Nadiad">Nadiad</option>
			<option value="Ahmedabad">Ahmedabad</option>
			<option value="Surat">Surat</option>
		</select>
		<span id="e5"></span>

		<label class="form-label">Hobby</label><br>
		<input type="checkbox" class="form-checkbox" name="hobby" value="Cricket">Cricket
		<input type="checkbox" class="form-checkbox" name="hobby" value="Football">Football
		<input type="checkbox" class="form-checkbox" name="hobby" value="Baseball">Baseball
		<input type="checkbox" class="form-checkbox" name="hobby" value="Badmintion">Badmintion
		<span id="e6"></span>

		<br>
		<label class="form-label">Profile Pic</label><br>
		<input type="file" id="profilePic" name="profilePic">
		<span id="e7"></span>

		<br><br>
		<input type="submit" class="btn btn-primary" name="submit" value="Register">

	</form>
	</div>
	<script type="text/javascript">

		$(document).ready(function(){

			$("#uploadForm").on("submit",function(event){

                event.preventDefault();

                let fname = $("#name").val();
                let email = $("#email").val();
                let g = $('[name="gender"]');
                let gender = $(g).val();
                let dob = $("#dob").val();
                let city = $("#city").val();
                let h = $('[name="hobby"]');
                let hobby = [$(h).val()];

                console.log(gender);
                console.log(hobby);
                
                if(fname=='') {
                    $("#name").addClass('is-invalid')
                    $("#name").removeClass('is-valid')

                    $("#e1").text("Name Can Not be Blank")
                    $("#e1").css("color","red")
                } else {
                    $("#name").removeClass('is-invalid')
                    $("#name").addClass('is-valid')
                    $("#e1").text("")
                }

                if(email=='') {
                    $("#email").addClass('is-invalid')
                    $("#email").removeClass('is-valid')
                } else {
                    $("#email").removeClass('is-invalid')
                    $("#email").addClass('is-valid')
                }

                $.ajax({
                    type: "POST",
                    url: "http://localhost/PHP_Laravel_03030/ajax/file_upload/insert.php",
                    dataType : 'text',
                    contentType: false,
				        cache: false,
				    processData:false,
                    data: new FormData(this),
                    
                    success:function(data) {
                        if (data) {
                            console.log(data);  
                        } 
                    }
                });
			});
		});
	</script>
</body>
</html>