<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RecetaPasoImagen */

$this->title = 'Create Receta Paso Imagen';
$this->params['breadcrumbs'][] = ['label' => 'Receta Paso Imagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receta-paso-imagen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
