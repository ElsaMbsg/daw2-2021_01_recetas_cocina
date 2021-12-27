<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "receta_ingredientes".
 *
 * @property int $id
 * @property int $receta_id
 * @property int $ingrediente_id
 * @property float $cantidad
 * @property string|null $medida
 * @property string|null $notas
 */
class Recetaingrediente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta_ingredientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receta_id', 'ingrediente_id'], 'required'],
            [['receta_id', 'ingrediente_id'], 'integer'],
            [['cantidad'], 'number'],
            [['notas'], 'string'],
            [['medida'], 'string', 'max' => 45],
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
            'ingrediente_id' => Yii::t('app', 'Ingrediente ID'),
            'cantidad' => Yii::t('app', 'Cantidad'),
            'medida' => Yii::t('app', 'Medida'),
            'notas' => Yii::t('app', 'Notas'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return RecetaingredienteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecetaingredienteQuery(get_called_class());
    }
}
