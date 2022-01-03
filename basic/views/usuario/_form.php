<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rol')->dropDownList([
        "C" => 'Colaborador',
        "A" => 'Administrador',
        "T" => 'Tienda',
        "S" => 'Sistema',
    ])->label("Rol") ?>

    <?= $form->field($model, 'aceptado')->dropDownList([
        0 => 'Pendiente',
        1 => 'Aceptado',
        2 => 'No aceptado',
    ])->label("Aceptado") ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
