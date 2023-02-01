///UNFINISHED
///UNFINISHED
///UNFINISHED
///UNFINISHED
///UNFINISHED

<?php
session_start();
//include('controller.php');
$dbHost = "host=abdikafi.greenriverdev.com";
$dbUser = "abdikaf1_abdikaf";
$dbPassword = "N{Bca-Oqw21h";
$dbName = "abdikaf1_web;host=abdikafi.greenriverdev.com";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
  echo "Yay!!!22";
} catch(PDOException $e) {
  echo "DB Connection Failed: " . $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Edit & Update data into database using PHP PDO</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit & Update data into database
                            <a href="planning" class="btn btn-danger float-end">BACK</a>
                            
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['token']))
                        {
                            $student_token = $_GET['token'];

                            $query = "SELECT * FROM Planning WHERE token=:stud_token LIMIT 1";
                            $statement = $conn->prepare($query);
                            $data = [':stud_token' => $student_token];
                            $statement->execute($data);

                            $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        }
                        ?>
                        <form action="controller.php" method="POST">

                            <div id="rows">  

<div class="quarter">
    <label for="fall">FALL:</label><br>
    <textarea id="fall" name="fall" rows="6">
    
    </textarea>
    
 <div class="quarter">
    <label for="spring">SPRING:</label><br>
    <textarea id="spring" name="spring" rows="6">
        
    </textarea>
    
    <div class="quarter">
    <label for="spring">WINTER:</label><br>
    <textarea id="winter" name="winter" rows="6">
       
    </textarea>
    

    <div class="quarter">
    <label for="summer">SUMMER:</label><br>
    <textarea id="summer" name="summer" rows="5">
       
    </textarea>
    

<br>
<label for="advisor">Advisor Name:</label>
<br>
<input type="text" id="advisor" name="advisor"><br><br>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>