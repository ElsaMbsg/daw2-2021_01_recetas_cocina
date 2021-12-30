<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tiendaoferta */

$this->title = Yii::t('app', 'Create Tiendaoferta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tiendaofertas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiendaoferta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
