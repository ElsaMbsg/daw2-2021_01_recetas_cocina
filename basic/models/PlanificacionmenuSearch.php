<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planificacionmenu;
use yii\widgets\LinkPager;

/**
 * PlanificacionmenuSearch represents the model behind the search form of `app\models\Planificacionmenu`.
 */
class PlanificacionmenuSearch extends Planificacionmenu
{
    public $q;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'planificacion_id', 'menu_id', 'numero_dia'], 'integer'],
            [['q'], 'safe'],
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
        $query = Planificacionmenu::find();

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
            'planificacion_id' => $this->planificacion_id,
            'menu_id' => $this->menu_id,
            'numero_dia' => $this->numero_dia,
        ]);

        return $dataProvider;
    }

    public function searchQ($params)
    {
        $query = Planificacionmenu::find();

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

        $query->orFilterWhere(['like', 'planificacion_id', $this->q])
            ->orFilterWhere(['like', 'menu_id', $this->q])
            ->orFilterWhere(['like', 'numero_dia', $this->q])
            ->orFilterWhere(['like', 'id', $this->q]);

        return $dataProvider;
    }

    public function searchID($params)
    {
        $query = Planificacionmenu::find();

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
