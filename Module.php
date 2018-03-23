<?php

namespace pantera\discussions;

use yii\base\InvalidConfigException;
use yii\base\Module as YiiModule;


class Module extends YiiModule {

    public $identityModel = 'common\models\User';

    public $access = ['@'];

    public $userModel = null;

    public $userAvatarPropertity = null;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(!$this->userModel) {
            throw new InvalidConfigException('Пожалуйста укажите путь до модели пользователя в конфиге модуля');
        }
    }

}