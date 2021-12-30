<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tiendaoferta;

/**
 * TiendaofertaSearch represents the model behind the search form of `app\models\Tiendaoferta`.
 */
class TiendaofertaSearch extends Tiendaoferta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tienda_id', 'ingrediente_id'], 'integer'],
            [['descripcion', 'envase', 'medida', 'notas'], 'safe'],
            [['cantidad'], 'number'],
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
        $query = Tiendaoferta::find();

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
            'tienda_id' => $this->tienda_id,
            'ingrediente_id' => $this->ingrediente_id,
            'cantidad' => $this->cantidad,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'envase', $this->envase])
            ->andFilterWhere(['like', 'medida', $this->medida])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
