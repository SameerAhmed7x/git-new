<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $studentName = $_POST["studentName"];
    $rollNumber = $_POST["rollNumber"];
    $subject1 = $_POST["subject1"];
    $subject2 = $_POST["subject2"];
    $subject3 = $_POST["subject3"];
    $subject4 = $_POST["subject4"];
    $subject5 = $_POST["subject5"];
    $totalmark = $subject1 + $subject2 + $subject3 + $subject4 +  $subject5 ;
    $percentage = ($totalmark/500)*100;
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
$grade = "Bhai apko mehnat ki zarorat hai #Fail";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
body{

background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    color: white;
    font-family: sans-serif;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    padding-top: 100px;
    padding-bottom: 100px;
    padding-left: 100px;
}
</style>
<body>
    <div class="container" >
        <h2 class="mt-5">Student Marksheet</h2>
   
       
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
                    <th>Subject 3</th>
                    <th>Subject 4</th>
                    <th>Subject 5</th>
                    <th>Total Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $studentName; ?></td>
                    <td><?php echo $rollNumber; ?></td>
                    <td><?php echo $subject1; ?></td>
                    <td><?php echo $subject2; ?></td>
                    <td><?php echo $subject3; ?></td>
                    <td><?php echo $subject4; ?></td>
                    <td><?php echo $subject5; ?></td>
                    <td><?php echo $totalmark; ?></td>
                    <td><?php echo number_format($percentage, 2); ?>%</td>

                    <td><?php echo $grade; ?></td>
                 
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
}else{
    echo "no data submited.";
}
?>