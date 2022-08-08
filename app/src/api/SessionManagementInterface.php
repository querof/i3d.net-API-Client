<?php

declare(strict_types=1);

namespace i3D\src\api;

use i3D\src\api\v3\DTO\Session\User;

interface SessionManagementInterface
{
    public function getUser():User;
}
