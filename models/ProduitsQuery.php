<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Produits]].
 *
 * @see Produits
 */
class ProduitsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Produits[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Produits|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
