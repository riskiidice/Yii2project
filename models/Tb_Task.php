<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_task".
 *
 * @property integer $id
 * @property integer $slot
 * @property string $status
 * @property double $current
 * @property double $limit
 * @property string $start_date
 * @property string $stop_date
 * @property string $start_time
 * @property string $stop_time
 * @property string $task
 */
class Tb_Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slot'], 'integer'],
            [['status', 'task'], 'string'],
            [['current', 'limit'], 'number'],
            [['start_date', 'stop_date', 'start_time', 'stop_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
   
}
