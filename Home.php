<?php

$username=$_POST["username"];
$password=$_POST["password"];

if($username!="rejanur" || $password!="prime1234")
{
   echo "<script> alert('Wrong UserName Or Password!'); window.location.href='index.html'; </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Agro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 5px 0;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .info {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .info div {
            flex: 1;
            padding: 10px;
            /*background-color: #f2f2f2;*/
            border: 1px solid #ccc;
        }
        .card-menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            width: 200px;
            height: 100px;
            margin: 10px;
            padding: 20px !important;
            text-align: center;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 100px !important;
        }
        .card i {
            font-size: 24px;
            margin-bottom: 10px;
        }
        h1 {
  font-family: 'Poppins', sans-serif !important;
  font-size: 60px !important;
  background-image: linear-gradient(43deg, #4158D0 15%, #C850C0 25%, #FFCC70 100%) !important;
  -webkit-background-clip: text !important;
  color: transparent !important;
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1>Prime Agro</h1>
    </header>
    <div class="content">
        <div class="info">
            <div class="btn btn-primary">Net Balance <span class="badge">120 /-</span> </div>
            <div class="btn btn-info">Expense <span class="badge">220 /-</span></div>
            <div class="btn btn-success">Income <span class="badge">150 /-</span></div>
        </div>
        <div class="card-menu">
            <div class="card btn btn-info" >
                <i class="fa fa-sticky-note"></i>
                <p>Note</p>
            </div>
            <div class="card btn btn-success">
                <i class="fa fa-leaf"></i>
                <p>Agriculture</p>
            </div>
            <div class="card btn btn-primary">
                <i class="fa fa-cow"></i>
                <p>Dairy Firm</p>
            </div>
            <div class="card btn btn-warning">
                <i class="fa fa-calculator"></i>
                <p>Accounts</p>
            </div>
            <div class="card  btn btn-info">
                <i class="fa fa-fish"></i>
                <p>Fish - Pending</p>
            </div>
            <div class="card  btn btn-success">
                <i class="fa fa-chart-line"></i>
                <p>Profit Loss</p>
            </div>
            <div class="card btn btn-primary">
                <i class="fa fa-globe"></i>
                <p>International Export</p>
            </div>
            <div class="card btn btn-warning">
                <i class="fa fa-tasks"></i>
                <p>Projects</p>
            </div>
            <div class="card btn btn-info">
                <i class="fa fa-cloud"></i>
                <p>Weather Forecast</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Prime Agro. All rights reserved.</p>
    </footer>
</body>
</html>
