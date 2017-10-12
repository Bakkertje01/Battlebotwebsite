<?php
include "include/session.php";
include 'include/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include 'include/head.php';
    ?>

</head>
<body>
<?php
include 'include/navigation.php';
// include 'includes/db_connection.php';
?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <?php
        $tel = 1;
        $DBname = "battlebot";
        $DBtable = "battlebot";
        $DB = mysqli_select_db($connection,$DBname);
        echo($DB === false)? "could not select database" : NULL;
        $DBcommand = "SELECT * FROM $DBtable ORDER BY Totaalpunten DESC ";
        $DBresult = mysqli_query($connection, $DBcommand);
        echo ($DBresult=== false) ? "could not execute query" : NULL;
        ?>
        <thead>
        <tr>
            <th>Plaats</th>
            <th>Team</th>
            <th>Punten</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($DBresult)) {
            echo "<tr>";
            echo "<td>$tel</td>";
            echo "<td>{$row['Botnaam']}</td>";
            echo "<td>{$row['Totaalpunten']}</td>";
            echo "</tr>";
            $tel++;
        }
        ?>
        </tbody>
    </table>
</div>

</div>
</div>
</div>
</body>
</html>