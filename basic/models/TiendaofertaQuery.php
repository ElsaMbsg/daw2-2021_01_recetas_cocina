<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Tiendaoferta]].
 *
 * @see Tiendaoferta
 */
class TiendaofertaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Tiendaoferta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Tiendaoferta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
