<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TiendaofertaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tiendaoferta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tienda_id') ?>

    <?= $form->field($model, 'ingrediente_id') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'envase') ?>

    <?php // echo $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'medida') ?>

    <?php // echo $form->field($model, 'notas') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
