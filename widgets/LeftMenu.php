<?php
namespace d1studio\yii2\adminlte\widgets;
use \yii\bootstrap\Widget;

/**
 *  d1studio/yii-adminlte
 *  左侧菜单widget
 *
 *  echo \common\widgets\LeftMenu::widget(
 *  [
 *      'menu'=>[
 *      [
 *          'icon'      => 'fa-dashboard',
 *          'name'      => '控制台',
 *          'active'    => true,
 *          'url'       => '',
 *          'children'  => [
 *              [
 *                  'icon'      => 'fa-circle-o',
 *                  'name'      => '基础概况',
 *                  'active'    => false,
 *                  'url'       => '',
 *              ],
 *              [
 *                  'icon'      => 'fa-circle-o',
 *                  'name'      => '哈哈哈',
 *                  'active'    => true,
 *                  'url'       => '',
 *              ],
 *          ]
 *      ],
 *      [
 *          'icon'      => 'fa-book',
 *          'name'      => '帮助说明',
 *          'active'    => false,
 *          'url'       => '',
 *      ]
 *   ]
 * ]);
 * @author chengtao <751753158@qq.com>
 */
class LeftMenu extends Widget{
    /**
     * 菜单描述
     * @var array
     */
    public $menu = [];
    /**
     * @inheritdoc
     */
    public function run(){
        foreach ($this->menu as $item){
            if(isset($item['children']) && $item['children']){
                if($item['active']){
                    echo '<li class="active treeview">';
                }else{
                    echo '<li class="treeview">';
                }
                if(isset($item['url']) && $item['url']){
                    echo '<a href="'.$item['url'].'">';
                }else{
                    echo '<a>';
                }
                echo '<i class="fa '.$item['icon'].'"></i> ';
                echo "<span>{$item['name']}</span>";
                echo '<span class="pull-right-container">';
                echo '<i class="fa fa-angle-left pull-right"></i>';
                echo '</span>';
                echo '</a>';

                echo '<ul class="treeview-menu">';
                foreach ($item['children'] as $item_children){
                    if($item_children['active']){
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                    }
                    if(isset($item['url'])  && $item_children['url']){
                        echo '<a href="'.$item_children['url'].'">';
                    }else{
                        echo '<a>';
                    }
                    echo '<i class="fa '.$item_children['icon'].'"></i> ';
                    echo $item_children['name'];
                    echo '</a>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</li>';
            }else{
                echo '<li>';
                if(isset($item['url']) && $item['url']){
                    echo '<a href="'.$item['url'].'">';
                }else{
                    echo '<a>';
                }
                echo '<i class="fa '.$item['icon'].'"></i> ';
                echo "<span>{$item['name']}</span>";
                echo '</a>';
                echo '</li>';
            }
        }
    }
}