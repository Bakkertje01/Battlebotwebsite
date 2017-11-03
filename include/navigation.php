<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.php"><img src="images/logobattlebot2.png" class="img-responsive" alt="logo"></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <?php

            if (isset($_SESSION['User_ID'])) {
                echo '<a href="logout.php"><i class="fa fa-user"></i> Logout</a>';

            } else {
                echo '<a href="login.php"><i class="fa fa-user"></i> Login</a>';
            }

            ?>

        </li>
    </ul>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">


        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>

            <li>
                <a href="teams.php"><i class="fa fa-fw fa-star"></i> Teams</a>
            </li>

            <li>
                <a href="regels.php"><i class="fa fa-fw fa-newspaper-o"></i> Regels</a>
            </li>

            <li>
                <a href="standen.php"><i class="fa fa-fw fa-table"></i> Uitslagen</a>
            </li>


            <?php

            if (isset($_SESSION['User_ID'])) {
                $query = "SELECT Websitefunctie FROM user WHERE User_ID = " . $_SESSION['User_ID'];
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                if (!empty($result)) {

                    $functie = $row["Websitefunctie"];

                    switch ($functie) {
                        case "Jury":
                            echo '<li>
                                <a href="scoreboard.php"><i class="fa fa-fw fa-flag-checkered"></i> Punten Doorvoeren</a>
                             </li>';
                            break;
                        case "Team":
                            echo '<li>
                                    <a href="controller.php"><i class="fa fa-fw fa-gamepad"></i> Besturing</a>
                                  </li>';
                            break;
                        case "Admin":
                            echo '<li>
                                    <a href="scoreboard.php"><i class="fa fa-fw fa-flag-checkered"></i> Punten Doorvoeren</a>
                                 </li>
                                  <li>
                                    <a href="controller.php"><i class="fa fa-fw fa-gamepad"></i> Besturing</a>
                                  </li>';
                            break;
                        default:
                            echo "";
                    }

                   // unset($_POST);

                }
            }

            ?>

            <li>
                <a href="log.php"><i class="fa fa-fw fa-newspaper-o"></i> Logbestand</a>
            </li>

            <li>
                <a href="signUp.php"><i class="fa fa-fw fa-newspaper-o"></i> Registreer voor test</a>
            </li>

            <!--
					<li>
						<a href="tables.html"><i class="fa fa-fw fa-newspaper-o"></i> Onderwerp</a>
					</li>
			-->
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>