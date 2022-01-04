<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Receta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Receta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tipo_plato')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificultad')->textInput() ?>

    <?= $form->field($model, 'comensales')->textInput() ?>

    <?= $form->field($model, 'tiempo_elaboracion')->textInput() ?>

    <?= $form->field($model, 'valoracion')->textInput() ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'aceptada')->textInput() ?>

    <?= $form->field($model, 'imagen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
