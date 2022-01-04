<?php
use app\models\Menu;
use app\models\Receta;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Menureceta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menureceta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

    $menus=Menu::find()->all();

    //use yii\helpers\ArrayHelper;
    $listMenus=ArrayHelper::map($menus,'id','titulo');

    echo $form->field($model, 'menu_id')->dropDownList(
        $listMenus,
        ['prompt'=>'Seleccione un menú...']
    );

    ?>

    <?php

    $recetas=Receta::find()->all();

    //use yii\helpers\ArrayHelper;
    $listRecetas=ArrayHelper::map($recetas,'id','nombre');

    echo $form->field($model, 'receta_id')->dropDownList(
        $listRecetas,
        ['prompt'=>'Seleccione una receta...']
    );

    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
