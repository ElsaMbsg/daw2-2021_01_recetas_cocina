<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Menureceta]].
 *
 * @see Menureceta
 */
class MenurecetaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Menureceta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Menureceta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
