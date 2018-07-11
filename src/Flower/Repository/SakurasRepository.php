<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Repository;

use Windwalker\Core\Repository\DatabaseRepository;
use Windwalker\Data\DataInterface;
use Windwalker\Data\DataSet;

/**
 * The SakurasRepository class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SakurasRepository extends DatabaseRepository
{
    /**
     * Property table.
     *
     *
     * @var  string
     */
    protected $table = 'sakuras';

    /**
     * getSakuras
     *
     * @param null   $condition
     * @param string $order
     * @param int    $limit
     * @param int    $start
     *
     * @return DataSet
     *
     * @throws \Exception
     *
     * @since  __DEPLOY_VERSION__
     */
    public function getSakuras($condition = null, $order = null, $limit = null, $start = null) : DataSet
    {
        return $this->getDataMapper()->find($condition, $order, $limit, $start);
    }
}
