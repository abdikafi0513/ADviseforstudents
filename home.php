<?php
session_start();
require("creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)

or die("error connectinggg");
$random = substr(md5(mt_rand()), 0, 6);
echo '<span style="font-size: 50px;"> ' . $random.  '</span>';
$_SESSION["random"] = $random;
echo "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advise-It</title>
    <link rel="stylesheet" href="styles/styles.css">



</head>
<body>
<div id="advise">
    <h1>Advise-It11</h1>
    <div id="button">
        <a href="planning?token=<?php echo $_SESSION["{{@person.token}}"];?>"><button id="plan">Create New Plan</button></a>
<!--        {{@persons}}-->
    </div>
</div>



<a href="login"><button id="click" type="submit">Administrator llogin</button>
    </button></a>
<!--<a class="nav-item nav-link" href="adminLogin">Adminn page</a>-->

</body>
</html>