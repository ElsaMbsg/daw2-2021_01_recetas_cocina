<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100 " style="background-color: rgba(209,245,228,0.53);">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name="Aplicación de recetas", 'style' => 'height: 2rem; width: auto; top: 15px; left: 50px; position: absolute;']),
        //'brandLabel' => 'Aplicación de Recetas',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $navItem=[
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        
        
        Yii::$app->user->isGuest ? 
        (
            [
                'label' => 'Catalogo',
                'items' => [
                    ['label' => 'Ingredientes', 'url' => ['/site/veringredientes']],
                    ['label' => 'Recetas', 'url' => ['/site/verrecetas']],
                    ['label' => 'Menus', 'url' => ['/site/vermenus']],
                    ['label' => 'Tiendas', 'url' => ['/site/vertiendas']],
                    ['label' => '...', 'url' => '#'],
                ],
            ]
            
        ) 
        : 
        (
            
            [
                'label' => 'Mantenimiento',
                'items' => [
                     ['label' => 'Ingredientes', 'url' => ['/ingrediente/index']],
                     ['label' => 'Recetas-Ingredientes', 'url' => ['/recetaingrediente/index']],
                     ['label' => 'Recetas', 'url' => ['/Receta/index']],
                     ['label' => 'Menus-Recetas', 'url' => ['/menureceta/index']],
                     ['label' => 'Planificaciones Menus', 'url' => ['/planificacionmenu/index']],
                     ['label' => 'Planificaciones', 'url' => ['/planificacion/index']],
                     ['label' => 'Menus', 'url' => ['/menu/index']],
                     ['label' => 'Tiendas', 'url' => ['/tienda/index']],
                     ['label' => 'Tiendas-Ofertas', 'url' => ['/tiendaoferta/index']],
                     ['label' => 'Usuarios', 'url' => ['/usuario/index']],
                ],
            ]
       

        )
        ,
    ];
       if(Yii::$app->user->isGuest){
        
            array_push($navItem, ['label' => 'Login', 'url' => ['/site/login']], ['label' => 'Registro', 'url' => ['/site/register']]);
        }
        else{
            array_push($navItem,'<li>'. Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']). Html::submitButton('Logout (' . Yii::$app->user->identity->nombre . ')',['class' => 'btn btn-link logout']). Html::endForm(). '</li>');
            }

            
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => $navItem
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 btn-verde" >
    <div class="container">
        <p class="text-center">&copy; Daw2 -- 4ºGIISI -- USAL  <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
