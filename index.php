<?php session_start() ?>

<?php include('include/header.php') ?>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;

}

.banner {
    width: 100%;
    height: 100vh;
    background: rgba(245, 245, 220, 1);
    /* background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(245, 245, 220)); */
    background-size: cover;
    background-position: center;
}


.content h1 {
    font-size: 70px;
    margin-top: 50px;
}

ul {
    font-weight: 40px;
    line-height: 25px;
    margin-bottom: 0;
    margin-left: 25px;
}

button {
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid black;
    background: transparent;
    color: black;
    cursor: pointer;
    z-index: 1;
    position: relative;
    overflow: hidden;
}

button span {
    background: white;
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
    color: white;
    border: 2px solid black;

}

button:hover {
    border: none;
}
</style>

<body>

    <?php include 'include/navbar.php' ?>


        <div class="banner">
        <div class="row">
            <div class="col-lg-4" style="position:absolute; top: 45%; left: 10%;">
                <h1>Design your Style</h1>
                <ul class="list-group">
                    <li>Design Your Thought</li>
                    <li>Develop Your Thought</li>
                    <li>Deliver Your Thought</li>
                </ul>
                <div>
                    <button type="button"><span></span>Design</button>
                    <button type="button"><span></span>Shop</button>
                </div>
            </div>
            <!-- <div class="col-lg-4" style="position: absolute; right: 23%; bottom: 0px;">
                <img src="./image/dress4.png" alt="">
            </div> -->
            <div class="col-lg-4" style="position: absolute; right: 0; top: 62px;">
                <img src="./image/dress3.png" alt="">
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