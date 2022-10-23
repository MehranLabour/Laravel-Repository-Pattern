<?php

namespace App\DomainService\User;

use App\DomainService\BaseDomain;
use App\DomainService\User\UserRepositoryInterface;


class UserDomain extends BaseDomain implements UserDomainInterface {
     /**
     * @var Repository
     */
    protected $repository;

    /**
     * UserRepository constructor.
     *
     * @param Userrepository $repositry
    */

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}