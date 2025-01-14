<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Receta;
use yii\widgets\LinkPager;

/**
 * RecetaSearch represents the model behind the search form of `app\models\Receta`.
 */
class RecetaSearch extends Receta
{
    public $q;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dificultad', 'comensales', 'tiempo_elaboracion', 'valoracion', 'usuario_id', 'aceptada'], 'integer'],
            [['nombre','q', 'descripcion', 'tipo_plato'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Receta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=> [
                'pageSize'=>6
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipo_plato', $this->tipo_plato]);

        return $dataProvider;
    }


    public function searchQ($params)
    {
        $query = Receta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=> [
                'pageSize'=>6
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->orFilterWhere(['like', 'nombre', $this->q])
        ->orFilterWhere(['like', 'descripcion', $this->q])
        ->orFilterWhere(['like', 'id', $this->q])
        ->orFilterWhere(['like', 'tipo_plato', $this->q])
        ->orFilterWhere(['like', 'dificultad', $this->q])
        ->orFilterWhere(['like', 'comensales', $this->q])
        ->orFilterWhere(['like', 'tiempo_elaboracion', $this->q])
        ->orFilterWhere(['like', 'valoracion', $this->q])
        ->orFilterWhere(['like', 'usuario_id', $this->q]);

        return $dataProvider;
    }

    public function searchID($params)
    {
        $query = Receta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        return $dataProvider;
    }
}
