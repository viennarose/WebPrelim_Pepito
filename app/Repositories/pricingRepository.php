<?php

namespace App\Repositories;

use App\Models\pricing;
use App\Repositories\BaseRepository;

/**
 * Class pricingRepository
 * @package App\Repositories
 * @version October 4, 2021, 7:03 am UTC
*/

class pricingRepository extends BaseRepository
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
        return pricing::class;
    }
}
