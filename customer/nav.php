<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">My Vehicles</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>

            <form class="d-flex" method="GET">
                <input class="form-control me-sm-2" type="text" placeholder="Search" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>