<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Checker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow mx-auto" style="max-width:500px;">

        <div class="card-header bg-primary text-white text-center">
            <h3>Student Grade Checker</h3>
        </div>

        <div class="card-body">

            <form method="post">

                <div class="mb-3">
                    <label class="form-label">Enter CGPA</label>

                    <input type="number"
                           step="0.1"
                           min="0"
                           max="10"
                           name="cgpa"
                           class="form-control"
                           placeholder="Enter CGPA"
                           required>
                </div>

                <button class="btn btn-primary w-100" type="submit">
                    Check Result
                </button>

            </form>

            <br>

<?php

if(isset($_POST['cgpa'])){

    $cgpa = $_POST['cgpa'];

    if($cgpa >= 9){

        echo "<div class='alert alert-success'>
                <h5>Excellent 🎉</h5>
                Your CGPA is <b>$cgpa</b>. Outstanding Performance!
              </div>";

    }

    elseif($cgpa >= 8){

        echo "<div class='alert alert-primary'>
                <h5>Very Good 👍</h5>
                Your CGPA is <b>$cgpa</b>. Keep it up!
              </div>";

    }

    elseif($cgpa >= 7){

        echo "<div class='alert alert-warning'>
                <h5>Good 🙂</h5>
                Your CGPA is <b>$cgpa</b>. You can do even better.
              </div>";

    }

    else{

        echo "<div class='alert alert-danger'>
                <h5>Keep Improving 💪</h5>
                Your CGPA is <b>$cgpa</b>. Work harder for better results.
              </div>";

    }

}

?>

        </div>

    </div>

</div>

</body>
</html>
