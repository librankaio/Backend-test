<?php

namespace App\Repositories\User;

Interface UserRepository
{
    // @param $id
    // @return mixed
    
    public function getByUserId($id);

}