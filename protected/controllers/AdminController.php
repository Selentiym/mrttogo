<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.04.2016
 * Time: 19:23
 */
class AdminController extends CController{
    /**
     * @var string $layout
     */
    public $layout = 'adminLayout';
    /**
     * @var string $defaultAction
     */
    public $defaultAction = 'rules';
    public function actions(){
        return array(
            'createRule' => array(
                'class' => 'application.controllers.site.ModelCreateAction',
                'modelClass' => 'Rule',
                'view' => '//rules/create',
                'scenario' => 'create'
            ),
            'updateRule' => array(
                'class' => 'application.controllers.site.ModelUpdateAction',
                'modelClass' => 'Rule',
                'view' => '//rules/update',
                'scenario' => 'update'
            ),
            'rules' => array(
                'class' => 'application.controllers.site.FileViewAction',
                'view' => '//rules/list',
                'access' => Yii::app()->user->getState('logged',false)
            )
        );
    }
}
?>