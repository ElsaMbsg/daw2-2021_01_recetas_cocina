<?php
use app\models\Planificacion;
use app\models\Menu;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planificacionmenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planificacionmenu-form">

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

    $planificaciones=Planificacion::find()->all();

    //use yii\helpers\ArrayHelper;
    $listPlanif=ArrayHelper::map($planificaciones,'id','nombre');

    echo $form->field($model, 'planificacion_id')->dropDownList(
        $listPlanif,
        ['prompt'=>'Seleccione una planificacion...']
    );

    ?>

    <?= $form->field($model, 'numero_dia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
