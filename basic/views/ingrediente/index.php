<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IngredienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ingredientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingrediente-index">

    <h1 class="text-center w-100 rounded btn-verde" ><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Ingrediente'), ['create'], ['class' => 'btn btn-verde mt-3 ']) ?>
    </p>

    <?php echo $this->render('_searchGlob', ['model' => $searchModel]); ?>


    <?=
        GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table',
        ],
        'columns' => [


            'id',
            'nombre',
            'descripcion:ntext',
            'datos_nutricion:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
            'layout' => "\n{items}\n",

    ]); ?>

    <div class="text-center w-100">
        <?= LinkPager::widget([
            'pagination' => $dataProvider->pagination,
        ])?>

    </div>


</div>
