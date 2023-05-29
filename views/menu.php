<?php 

    require_once('../assets.php');
?>


    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><img width="100" height="80" style="width: 100px;height: 60px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown" style="width: 120px;"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Dropdown </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a>
                            <div class="nav-item dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#">Dropdown </a>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="" style="width: 30.9531px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="" style="width: 58.578px;">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php" style="width: 24.625px;">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="../model/login/salir.php">Salir</a></li>
                </ul>
            </div>
        </div>
    </nav>
