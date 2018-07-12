<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Repository;

use Windwalker\Core\Repository\DatabaseRepository;
use Windwalker\Data\DataSet;

/**
 * The LocationsRepository class.
 *
 * @since  __DEPLOY_VERSION__
 */
class LocationsRepository extends DatabaseRepository
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = 'locations';

    /**
     * getLocations
     *
     * @param $conditions
     *
     * @return  DataSet
     *
     * @throws \Exception
     *
     * @since  __DEPLOY_VERSION__
     *
     */
    public function getLocations() : DataSet
    {

        return $this->getDataMapper()->findAll();
    }

}
