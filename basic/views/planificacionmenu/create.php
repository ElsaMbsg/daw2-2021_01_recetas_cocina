<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planificacionmenu */

$this->title = Yii::t('app', 'Create Planificacionmenu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Planificacionmenus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planificacionmenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
