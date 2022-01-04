<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecetaPasoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Receta Pasos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Receta-paso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Receta Paso'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'receta_id',
            'orden',
            'descripcion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
            
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Imágenes',
                'template' => '{view}',

                'urlCreator' => function ($action, $model, $key, $index)
                {
                    if ($action === 'view')
                    {
                        $url ='index.php?r=receta-paso-imagen%2Findex&RecetaPasoImagenSearch%5Breceta_paso_id%5D='.$model->id;
                        return $url;
                    }
                },
                ],
        ],
    ]); ?>


</div>
