<?php
namespace wayfiretech\netos\backend\modules\wechat\controllers;

use wayfiretech\netos\common\models\wechat\Rule;
use wayfiretech\netos\common\models\wechat\ReplyNews;

/**
 * 图文回复控制器
 *
 * Class ReplyNewsController
 * @package wayfiretech\netos\backend\modules\wechat\controllers
 */
class ReplyNewsController extends RuleController
{
    public $_module = Rule::RULE_MODULE_NEWS;

    /**
     * 返回模型
     *
     * @param $id
     * @return array|ReplyNews|null|\yii\db\ActiveRecord
     */
    protected function findModel($id)
    {   

        if (empty($id))
        {
            return new ReplyNews;
        }

        if (empty(($model = ReplyNews::find()->where(['rule_id'=>$id])->one())))
        {
            return new ReplyNews;
        }
        
        return $model;
    }
}
