<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $studentName = $_POST["studentName"];
    $rollNumber = $_POST["rollNumber"];
    $subject1 = $_POST["subject1"];
    $subject2 = $_POST["subject2"];
    $subject3 = $_POST["subject3"];
    $subject4 = $_POST["subject4"];
    $subject5 = $_POST["subject5"];
    $totalmark = $subject1 + $subject2 + $subject3 + $subject4 +  $subject5 ;
    $percentage = ($total/500)*100;
    $grade = "";
    if($percentage >= 80)
    {
        $grade = "A+";
    }
    else if($percentage >= 70)
    {
        $grade = "A";
    }
    else if($percentage >= 60)
    {
        $grade = "B";
    }
    else if($percentage >= 50)
    {
        $grade = "C";
    }

    else {
$grade = " 
Bhai apko mehnat ki zarorat hai #Fail";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: radial-gradient(circle, rgba(3,18,97,1) 0%, rgba(71,116,247,1) 100%);
        }
        .container{
            width: 500px;
            margin: auto;
            padding: 20px;
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,105,121,1) 35%, rgba(0,212,255,1) 100%);
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
            border-radius: 25px;

        }
        media
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center" style="color:white;" ><i>Enter Student Details</i></h1>
        <form action="testmarksheet.php" method="POST">
            <div class="form-group">
                <label for="studentName" style="color:white;"><b>Student Name</b></label>
                <input type="text" class="form-control" id="studentName" name="studentName" required>
            </div>
            <div class="form-group">
                <label for="rollNumber"  style="color:white;"><b>Roll Number</b></label>
                <input type="text" class="form-control" id="rollNumber" name="rollNumber" required>
            </div>
            <div class="form-group">
                <label for="subject1" style="color:white;"><b>Subject 1 Marks</b></label>
                <input type="number" class="form-control" id="subject1" name="subject1" required>
            </div>
            <div class="form-group">
                <label for="subject2" style="color:white;"><b>Subject 2 Marks</b></label>
                <input type="number" class="form-control" id="subject2" name="subject2" required>
            </div>
            <div class="form-group">
                <label for="subject3" style="color:white;"><b>Subject 3 Marks</b></label>
                <input type="number" class="form-control" id="subject3" name="subject3" required>
            </div>
            <div class="form-group">
                <label for="subject4" style="color:white;"><b>Subject 4 Marks</b></label>
                <input type="number" class="form-control" id="subject4" name="subject4" required>
            </div>
            <div class="form-group">
                <label for="subject5" style="color:white;"><b>Subject 5 Marks</b></label>
                <input type="number" class="form-control" id="subject5" name="subject5" required>
            </div>
            <div class="container">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    

    
</body>
</html>