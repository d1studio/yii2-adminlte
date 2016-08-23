# Yii2-adminlte

Yii2-AdminLte是一个Yii2后台的整体框架。



> 包含如下组件
1 LeftMenu
2 TopMenu


使用方法
>
1 把demo文件中的layout的文件替换yii2默认的layout
2 修改公共的Asset文件添加依赖

    ......
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'd1studio\yii2\adminlte\AdminLteAsset'
    ];
    .....







