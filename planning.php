
<?php
session_start();
require("creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)
or die("Oops! error connecting");
// echo "welcome welocme";
$date = "2021-01-11";
$newdate = date("Y-m-d", strtotime('-1 day', strtotime($date)));
echo $newdate;


?>

<link rel="stylesheet" href="styless/styless.css">

<div id="token">
</div>
<br>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div>
        <div class="navbar-nav">
            <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="http://abdikafi.greenriverdev.com/advise-pro/"><h1>Home</h1></a>


        </div>
</nav>
<h1>Link to veiw/edit</h1>

<form action="#" method="post">
    <a href="http://abdikafi.greenriverdev.com/advise-pro/planning?token=">Edit/View </a>
    <button id="previousyear">prev Years</button>
    <div id="rows">


        <div class="quarter">
            <label for="fall">Fall</label><br>
            <textarea id="fall" name="fall" rows="5">
    </textarea>
            <br>
        </div>


        <div class="quarter">
            <label for="winter">Winter</label><br>
            <textarea id="winter" name="winter" rows="5">

    </textarea>
            <br>
        </div>


        <div class="quarter">
            <label for="spring">Spring</label><br>
            <textarea id="spring" name="spring" rows="5">

    </textarea>
            <br>
        </div>


        <div class="quarter">
            <label for="summer">Summer</label><br>
            <textarea id="summer" name="summer" rows="5">

   </textarea>
            <br>
        </div>

        <div id="quarter">
            <label for="advisor">Advisor:</label><br>
            <textarea id="advisor" name="advisor">

        </textarea>
        </div>




    <div id="savePlan">
        <div id="button">
            <a href="save"><button id="plan"> <h1>Save</h1></button></a>
        </div>
    </div>


    <div id="print">
        <button onclick="window.print()" id="print2" type="submit" > <h1>Print</h1></button>
    </div>
    </div>

</form>
<button id="previousyear">next Years</button>
<div id="button">
    <a href="login"><button id="plan"><h1>Admin Page</h1></button></a>
<!--    <a href="adminLogin"><button id="plan"><h1>Admin Page</h1></button></a>-->

</div>


<?php



