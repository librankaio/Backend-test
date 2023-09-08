<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepositoryImplement implements UserRepository
{
    private $model;
    
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getByUserId($id)
    {
        return $this->model->where("id", $id)->first();
    }
}