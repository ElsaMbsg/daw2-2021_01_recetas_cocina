<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap5\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Recetas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Receta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Receta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_searchGlob', ['model' => $searchModel]); ?>
    <?php echo "<details class='my-3'><summary>Búsqueda Avanzada</summary>";
    echo $this->render('_search', ['model' => $searchModel]);
    echo "</details>";
    ?>

    <?= 
        GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table',
        ],
        'columns' => [
        
            'id',
            'nombre:ntext',
            'descripcion:ntext',
            'tipo_plato',
            'dificultad',
            //'comensales',
            //'tiempo_elaboracion',
            //'valoracion',
            //'usuario_id',
            //'aceptada',

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
