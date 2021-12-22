<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Ajax | Crud</title>
  </head>
  <body>
    
    <div class="container mt-3">

        <h1 class="text-center text-primary">Crud In Ajax</h1>

        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Employee</button>
        <br><br>
        <div id="table">
            
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <form id="myForm">
                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" name="name" id="name" class="form-control">
                        <span id="e1"></span>
                    </div>

                    <div class="form-group">
                        <label>Email: </label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-primary addNew">Submit</button>

                </form>

              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(document).ready(function(){
            getAllData();
            function getAllData() {
                $.ajax({
                type: 'GET',
                url: 'http://localhost/PHP_Laravel_03030/ajax/api.php',
                dataType : 'text',
                success:function(data) {
                    let finalData = JSON.parse(data);


                    console.log(finalData.length);

                    let table = '';

                    table += '<table class="table table-bordered">';
                        table += '<tr>';
                            table += '<th>Sr.No</th>';
                            table += '<th>Name</th>';
                            table += '<th>Email</th>';
                            table += '<th>Action</th>';
                        table += '</tr>';

                    if (finalData.length<1) {
                        table += '<tr>';
                            table += '<td colspan="4" class="text-danger text-center">No Record Found</td>';
                        table += '</tr>';
                    } else {
                        
                        finalData.forEach(function(value, index){
                            table += '<tr>';
                                table += '<td>'+(index+1)+'</td>';
                                table += '<td>'+value.name+'</td>';
                                table += '<td>'+value.email+'</td>';
                                table += `<td>
                                    <button class='btn btn-primary'>Show</button>
                                    <button class='btn btn-info edit' value='${value.id}'>Edit</button>
                                    <button class='btn btn-danger delete' value='${value.id}'>Delete</button>
                                </td>`;
                            table += '</tr>';
                        });

                    }

                    table += '</table>';

                    $("#table").html(table);



                },
                error:function(e) {
                    console.log(e)
                }
            });
            }


            // $(document).on("click","#openModel",function(){
            //     $("#exampleModal").modal('show');
            // });

            $(document).on("click",".addNew", function(event){

                event.preventDefault();

                let name_of_user = $("#name").val();
                let email = $("#email").val();
                
                if(name_of_user=='') {
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

                let userDetails = {name :name_of_user, email: email}
                $.ajax({
                    type: "POST",
                    url: "http://localhost/PHP_Laravel_03030/ajax/insert.php",
                    dataType : 'text',
                    data: userDetails,

                    success:function(data) {
                        if (data) {
                            getAllData();
                            $('#myForm')[0].reset();
                            $("#exampleModal").modal('hide');
                            $("#name").removeClass('is-valid');
                            $("#email").removeClass('is-valid');  
                        } 
                    }
                });

                console.log(name_of_user + email);
            });

            $(document).on("click",".delete", function() {
                console.log($(this).val());
               let did = {id :$(this).val()}

                $.ajax({
                    type: "POST",
                    url: "http://localhost/PHP_Laravel_03030/ajax/delete.php",
                    dataType : 'text',
                    data: did,

                    success:function(data) {
                        if (data) {
                            getAllData();
                        } 
                    }
                });
            });


            $(document).on("click",".edit", function() {
              
                $("#submit").val($(this).val());
                let eid = {id :$(this).val()}
            

                $.ajax({
                    type: "POST",
                    url: "http://localhost/PHP_Laravel_03030/ajax/fetch.php",
                    dataType : 'text',
                    data: eid,

                    success:function(data) {
                        if (data) {
                            let finalData = JSON.parse(data);

                            console.log(finalData);

                            $("#name").val(finalData.name)
                            $("#email").val(finalData.email)

                            $("#exampleModal").modal('show');

                            $('#submit').removeClass('addNew');
                            $('#submit').addClass('update');

                        } 
                    }
                });
            });

            $(document).on("click",".update", function(event) {
                event.preventDefault();
                let name_of_user = $("#name").val();
                let email = $("#email").val();

                console.log();

                let userDetails = {name :name_of_user, email: email, id: $(this).val()}
                $.ajax({
                    type: "POST",
                    url: "http://localhost/PHP_Laravel_03030/ajax/update.php",
                    dataType : 'text',
                    data: userDetails,

                    success:function(data) {
                        if (data) {
                            getAllData();
                            $('#myForm')[0].reset();
                            $("#exampleModal").modal('hide'); 
                        } 
                    }
                });

            });

        })
    </script>
  </body>
</html>         