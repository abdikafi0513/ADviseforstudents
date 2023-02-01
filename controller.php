
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advising Website</title>


  </head>

  <body>

    <h1>class planner</h1>

    <include href="views/table.html"></include>

    <h1>Page Token :</h1><br>

  </body>
</html>


<?php
//this is controller

class Controller
{
    private $_f3;
    private $_dbh;

    /**
     * Controller constructor.
     * @param $f3 object
     */
    public function __construct($f3)
    {
       // global $dataLayer;
        //global $Quarters;
        $this->_f3 = $f3;



    }




    /**
     * home page
     */
    function home()
    {
        echo '<h1>advising page112</h1>';
        $view = new Template();
        echo $view->render('views/home.php');
    }


    function planning()
    {

        $host  = "localhost";
        $dbUser = "abdikaf1_abdikaf";
        $dbPassword = "N{Bca-Oqw21h";
        $database  = "abdikaf1_web";


        $cnxn = mysqli_connect($host, $dbUser , $dbPassword, $database)

        or die("error connecting");

        $random = substr(md5(mt_rand()), 0, 6);
echo '<span style="font-size: 50px;"> ' . $random.  '</span>';
$_SESSION["random"] = $random;
        echo "<br>";


        $query = "SELECT * FROM `Planning` WHERE token = '$random'";
        $result = mysqli_query($cnxn, $query);

        $fall = $_POST["fall"];
        $winter = $_POST["winter"];
        $spring = $_POST["spring"];
        $summer = $_POST["summer"];
        $lastUpdate = date("Y-m-d h:i:s");
        $advisor = $_POST["advisor"];

        if (!empty($_POST)) {
            $select = "SELECT * FROM `Planning` WHERE token = '$random'";
            $result = mysqli_query($cnxn, $select);

            if (empty(mysqli_fetch_row($result))) {
                $sql = "INSERT INTO Planning (token, fall, winter, spring, summer, lastUpdate, advisor)
VALUES('$random','$fall','$winter','$spring','$summer','$lastUpdate', '$advisor')";

                mysqli_query($cnxn, $sql);
            } else {
                $sql = "UPDATE Planning SET fall = '$fall', winter = '$winter', spring  = '$spring',
                    summer= '$summer', lastUpdate = '$lastUpdate', advisor = '$advisor' WHERE token = '$random'";

                mysqli_query($cnxn, $sql);
            }
        }


        if (!empty($_POST)) {
            $_SESSION["fall"] = $fall;
            $_SESSION["winter"] = $winter;
            $_SESSION["spring"] = $spring;
            $_SESSION["summer"] = $summer;
            $_SESSION["lastUpdate"] = $lastUpdate;
            $_SESSION["advisor"] = $advisor;
            header("http://abdikafi.greenriverdev.com/advise-pro/planning?token=".$random);
        }


        $CurrentTime="Last modified: " .$lastUpdate;
        echo "Plan was succesfully modified";
        echo "<br>";

// To Show the last modification time.
        echo $CurrentTime;
        // echo "welcome welocme";
        echo "<br>";


    $date = "2023";
    $newdate = date("Y-m-d",strtotime ( '-2 years' , strtotime ( $date ) )) ;
    echo $newdate;


        $this->_f3->set('fall', isset($_POST['fall']) ? $_POST['fall'] : "");
        $this->_f3->set('winter', isset($_POST['winter']) ? $_POST['winter'] : "");
        $this->_f3->set('spring', isset($_POST['spring']) ? $_POST['spring'] : "");
        $this->_f3->set('summer', isset($_POST['summer']) ? $_POST['summer'] :
        $this->_f3->set('advisor', isset($_POST['advisor']) ? $_POST['advisor'] : ""));

        $view = new Template();
    echo $view->render('views/planning.php');

}

//used for saving data
function saved()
    {
        echo '<h1>successfully saved</h1>';
        $view = new Template();
        echo $view->render('views/saved.html');
    }
    //its used for editing data
function edit()
    {
        echo '<h1>successfully edited</h1>';
        $view = new Template();
        echo $view->render('views/edit.php');


 }
    function print()
    {
        echo '<h1>do you want to print?</h1>';
        $view = new Template();
        echo $view->render('views/planning.php');


    }

//this is admin where all admin things are managed
function admin()
    {

        echo '<h1>you are viewing admin</h1>';

    $dataLayer = $GLOBALS['dataLayer']->getMembers();
    $this->_f3->set('persons', $dataLayer);
        $view = new Template();
        echo $view->render('views/admin.php');


 }
    function login()
    {


        $host  = "localhost";
        $dbUser = "abdikaf1_abdikaf";
        $dbPassword = "N{Bca-Oqw21h";
        $database  = "abdikaf1_web";


        $cnxn = mysqli_connect($host, $dbUser , $dbPassword, $database)

        or die("error connecting");

            $username = $_POST["username"];
            $password = $_POST["password"];


            if ($username == "admin" && $password == "admin") {
                $_SESSION["admin"] = "admin";
                $this->_f3->reroute('admin');
            }
            else if ($username != "admin" && $password != "admin" && !empty($_POST)) {
                echo "<div id='error'> Incorrect username or password, Please try again! </div>";
            }

        $view = new Template();
        echo $view->render('views/login.php');


    }



}





