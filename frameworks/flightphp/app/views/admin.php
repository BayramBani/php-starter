<?php
session_start();
if (isset($_POST["pass"])) {
    if ($_POST["pass"] == "123") {
        $_SESSION["access"] = "true";
    } else {
        $_SESSION["access"] = "false";
    }
}
if (isset($_POST["status"])) {
    if ($_POST["status"] == "disconnect") {
        $_SESSION["access"] = "false";
    }
}

if (isset($_SESSION["access"]) && $_SESSION["access"] == "true") {
    ?>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Aglae Artisan </a>
            <form class="d-flex" method="post">
                <input name="status" type="hidden" value="disconnect">
                <button class="btn btn-outline-primary" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4">Contacts</h1>
                <hr/>
            </div>
            <div class="col-12 mt-2">
                <!--<table id="myTable"></table>-->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Date</th>
                        <th>IP</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php

} else {
    ?>
    <main class="bg-dark">
        <div class="container ">
            <div class="row align-items-center" style="height: 95vh">
                <div class="col-12 col-md-4 offset-md-4">
                    <form action="" method="post">
                        <div class="mb-3">
                            <h1 class="display-4 text-center text-white">Aglae Artisan</h1>
                        </div>
                        <div class="mb-3">
                            <input name="user" type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input name="pass" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row align-items-center" style="height: 5vh">
                <div class="col text-center">
                    <b class="text-white">Powred By </b><a href="https://universalwebsoft.com/"
                                                           class="text-center text-danger"
                                                           target="_blank"> Universal Web Soft</a>
                </div>
            </div>
        </div>
    </main>
    <?php
}
?>
