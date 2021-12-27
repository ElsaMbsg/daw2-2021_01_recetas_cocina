<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Recetaingrediente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recetaingrediente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'receta_id')->textInput() ?>

    <?= $form->field($model, 'ingrediente_id')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'medida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
