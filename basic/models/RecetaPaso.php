<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receta_pasos".
 *
 * @property int $id
 * @property int $receta_id
 * @property int $orden
 * @property string $descripcion
 */
class RecetaPaso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta_pasos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receta_id', 'descripcion'], 'required'],
            [['receta_id', 'orden'], 'integer'],
            [['descripcion'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'receta_id' => Yii::t('app', 'Receta ID'),
            'orden' => Yii::t('app', 'Orden'),
            'descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecetaPasosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecetaPasosQuery(get_called_class());
    }
}
