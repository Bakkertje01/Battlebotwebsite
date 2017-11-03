<?php
function redirect_to($new_location)
{
    header("Location: " . $new_location);
    exit;
}
if (isset($_SESSION['User_ID'])) {
    $query = "SELECT Websitefunctie FROM user WHERE User_ID = " . $_SESSION['User_ID'];
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if (!empty($result)) {

        $functie = $row["Websitefunctie"];
    }
}


if (($functie == 'Admin') || ($functie == 'Jury')){
} else {
    redirect_to("index.php");
}
if(!isset($_SESSION['User_ID']) || empty($_SESSION['User_ID'])) {
    redirect_to("index.php");
}

?>