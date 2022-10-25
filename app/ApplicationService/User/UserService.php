<?php

namespace App\ApplicationService\User;

use App\ApplicationService\BaseService;
use App\DomainService\User\UserDomainInterface;


class UserService extends BaseService implements UserServiceInterface {
     /**
     * @var Domain
     */
    protected $domain;

    /**
     * UserService constructor.
     *
     * @param UserDomain $repositry
    */

    public function __construct(UserDomainInterface $domain)
    {
        $this->domain = $domain;
    }
}