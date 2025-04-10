<!-- Добавить  data-bs-ride="carousel"-->
<div id="carouselExampleCaptions" class="carousel slide shadow mb-5 bg-white rounded ">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <!-- fixme не удачное фото для первого слайда Не видно стрелок влево вправо, поменяй местами 2 и 1 ok (карусель ещё в разработке)-->
        <div class="carousel-item active">
            <img src="../../../assets/img/carousel/background/washed_out/2.jpg" class="d-block w-100" alt="1">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel_seal_inner">
                    <a href="<?= \APP\Action\PageProduct::getUrl(3) ?>">
                        <img src="/assets/img/seal/without_background/tp1200-01.png" class="carousel_seal" alt="">
                        <h2 class="">ТП 1200-01</h2>
                    </a>
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="../../../assets/img/carousel/background/washed_out/1.jpg" class="d-block w-100" alt="2">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel_seal_inner">
                    <a href="<?= \APP\Action\PageProduct::getUrl(1) ?>">
                        <img src="/assets/img/seal/without_background/tp350-01.png" class="carousel_seal" alt="">
                        <h2 class="">ТП 350-01</h2>
                    </a>
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../../assets/img/carousel/background/washed_out/3.jpg" class="d-block w-100" alt="3">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel_seal_inner">
                    <a href="<?= \APP\Action\PageProduct::getUrl(2) ?>">
                        <img src="/assets/img/seal/without_background/tp40.png" class="carousel_seal" alt="">
                        <h2 class="">ТП 40</h2>
                    </a>
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../../assets/img/carousel/background/washed_out/4.jpg" class="d-block w-100" alt="4">
            <div class="carousel-caption d-none d-md-block">
                <div class="carousel_seal_inner">
                    <a href="<?= \APP\Action\PageProduct::getUrl(4) ?>">
                        <img src="/assets/img/seal/without_background/tp2800-02.png" class="carousel_seal" alt="">
                        <h2 class="">ТП 2800-02</h2>
                    </a>
                    <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>
