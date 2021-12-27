<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Planificacionmenu]].
 *
 * @see Planificacionmenu
 */
class PlanificacionmenuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Planificacionmenu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Planificacionmenu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
