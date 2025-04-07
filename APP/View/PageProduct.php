<?php
use APP\Entity\Product;

/** @var Product $product */
?>
<div class="container  page_product bg-white shadow p-3 mb-5 bg-white rounded">
    <div class="d-flex">
        <div class="cover">
            <img src="/assets/img/seal/<?= $product->getCover()?>.jpg" width="100%" height="100%"  alt="">
        </div>
        <div class="characteristics_wrap">
            <div><h2><?= $product->getTitle()?></h2></div>
            <div >
                <h5 class="mb-2">Технические характеристики</h5>
                <ul class="p-0">
                    <li class="d-flex">
                        <div class="element">Тип:</div>
                        <div class="characteristics">Универсальные ЗПУ;</div>
                    </li>
                    <li class="d-flex">
                        <div class="element">Разрушающее усилие при растяжении замкнутой петли каната:</div>
                        <div class="characteristics">не менее 3,5 кН;</div>
                    </li>
                    <li class="d-flex">
                        <div class="element">Диаметр гибкого стержня (каната):</div>
                        <div class="characteristics"> 2,2 мм;</div>
                    </li>
                    <li class="d-flex">
                        <div class="element">Длина каната: </div>
                        <div class="characteristics">500 мм;</div>
                    </li>
                    <li class="d-flex">
                        <div class="element">Масса:</div>
                        <div class="characteristics"> не более 30 г;</div>
                    </li>
                    <li class="d-flex">
                        <div class="element">Усилие замыкания стержня в пломбе:</div>
                        <div class="characteristics">не более 60 Н;</div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="btn_wrap">
        <button type="button" class="btn  btn_base"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@fat">
            Заказать звонок
        </button>
    </div>

    <div>
        <div>
            <h5>Назначение, область применения</h5>

            <p>Запорно-пломбировочное устройство типа «ТП 350-01» предназначено для пломбирования специализированных железнодорожных цистерн с диаметром пломбировочного отверстия не менее 2,5 мм для перевозки сжиженных газов, кислот и других химических продуктов, и подлежит строгому учету. </p>
        </div>

        <div>
            <h5>Достоинства</h5>

            <p>
                Универсальность, малогабаритность. Высокая стойкость к криминальному воздействию. Удобство навешивания. Высокая защищенность конструкции от подделок.
                Гибкий стержень (канат) и все наружные элементы из стали и имеют антикоррозийные покрытия. Корпус выполнен из алюминиевого сплава.
                Технические решения, применяемые в конструкции ЗПУ «ТП 350-01», защищены патентами Российской Федерации на изобретение.
                Сертификат МВД России на криминалистическую устойчивость и заключение МЧС России на противопожарную безопасность.
            </p>
        </div>
    </div>
    <div>
        <embed src="/assets/certificate/<?= $product->getCertificate()?>.pdf" width="100%" height="100%" >
    </div>
</div>


