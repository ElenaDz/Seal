<?php
if (_isUrl(\APP\Action\Index::getUrl()))
{
    // временно закомментировал, чтобы увидеть на главной
    //return;
}
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
            <li class="breadcrumb-item active" aria-current="page">Данные</li>
        </ol>
    </nav>
</div>
