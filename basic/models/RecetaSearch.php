<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\receta;

/**
 * RecetaSearch represents the model behind the search form of `app\models\receta`.
 */
class RecetaSearch extends receta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dificultad', 'comensales', 'tiempo_elaboracion', 'valoracion', 'usuario_id', 'aceptada'], 'integer'],
            [['nombre', 'descripcion', 'tipo_plato'], 'safe'],
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
        $query = receta::find();

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
            'dificultad' => $this->dificultad,
            'comensales' => $this->comensales,
            'tiempo_elaboracion' => $this->tiempo_elaboracion,
            'valoracion' => $this->valoracion,
            'usuario_id' => $this->usuario_id,
            'aceptada' => $this->aceptada,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'tipo_plato', $this->tipo_plato]);

        return $dataProvider;
    }
}
