<?php include 'header.php'?>

<!-- Page content -->
<div class="content" style="margin-top:57px">
    <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a> -->
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
            aria-expanded="false" aria-controls="collapseExample">
            Post Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST" action="config.php">
                <div class="mb-3">
                    <label for="Company Name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="Company Name" name="cname">
                </div>
                <div class="mb-3">
                    <label for="Position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="Position" name="position">
                </div>
                <div class="mb-3">
                    <label for="Jobdesc" class="form-label">Job Description</label>
                    <input type="text" class="form-control" id="Jobdesc" name="Jobdesc">
                </div>
                <div class="mb-3">
                    <label for="skills" class="form-label">Skills Required</label>
                    <input type="text" class="form-control" id="skills" name="skills">
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" name="CTC">
                </div>

                <button type="submit" class="btn btn-primary" name="job">Submit</button>
            </form>
        </div>
    </div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="jobs"; 
            $conn=mysqli_connect($servername,$username,$password,$database);
            $sql="SELECT cname, position, CTC FROM jobs";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
            echo"<tr>
                 <td>".++$i."</td>
                 <td>".$rows['cname']."</td>
                 <td>".$rows['position']."</td>
                 <td>".$rows['CTC']."</td>
                </tr>";
                }
            } 
            else{
                echo"";
            }            
        ?>
        </tbody>
    </table>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</body>

</html>