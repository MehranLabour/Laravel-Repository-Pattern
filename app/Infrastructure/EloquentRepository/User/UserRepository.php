<?php

namespace App\Infrastructure\EloquentRepository\User;

use App\Models\User;
use App\DomainService\User\UserRepositoryInterface;
use App\Infrastructure\EloquentRepository\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }
    
}