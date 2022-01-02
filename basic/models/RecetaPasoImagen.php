<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receta_paso_imagenes".
 *
 * @property int $id
 * @property int $receta_paso_id
 * @property int $orden
 * @property string $imagen
 */
class RecetaPasoImagen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta_paso_imagenes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receta_paso_id', 'imagen'], 'required'],
            [['receta_paso_id', 'orden'], 'integer'],
            [['imagen'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receta_paso_id' => 'Receta Paso ID',
            'orden' => 'Orden',
            'imagen' => 'Imagen',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecetaPasoImagenesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecetaPasoImagenesQuery(get_called_class());
    }
}
