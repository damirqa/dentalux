<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'brandLabel' => Html::img('@web/img/logo.svg', ['alt'=>Yii::$app->name, 'class' => 'logo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Услуги', 'url' => ['/site/about']],
            ['label' => 'Специалисты', 'url' => ['/site/contact']],
            ['label' => 'Акции', 'url' => ['/site/contact']],
            ['label' => 'Отзывы', 'url' => ['/site/contact']],
            ['label' => 'Пациентам', 'url' => ['/site/contact']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
</div>

<footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12">
                <div><a href="/pages/contacts.php">г. Уфа, Чернышевского 7</a></div>
                <div><a href="tel:+73472169090">+7 (347) 216 - 90 - 90</a></div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div><a href="/pages/contacts.php">г. Уфа, Проспект Октября 126/6</a></div>
                <div><a href="tel:+73472359202">+7 (347) 235 - 92 - 02</a></div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div>Дружите с нами:</div>
                <span><a href="https://vk.com/dentalux_ufa"><i class="fab fa-vk"></i></a></span>
                <span><a href=""><i class="fab fa-whatsapp"></i></a></span>
                <span><a href="https://www.instagram.com/dentalux_ufa/"><i class="fab fa-instagram"></i></a></span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/directions/therapeuticdentistry.php">Терапия</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/directions/surgicaldentistry.php">Хирургия</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/directions/orthopedics.php">Ортопедия</a></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/directions/periodontology.php">Пародонтология</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/directions/orthodontics.php">Ортодонтия</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="">Полный прейскурант</a></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/staff.php">Специалисты</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/reviews.php">Отзывы</a></div>
            <div class="col-md-4 col-sm-6 col-12"><a href="/pages/patients.php">Пациентам</a></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
