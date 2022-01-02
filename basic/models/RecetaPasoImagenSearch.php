<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RecetaPasoImagen;

/**
 * RecetaPasoImagenSearch represents the model behind the search form of `app\models\RecetaPasoImagen`.
 */
class RecetaPasoImagenSearch extends RecetaPasoImagen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'receta_paso_id', 'orden'], 'integer'],
            [['imagen'], 'safe'],
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
        $query = RecetaPasoImagen::find();

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
            'receta_paso_id' => $this->receta_paso_id,
            'orden' => $this->orden,
        ]);

        $query->andFilterWhere(['like', 'imagen', $this->imagen]);

        return $dataProvider;
    }
}
