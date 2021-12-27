<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planificacionmenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planificacionmenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'planificacion_id')->textInput() ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'numero_dia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
