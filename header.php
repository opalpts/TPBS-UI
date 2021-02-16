<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TPBS</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel/dist/assets/owl.theme.default.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="OwlCarousel/dist/owl.carousel.min.js" defer></script>
    <script type="text/javascript" src="jquery/jquery-3.5.1.min.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php require_once('sidemenu.php'); ?>
        <section id="main-content">
            <div id="head" style="display: block;">
                <div class="container-fluid header-menu fixed-top" style="margin-left: 215px;">
                    <div class="row">
                        <div class="col-2 hamburger-menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>

                        <div class="col-8 text-right">
                            <div class="menu-top">
                                <div class="row col-12">
                                    <div class="col-4">
                                        <img src="image/logo_podcast.png" style="width: 160px;" />
                                    </div>
                                    <div class="col-8" style="text-align: right;">
                                        <ul class="nav">
                                            <li class="nav-item ">
                                                <a class="nav-link" href="#">หน้าหลัก</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="#">รายการ</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link active" href="#">ผู้จัดรายการ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2 p-0">
                            <div class="menu-top-right">
                                <div class="d-flex justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                                        </li>
                                        <li class="nav-item ">
                                            <div class="nav-link px-0" href="#"><button class="login">เข้าสู่ระบบ</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </section> -->
    </div>
</body>

</html>