<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ingrediente]].
 *
 * @see Ingrediente
 */
class IngredientesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Ingrediente[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Ingrediente|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
