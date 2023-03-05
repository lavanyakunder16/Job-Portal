<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
    .banner {
        background: url('image.jpg');

    }



    .container {
        background-color: white;
        margin-top: 1em;
        width: 10000000em;
        margin-left: 15em;
        margin-right: 100em;
        padding: 30px;
        box-shadow: 10px 10px 8px 10px #888888;
    }

    .container-fluid {
        padding: 70px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-image: url('img1.jpg');
    }
    </style>
    <title>Career</title>

</head>

<body>


    <div class="container-fluid">
        <!-- <img src="img.jpg" alt="" class="img-fluid" width="1500" height="100"> -->
        <h1>Job Portal</h1>
        <br>
        <h6>Find Best Jobs that match your Skill</h6>

    </div>


    <div class="row">
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="jobs"; 
            $conn=mysqli_connect($servername,$username,$password,$database);
            $sql="SELECT cname,position,Jobdesc,CTC,skills FROM jobs";
            $result=mysqli_query($conn,$sql);
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
            echo'
            <div class="container">
                <div class="jobs">
                    <h3 style ="text-align:center;">'.$rows['position'].'</h3>
                    <h4 style ="text-align:center;">'.$rows['cname'].'</h4>
                    <p style ="color:black; text-align:justify;">'.$rows['Jobdesc'].'</p>
                    <p style ="color:black;"><b>Skills Required: </b>'.$rows['skills'].'</p>
                    <p style ="color:black;><b>Skills Required:</b>'.$rows['skills'].'</p>
                    <p style ="color:black;><b>CTC:</b>'.$rows['CTC'].'</p>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    aria-expanded="false" aria-controls="collapseExample">
                    Apply Now
                    </button>
                </div>
            </div>';
            }
            } 
         
        ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Jobs</h1>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="config.php">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Applying For</label>
                                <input type="text" class="form-control" name="apply">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Qualification</label>
                                <input type="text" class="form-control" name="qual">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Passout Year</label>
                                <input type="text" class="form-control" name="year">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="go" class="btn btn-primary">Apply</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>