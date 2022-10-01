<?php session_start() ?>

<?php include('include/header.php') ?>

<body>
    <header class="navbar m-0 shadow navbar-expand-lg navbar-light bg-light stick" style="position: sticky; top: 0; z-index: 999;">
        <div class="container">
            <a class="navbar-brand t" href="#">E-commerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mt-0 mb-lg-0 ">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house me-2"></i>Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#category"><i class="fa-solid fa-list me-2"></i>Categories</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#"><i class="fa-solid fa-cart-shopping me-2"></i>Add to Cart</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active" href="#"><i class="fa-solid fa-basket-shopping me-2"></i>Orders</a>
                    </li>
                </ul>
                <div class="navbar-nav me-2 mb-2 mb-lg-0">
                    <div class="nav-item justify-content-end">
                        <?php

                        if (isset($_SESSION['id'])) { ?>

                            <a href="/logout.php" class="nav-link active m-3"><i class="fa-solid fa-user me-2"></i><?= $_SESSION['username'] ?></a>

                        <?php } else { ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link active m-3 dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <div class="m-2 ms-3 me-3">
                                        <a href="/login.php" style="color: #fff; list-style: none;">login </a> &ensp; <a href="/register.php" style="color: #fff; list-style: none;" class=" float-end"> Register</a>
                                    </div>
                                    <hr>
                                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                        <?php } ?>
                    </div>
                </div>
                <form class="d-flex" method="post">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </header>

    <?php '' // include 'carousel.php' 
    ?>

    <section>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" style="height: 30vh;" role="listbox">
                <div class="carousel-item active">
                    <img src="/Images//sunset.jpg" style="height: 50vh;" class="w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="/Images//lake.jpg" style="height: 50vh;" class="w-100 d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="/Images//1011-900x500.jpg" style="height: 50vh;" class="w-100 d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="category" class="container mx-auto col-12">
        <div class="row justify-content-center">
            <div class="col-2 m-2 card text-start">
                <img class="card-img-top p-2" style="width: 150px; height: 200px;" src="/Images//anlg-428-grey-grey-analogue-original-imagyzrh9gdh9dhc.webp" alt="Title">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
            <div class="col-2 m-2 card text-start">
                <img class="card-img-top p-2" style="width: 150px; height: 200px;" src="/Images//anlg-428-grey-grey-analogue-original-imagyzrh9gdh9dhc.webp" alt="Title">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
            <div class="col-2 m-2 card text-start">
                <img class="card-img-top p-2" style="width: 150px; height: 200px;" src="/Images//anlg-428-grey-grey-analogue-original-imagyzrh9gdh9dhc.webp" alt="Title">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
            <div class="col-2 m-2 card text-start">
                <img class="card-img-top p-2" style="width: 150px; height: 200px;" src="/Images//anlg-428-grey-grey-analogue-original-imagyzrh9gdh9dhc.webp" alt="Title">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
            <div class="col-2 m-2 card text-start">
                <img class="card-img-top p-2" style="width: 150px; height: 200px;" src="/Images//anlg-428-grey-grey-analogue-original-imagyzrh9gdh9dhc.webp" alt="Title">
                <hr>
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Punny headline</h1>
                <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>