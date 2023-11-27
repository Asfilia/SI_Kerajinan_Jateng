<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Link Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Link Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>Login Admin</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password Salah !</div>";
        }
    }
    ?>

    <section class="login py-3 pt-5 bg-light">
        <div class="container mb-3 pt-5">
            <div class="row gy-2 gx-3 align-items-center">
                <div class="col-lg-5">
                    <img src="assets/images/Navigation-amico.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 text-center py-5">
                    <h1 class="animate__animated animate__bounce animate_infinite">Login</h1>

                    <form action="cek_login.php" method="POST">
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" name="username" placeholder="Usename" class="inp px-3 mb-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="offset-1 col-lg-10 ">
                                <input type="password" name="password" placeholder="Password" class="inp px-3 mb-3">
                            </div>
                        </div>
                        <div class="form-row py-3 pt-5">
                            <div class="offset-1 col-lg-10 mr-3">
                                <button type="submit" class="btn1" value="LOGIN">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>