<?php

namespace modava\auth\models;

use yii\db\ActiveRecord;

class RbacAuthItemChild extends ActiveRecord
{
    public static function tableName()
    {
        return 'rbac_auth_item_child';
    }

    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }
}