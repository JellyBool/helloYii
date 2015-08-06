<?php
namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser {

    const ROLE_USER = 10;
    const ROLE_MODERATOR = 20;
    const ROLE_ADMIN = 30;
    public function register()
    {

    }
}