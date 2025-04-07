<div>
    <div class="container">
        <div class="list_product">
            <!-- fixme не совпадает имя класса блока и имя файла -->
            <div class="card-group">
                <!-- fixme вынеси карточку в отельный шаблон делать цикл -->

                <?=
                \SYS\Views::get(
                    __DIR__.'/CardProduct.php'
                );
                ?>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <a href="<?= \APP\Action\PageProduct::getUrl(1)?>">
                    <img src="/assets/img/seal/tp350-01.jpg" class="card-img-top" alt="tp350-01">
                    <div class="card-body">
                        <h5 class="card-title">ТП 350-01</h5>
                        <p class="card-text">Описание.</p>
                    </div>
                    </a>
                </div>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <img src="/assets/img/seal/tp40.jpg" class="card-img-top" alt="tp40">
                    <div class="card-body">
                        <h5 class="card-title">ТП 40 Закрутка</h5>
                        <p class="card-text">Описание</p>
                    </div>
                </div>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <img src="/assets/img/seal/tp1200-01.jpg" class="card-img-top" alt="tp1200-01">
                    <div class="card-body">
                        <h5 class="card-title">ТП 1200-01</h5>
                        <p class="card-text">Описание</p>
                    </div>
                </div>

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <img src="/assets/img/seal/tp2800-02.jpg" class="card-img-top" alt="tp2800-02">
                    <div class="card-body">
                        <h5 class="card-title">ТП 2800-02</h5>
                        <p class="card-text">Описание</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

