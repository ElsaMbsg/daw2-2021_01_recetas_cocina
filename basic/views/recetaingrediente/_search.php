<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecetaingredienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recetaingrediente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'receta_id') ?>

    <?= $form->field($model, 'ingrediente_id') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'medida') ?>

    <?php  echo $form->field($model, 'notas') ?>

    <div class="form-group text-center my-3">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary ']) ?>
        <?= Html::resetButton(Yii::t('app', 'Resetear'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
