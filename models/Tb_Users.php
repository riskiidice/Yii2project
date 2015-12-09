<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tb_Users".
 *
 * @property integer $id
 * @property string $usr
 * @property string $pwd
 */
class Tb_Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tb_Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usr', 'pwd'], 'required','message'=>'กรุณาอย่าปล่อยให้ว่าง' 
            ]
        ];
    }


}
