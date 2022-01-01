<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tienda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tienda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'domicilio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poblacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'activa')->textInput() ?>

    <?= $form->field($model, 'visible')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
