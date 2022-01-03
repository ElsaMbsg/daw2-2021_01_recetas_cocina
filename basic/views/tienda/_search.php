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

    <?= $form->field($model, 'provincia')->dropDownList([
         ''  => '',
        'A Coruña' => 'A Coruña',
        'Álava' => 'Álava',
        'Albacete' => 'Albacete',
        'Alicante' => 'Alicante',
        'Almería' => 'Almería',
        'Asturias' => 'Asturias',
        'Ávila' => 'Ávila',
        'Badajoz' => 'Badajoz',
        'Baleares' => 'Baleares',
        'Barcelona' => 'Barcelona',
        'Burgos' => 'Burgos',
        'Cáceres' => 'Cáceres',
        'Cádiz' => 'Cádiz',
        'Cantabria' => 'Cantabria',
        'Castellón' => 'Castellón',
        'Ciudad Real' => 'Ciudad Real',
        'Córdoba' => 'Córdoba',
        'Cuenca' => 'Cuenca',
        'Girona' => 'Girona',
        'Granada' => 'Granada',
        'Guadalajara' => 'Guadalajara',
        'Huelva' => 'Huelva',
        'Gipuzkoa' => 'Gipuzkoa',
        'Huesca' => 'Huesca',
        'Jaén' => 'Jaén',
        'La Rioja' => 'La Rioja',
        'Las Palmas' => 'Las Palmas',
        'León' => 'León',
        'Lérida' => 'Lérida',
        'Lugo' => 'Lugo',
        'Madrid' => 'Madrid',
        'Málaga' => 'Málaga',
        'Murcia' => 'Murcia',
        'Navarra' => 'Navarra',
        'Ourense' => 'Ourense',
        'Palencia' => 'Palencia',
        'Pontevedra' => 'Pontevedra',
        'Salamanca' => 'Salamanca',
        'Segovia' => 'Segovia',
        'Soria' => 'Soria',
        'Santa Cruz de Tenerife' => 'Santa Cruz de Tenerife',
        'Tarragona' => 'Tarragona',
        'Teruel' => 'Teruel',
        'Toledo' => 'Toledo',
        'Valencia' => 'Valencia',
        'Valladolid' => 'Valladolid',
        'Vizcaya' => 'Vizcaya',
        'Zamora' => 'Zamora',
        'Zaragoza' => 'Zaragoza',
    ]) ?>

    <?php  echo $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'activa')->dropDownList([
        ''  => '',
        0 => 'Inactiva',
        1 => 'Activa',

    ])->label("Estado de Tienda:") ?>

    <?= $form->field($model, 'visible')->dropDownList([
        ''  => '',
        0 => 'Invisible',
        1 => 'Visible',
    ])->label("Visibilidad Tienda:") ?>

    <div class="form-group text-center my-2">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
