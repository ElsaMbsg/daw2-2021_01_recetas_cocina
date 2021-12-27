<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingredientes".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property string|null $datos_nutricion (opcional) Datos nutricionales del ingrediente
 */
class Ingrediente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingredientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'datos_nutricion'], 'string'],
            [['nombre'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'datos_nutricion' => Yii::t('app', 'Datos Nutricion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return IngredienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IngredienteQuery(get_called_class());
    }
}
