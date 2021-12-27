<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planificacion_menus".
 *
 * @property int $id
 * @property int $planificacion_id
 * @property int $menu_id Menu relacionado con el dia planificado
 * @property int $numero_dia Numero de dia del menu dentro de la planificacion.
 */
class Planificacionmenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planificacion_menus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['planificacion_id', 'menu_id', 'numero_dia'], 'required'],
            [['planificacion_id', 'menu_id', 'numero_dia'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'planificacion_id' => Yii::t('app', 'Planificacion ID'),
            'menu_id' => Yii::t('app', 'Menu ID'),
            'numero_dia' => Yii::t('app', 'Numero Dia'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PlanificacionmenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PlanificacionmenuQuery(get_called_class());
    }
}
