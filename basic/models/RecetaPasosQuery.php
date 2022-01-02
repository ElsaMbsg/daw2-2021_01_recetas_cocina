<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RecetaPaso]].
 *
 * @see RecetaPaso
 */
class RecetaPasosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return RecetaPaso[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return RecetaPaso|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
