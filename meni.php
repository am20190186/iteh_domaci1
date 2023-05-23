<nav class="navigation navbar navbar-expand-md navbar-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <?php

            if($_SESSION['korisnik'] != null){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="ponuda.php">Ponuda</a>
                </li>

            <?php
                if($_SESSION['admin']){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="administracija.php">Administracija</a>
                    </li>
                        <?php
                }

                ?>
                <li class="nav-item">
                    <a class="nav-link" href="odjava.php">Logout</a>
                </li>
            <?php
            }else{
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>
