<?php
namespace wayfiretech\netos\backend\widgets\menu;

use yii;
use yii\base\Widget;
use wayfiretech\netos\common\models\sys\Addons;
use common\enums\StatusEnum;
use wayfiretech\netos\backend\modules\sys\models\Menu;

/**
 * Class MainLeftWidget
 * @package backend\widgets\left
 */
class MenuLeftWidget extends Widget
{
    public function run()
    {
        return $this->render('menu-left', [
            'models'=> Menu::getMenus(Menu::TYPE_MENU,StatusEnum::ENABLED),
            'plug' => Addons::getPlugList()
        ]);
    }
}