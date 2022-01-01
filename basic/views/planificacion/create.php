<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planificacion */

$this->title = Yii::t('app', 'Create Planificacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Planificacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planificacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
