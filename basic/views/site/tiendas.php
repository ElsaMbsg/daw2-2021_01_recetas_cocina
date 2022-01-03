<?php

/* @var $this yii\web\View */

use app\models\Tienda;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap5\LinkPager;


$this->title = 'Aplicación Web de recetas';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <div class="w-100">
            <img class="" style="width: 15%" src="/daw2-2021_01_recetas_cocina/basic/web/images/tienda.png">
        </div>
        <h1 class="display-4">Tiendas</h1>

        <p class="lead">A continuación se muestra las tiendas disponibles :</p>

        <div class="ingrediente-search">

            <?php $form = ActiveForm::begin([
                'action' => ['vertiendas'],
                'method' => 'get',
            ]);

            echo "<details class='my-3 btn btn-verde w-100'><summary>Búsqueda Global</summary>";
            ?>

            <?= $form->field($searchModel, 'q')->textInput(['placeholder' => "Busqueda de tiendas", "value"])->label('') ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary  my-3 ']) ?>
            </div>

            <?php
            echo "</details>";
            ?>

            <?php ActiveForm::end(); ?>

            <?php

            $form = ActiveForm::begin([
                'action' => ['vertiendas'],
                'method' => 'get',
            ]);

            echo "<details class='my-3 btn btn-verde w-100'><summary>Búsqueda por población</summary>";

            $tiendas=Tienda::find()->all();

            //use yii\helpers\ArrayHelper;
            $listTiendas=ArrayHelper::map($tiendas,'poblacion', 'poblacion', 'provincia');

            echo $form->field($searchModel, 'pob')->dropDownList(
            $listTiendas,
            ['prompt'=>'Seleccione una tienda...']
            )->label('');?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary my-3 ']) ?>
            </div>

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
                if ($card->visible==1 && $card->activa==1){?>

            <div class="card col-lg-4 my-3 text-center">
                <h2 class="text-center"><?php echo $card->nombre ?></h2>

                <p><?php echo $card->domicilio;?></p>
                <p><?php echo $card->poblacion;?></p>
                <p><?php echo $card->provincia;?></p>

                <p>
                    <a class="btn btn-verde" href="?r=site/vertienda&id=<?php echo $card->id?>">Info Tienda</a>
                    <a class="btn btn-verde" href="?r=site/vertiendaofertas&TiendaofertaSearch%5Bidq%5D=<?php echo $card->id?>&nametienda=<?php echo $card->nombre?>">Ofertas Tienda</a>
                </p>
            </div>

            <?php }
            }?>


        </div>

        <div class="text-center w-100">
            <?= LinkPager::widget([
                'pagination' => $dataProvider->pagination,
        ])?>

        </div>

    </div>
</div>
