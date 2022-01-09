<?php

namespace app\controllers;
use Yii;
use app\models\RecetaCategorias;
use app\models\RecetaCategoriasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\Receta;
use app\models\Categorias;
use app\models\RecetaSearch;

/**
 * RecetaCategoriasController implements the CRUD actions for RecetaCategorias model.
 */
class RecetaCategoriasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all RecetaCategorias models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        $searchModel = new RecetaSearch();
       
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        /*$searchModel = new RecetaCategoriasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
    }

    /**
     * Displays a single RecetaCategorias model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RecetaCategorias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($categoria_id,$receta_id)
    {
        $model = new RecetaCategorias();

        $model->categoria_id=$categoria_id;
        $model->receta_id=$receta_id;
        $model->save();
        return $this->redirect(['update','id'=>$receta_id]);
    }

    /**
     * Updates an existing RecetaCategorias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        
            
        $model = Receta::findOne($id);
        $idusuario=$model->usuario_id;
        if ($idusuario == Yii::$app->user->identity->id || 
        Yii::$app->user->identity->rol == 'A' || 
        Yii::$app->user->identity->rol == 'S' ) 
        {

        //Buscamos todas las categorias
        $allcategorias=Categorias::find()->all();
        //Buscamos las relaciones que tiene receta con categorias
        $filterall=RecetaCategorias::findAll(['receta_id'=>$id]); 
        $idfilterall=ArrayHelper::map($filterall,'categoria_id','categoria_id');
        $categoriaReceta=array();
        $arrayCategorias=array();
        foreach($allcategorias as $categoria){
            if(isset($idfilterall[$categoria->id])){
                $categoriaReceta[]=$categoria;
            }else{
                $arrayCategorias[]=$categoria; 
            }
        }
        /*if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }*/

        return $this->render('update', [
            'model' => $model,
            'categoriaReceta'=>$categoriaReceta,
            'arrayCategorias'=>$arrayCategorias,
        ]);
    }//if
    else
        {
            return $this->redirect(['index','msg'=>"No puedes añadir la categoria a esta receta"]);
        }
    }

    /**
     * Deletes an existing RecetaCategorias model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($categoria_id,$receta_id)
    {
        RecetaCategorias::findOne(['categoria_id'=>$categoria_id,'receta_id'=>$receta_id])->delete();

        return $this->redirect(['update','id'=>$receta_id]);
    }

    /**
     * Finds the RecetaCategorias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return RecetaCategorias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RecetaCategorias::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
