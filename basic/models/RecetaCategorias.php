<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receta_categorias".
 *
 * @property int $id
 * @property int $receta_id
 * @property int $categoria_id
 */
class RecetaCategorias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta_categorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receta_id', 'categoria_id'], 'required'],
            [['receta_id', 'categoria_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receta_id' => 'Receta ID',
            'categoria_id' => 'Categoria ID',
        ];
    }
}
