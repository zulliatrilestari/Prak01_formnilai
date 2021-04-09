<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/header.php"; ?>
</head>


<body>
    <!-- Navbar -->
    <?php include "components/navbar.php"; ?>
    <!-- End Navbar -->
    <div class="container">
    <form method="method" action="form_nilai.php">
    
        <div class="form-group">
            <label for="exampleInputEmail1">Nim</label>
            <input type="text" class="form-control" name="nim" id="exampleInputEmail1" style="size: 20px;" aria-describedby="emailHelp" placeholder="Enter Your NIM">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Course</label>
            <select class="form-control" id="exampleFormControlSelect1" name="course">
                <option value="DDP">Programming Basics</option>
                <option value="BDI">Database I</option>
                <option value="WEB1">Web Programming</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UTS Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="uts_score" aria-describedby="emailHelp" placeholder="Enter The UTS Score">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">UAS Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="uas_score" aria-describedby="emailHelp" placeholder="Enter The UAS Score">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Praktikum Score</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="assigment_score" aria-describedby="emailHelp" placeholder="Enter The Praktikum Score">
        </div>
        <button type="submit" name="process" value="save" class="btn btn-primary">Submit</button>
    </form>

    </div>
</body>


</html>

<?php include "components/footer.php"; ?>