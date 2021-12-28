<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu_recetas".
 *
 * @property int $id
 * @property int $menu_id
 * @property int $receta_id
 */
class Menureceta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_recetas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'receta_id'], 'required'],
            [['menu_id', 'receta_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'menu_id' => Yii::t('app', 'Menu ID'),
            'receta_id' => Yii::t('app', 'Receta ID'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return MenurecetaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MenurecetaQuery(get_called_class());
    }
}
