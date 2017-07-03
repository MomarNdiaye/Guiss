<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produitslistes".
 *
 * @property integer $id
 * @property string $Denom
 * @property integer $OrdProd
 * @property string $LibProd
 * @property string $Annee
 */
class Produitslistes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produitslistes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProd', 'Denom', 'OrdProd', 'LibProd', 'Annee'], 'required'],
            [['idProd', 'OrdProd'], 'integer'],
            [['Denom', 'LibProd'], 'string', 'max' => 255],
            [['Annee'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idProd' => 'Identifiant',
            'Denom' => 'Responsable',
            'OrdProd' => 'Ordre Produit',
            'LibProd' => 'Libelle Produit',
            'Annee' => 'Annee',
        ];
    }
}
