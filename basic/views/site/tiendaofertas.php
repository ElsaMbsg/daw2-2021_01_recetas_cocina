<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\LinkPager;


$this->title = 'Aplicación Web de recetas';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <div class="w-100">
            <img class="" style="width: 15%" src="/daw2-2021_01_recetas_cocina/basic/web/images/ofertas.png">
        </div>
        <h1 class="display-4">Ofertas <?php if (isset($_GET["nametienda"])) echo $_GET["nametienda"]?></h1>

        <p class="lead">A continuación se muestra las ofertas y productos disponibles:</p>

        <div class="tiendaoferta-search">

            <?php $form = ActiveForm::begin([
                'action' => ['vertiendaofertas'],
                'method' => 'get',
            ]); ?>

            <?php echo "<details class='my-3 btn btn-verde w-100'><summary>Búsqueda Global</summary>";?>


            <?= $form->field($searchModel, 'q')->textInput(['placeholder' => "Busqueda de ofertas de la tienda", "value"])->label('') ?>
            <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary my-3']) ?>


            <?php
            echo "</details>";
            ?>

            <?php ActiveForm::end(); ?>


            <?php $form = ActiveForm::begin([
                'action' => ['vertiendaofertas'],
                'method' => 'get',
            ]); ?>


            <?php echo "<details class='my-3 btn btn-verde w-100'><summary>Búsqueda por tipo de Oferta-Ingrediente</summary>";?>

            <?= $form->field($searchModel, 'tipo')->dropDownList([
                '' => "Seleccione tipo de ingrediente...",
                'condimento' => 'Tipo Condimento',
                'vegano' => 'Tipo Vegano',
                'vegetariano' => 'Tipo Vegetariano',
                'salsa' => 'Tipo Salsa',
                'conserva' => 'Tipo Conserva',
                'bebida' => 'Tipo Bebida',
                'carne' => 'Tipo Carne',
                'pescado' => 'Tipo Pescado',
                'verdura' => 'Tipo Verdura',
                'pasta' => 'Tipo Pasta',
                'legumbre' => 'Tipo Legumbre',

            ])->label("") ?>
            <?= Html::submitButton('Buscar Tipo Oferta', ['class' => 'btn btn-primary my-3']) ?>


            <?php
            echo "</details>";
            ?>

            <?php ActiveForm::end(); ?>

        </div>

    </div>

    <div class="body-content">

        <div class="row">

            <?php //foreach ($model as $card){ ?>
            <?php foreach ($dataProvider->getModels() as $card)
            {
                //if ($card->tienda_id==$_GET['idtienda']){?>

            <div class="card col-lg-4 my-3 text-center">
                <h2 class="text-center"><?php  echo $card->descripcion ?></h2>

                <p><?php echo $card->envase;?></p>
                <p><?php echo $card->cantidad;echo $card->medida;?></p>
                <p><?php echo $card->notas;?></p>

                <p>
                    <a class="btn btn-verde" href="?r=site/vertiendaoferta&id=<?php echo $card->id?>">Ver oferta</a>
                </p>
            </div>

            <?php //}
            }?>


        </div>

        <div class="text-center w-100">
            <?= LinkPager::widget([
                'pagination' => $dataProvider->pagination,
        ])?>

        </div>

    </div>
</div>
