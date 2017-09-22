<?php
    /**
     * Created by PhpStorm.
     * User: Ernst-Jan
     * Date: 22-9-2017
     * Time: 10:22
     */

    // DATABASE CONNECTION

    define("DB_SERVER", "127.0.0.1");//database host
    define("DB_USER", "root");                //database login name
    define("DB_PASS", "");                //database login password
    define("DB_NAME", "battlebot");        //database name

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    //Test connection
    if (mysqli_connect_errno()) {
        die ("Database connection failed: " .
            mysqli_connect_error() .
            " (" . mysqli_connect_errno() . ")"
        );
    }
    else {
        //echo "connected";
    }
?>


<!--
<?php
/**
//Voorbeeld databaseconnectie maken

$db_name = "battlebot_db";

//assign the connection and selected database to a variable
$DBConnect = mysqli_connect("localhost", "root", "");
if ($DBConnect === FALSE)
{
    echo "<p>Unable to connect to the database server.</p>"
        . "<p>Error code " . mysqli_errno() . ": "
        . mysqli_error() . "</p>";
} else
{
    //echo "<h1>Databseconnectie is gelukt</h1>";

    //select the database
    $db = mysqli_select_db($DBConnect, $db_name);

    if ($db === FALSE)
    {
        echo "<p>Unable to connect to the database server.</p>"
            . "<p>Error code " . mysqli_errno($DBConnect) . ": "
            . mysqli_error($DBConnect) . "</p>";
        mysqli_close($DBConnect);
        $DBConnect = FALSE;
    }
}
 */
?>

