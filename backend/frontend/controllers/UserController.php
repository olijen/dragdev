<?php
/**
 * Created by PhpStorm.
 * User: oleggrigoryev
 * Date: 24.08.16
 * Time: 6:30
 */

namespace frontend\controllers;

use yii\rest\ActiveController;
use common\models\User;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';
}