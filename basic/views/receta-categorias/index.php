<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecetaCategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recetas y sus categorias asociadas';
$this->params['breadcrumbs'][] = $this->title;
?> 
<div class="receta-categorias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        Html::a('Crear Receta Categorias', ['create'], ['class' => 'btn btn-success']) 
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if (isset($_GET['msg'])){
        echo '<p class="btn btn-danger w-100">';
        echo $_GET['msg'];
        echo '</p>';
    }?>
    <?=  
    
        GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table',
        ],
        'columns' => [
        
            'id',
            'nombre:ntext',
            // 'descripcion:ntext',
            //'tipo_plato',
            //'dificultad',
            //'comensales',
            //'tiempo_elaboracion',
            //'valoracion',
            //'usuario_id',
           // 'aceptada',
            //'imagen',

            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Añadir categoria', 
                'template' => '{update}',
                'urlCreator' => function ($action, $model, $key, $index)
                {
                    if ($action === 'update')
                    {
                        $url ='index.php?r=receta-categorias%2Fupdate&id='.$model->id;
                        return $url;
                    }
                },
            ],

        ],
            'layout' => "\n{items}\n",
    ]); 
    /*GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'receta_id',
            'categoria_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>
Pulse en el icono del lapiz para ver las categorias asociadas y añadir nuevas o eliminarlas.

</div>
