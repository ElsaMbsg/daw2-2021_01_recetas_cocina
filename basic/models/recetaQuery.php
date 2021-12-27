<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[receta]].
 *
 * @see receta
 */
class recetaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return receta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return receta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
