<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Recetaingrediente]].
 *
 * @see Recetaingrediente
 */
class RecetaingredienteQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Recetaingrediente[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Recetaingrediente|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
