<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TiendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tienda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'domicilio') ?>

    <?= $form->field($model, 'poblacion') ?>

    <?= $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <?php // echo $form->field($model, 'activa') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
