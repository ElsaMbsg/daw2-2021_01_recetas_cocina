<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Recetaingrediente;

/**
 * RecetaingredienteSearch represents the model behind the search form of `app\models\Recetaingrediente`.
 */
class RecetaingredienteSearch extends Recetaingrediente
{
    public $q;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'receta_id', 'ingrediente_id'], 'integer'],
            [['cantidad'], 'number'],
            [['medida','q', 'notas'], 'safe'],
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
        $query = Recetaingrediente::find();

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
            'receta_id' => $this->receta_id,
            'ingrediente_id' => $this->ingrediente_id,
            'cantidad' => $this->cantidad,
        ]);

        $query->andFilterWhere(['like', 'medida', $this->medida])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchQ($params)
    {
        $query = Recetaingrediente::find();

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

        $query->orFilterWhere(['like', 'medida', $this->q])
            ->orFilterWhere(['like', 'notas', $this->q])
            ->orFilterWhere(['like', 'id', $this->q])
            ->orFilterWhere(['like', 'receta_id', $this->q])
            ->orFilterWhere(['like', 'ingrediente_id', $this->q])
            ->orFilterWhere(['like', 'cantidad', $this->q]);

        return $dataProvider;
    }
}
