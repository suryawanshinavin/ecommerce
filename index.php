<?php session_start() ?>

<?php include('include/header.php') ?>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.banner {
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../image/home_screen_img.jpeg);
    background-size: cover;
    background-position: center;
}

.content {
    width: 100%;
    position: absolute;
    top: 30%;
    text-align: center;
    color: black;
}

.content h1 {
    font-size: 70px;
    margin-top: 50px;
}

.content p {
    margin: 20px auto;
    font-weight: 20px;
    line-height: 25px;
    margin-bottom: 0;
}

button {
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: black;
    cursor: pointer;
    z-index: 1;
    position: relative;
    overflow: hidden;
}

button span {
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;

}

button:hover span {
    width: 100%;
    color: rgb(22, 21, 21);
}

button:hover {
    border: none;
}
</style>

<body>
    <div class="banner">

        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-2 pb-2 " style="position: fixed; width:100%;">
            <div class="col-lg-2 mx-auto" style="text-align: center;">
                <a class="navbar-brand " href="#" style="font-family: 'Times New Roman', Times, serif;">Amoda
                    Style</a>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
                <ul class="d-flex my-auto" style="justify-content: space-evenly;">
                    <li>MEN</li>
                    <li>WOMEN</li>
                    <li>KID</li>
                    <li>Accessories</li>
                </ul>
            </div>
            <div class="col-lg-2 d-flex mx-auto" style="justify-content: space-evenly;">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="link text-black"><i class="fa-solid fa-user"></i></a>
                <a href="#" class="link text-black"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </nav>

        <div class="content" style="top: 45%;">
            <h1>Design your Home</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corporis eius quo! <br> utem explicabo
                animi exercitationem provident. Fuga.</p>
            <div>
                <button type="button"><span></span>WATCH MORE</button>
                <button type="button"><span></span>SUBSCRIBE</button>
            </div>
        </div>

    </div>

    <section style="display: none;">
        <div class="col-12">
            <h3 style="text-align: center; " class="mt-4 mb-3">HEADING</h3>
        </div>
        <div class="row my-4">
            <div class="col-6 my-2">
                <p class="px-4 py-2 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum in iusto rem
                    autem commodi ducimus
                    repellendus adipisci odio ad dolor nemo sunt, error minus, officia ex ullam quod officiis et.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsa, accusamus, corrupti
                    maiores sapiente perferendis quod voluptate, recusandae delectus in cum consequuntur est repellendus
                    vero enim ipsam. Ea, nostrum nisi.
                    Quaerat quo enim, nulla laborum reiciendis facilis maiores est suscipit laboriosam repellendus
                    accusantium, qui voluptatibus nisi numquam voluptas adipisci sequi, veritatis aperiam possimus.
                    Quisquam nobis, nisi nihil similique hic eos.
                    Totam officiis corporis voluptatibus eos? Quod blanditiis error temporibus dolorem voluptas
                    recusandae vel molestias quae rerum doloribus? Perspiciatis maxime mollitia ab labore in, quasi
                    blanditiis explicabo cupiditate magni expedita velit.</p>
            </div>
            <div class="col-6 " style="align-items: center;">
                <img src="image/Untitled design (1).png" style="max-width: 100%; height: auto;" alt="">
            </div>
        </div>

    </section>

    <?php include 'include/footer.php' ?>