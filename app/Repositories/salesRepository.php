<?php

namespace App\Repositories;

use App\Models\sales;
use App\Repositories\BaseRepository;

/**
 * Class salesRepository
 * @package App\Repositories
 * @version October 4, 2021, 7:03 am UTC
*/

class salesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sales::class;
    }
}
