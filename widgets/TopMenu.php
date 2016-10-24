<?php
namespace d1studio\yii2\adminlte\widgets;

use \yii\base\Widget;
use yii\helpers\Html;
use \yii;

/**
 * 系统头部菜单widget
 * Class LeftMenu
 * @package d1studio\yii2\adminlte\widgets
 */
class TopMenu extends Widget
{
    public $more_module_list = [];
    public $module_list =[];
    /**
     * Renders the widget.
     */
    public function run()
    {
        $module_list      = $this->module_list;
        $more_module_list = $this->more_module_list;
        echo '<ul class="nav navbar-nav">';
        foreach ($module_list as $module) {
            if (Yii::$app->controller->module->id == $module['module']) {
                $open = 'open';
            } else {
                $open = '';
            }
            echo '<li class="dropdown messages-menu '.$open.'">';
            echo ' <a href="'.$module['url'].'" class="dropdown-toggle">';
            echo $module['name'];
            echo '</a>';
            echo '</li>';
        }
        if($more_module_list){
            print <<< EOT
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多 <span class="caret"></span></a>
              <ul class="dropdown-menu">
EOT;
            foreach($more_module_list as $v){
                echo "<li><a href='".$v['url']."'>".$v['name']."</a></li>";
    //            echo '<li role="separator" class="divider"></li>';
            }
            print <<< EOT
              </ul>
            </li>
EOT;
        }

        echo '</ul>';
    }
}
