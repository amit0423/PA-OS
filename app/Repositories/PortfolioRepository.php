<?php namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

class PortfolioRepository extends Repository {
   
     /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\SO\Models\Portfolio';
    }

}