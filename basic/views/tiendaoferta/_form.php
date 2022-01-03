<?php

use app\models\Ingrediente;
use app\models\Tienda;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Tiendaoferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tiendaoferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

    $tiendas=Tienda::find()->all();

    //use yii\helpers\ArrayHelper;
    $listTiendas=ArrayHelper::map($tiendas,'id','nombre', 'provincia');

    echo $form->field($model, 'tienda_id')->dropDownList(
        $listTiendas,
        ['prompt'=>'Seleccione una tienda...']
    );

    ?>

    <?php

    $ingredientes=Ingrediente::find()->all();

    //use yii\helpers\ArrayHelper;
    $listIngredientes=ArrayHelper::map($ingredientes,'id','nombre');

    echo $form->field($model, 'ingrediente_id')->dropDownList(
        $listIngredientes,
        ['prompt'=>'Seleccione un ingrediente...']
    );
    ?>

    <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'envase')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <?= $form->field($model, 'medida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Actualizar'), ['class' => 'btn btn-verde my-3 w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
