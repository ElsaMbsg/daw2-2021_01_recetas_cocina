<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecetaPasoImagen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receta-paso-imagen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'receta_paso_id')->textInput() ?>

    <?= $form->field($model, 'orden')->textInput() ?>

    <?= $form->field($model, 'imagen')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
