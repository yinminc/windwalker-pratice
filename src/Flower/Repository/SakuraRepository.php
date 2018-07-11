<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Repository;

use Windwalker\Core\Repository\DatabaseRepository;
use Windwalker\Core\Repository\Repository;
use Windwalker\Data\DataInterface;
use Windwalker\DataMapper\DataMapper;

/**
 * The SakuraRepository class.
 *
 * @since  __DEPLOY_VERSION__
 */

class SakuraRepository extends DatabaseRepository
{
    /**
     * Property table.
     *
     * @var  string
     */
    protected $table = 'sakuras';

    /**
     * getSakura
     *
     * @param array/int $conditions
     *
     * @return \Windwalker\Data\Data
     *
     * @throws \Exception
     *
     * @since  __DEPLOY_VERSION__
     */
    public function getSakura($conditions) : DataInterface
    {
        // $mapper = new DataMapper('sakuras');

        return $this->getDataMapper()->findOne($conditions);
    }

    /**
     * getSakuraById
     *
     * @param int $id
     *
     * @return  DataInterface
     *
     * @throws \Exception
     * @since  __DEPLOY_VERSION__
     */
    public function getSakuraById(int $id) : DataInterface
    {
        return $this->getSakura(['id' => $id]);
    }

    /**
     * getDataMapper
     *
     * @param DataInterface $data
     *
     * @return  DataInterface
     *
     * @since  __DEPLOY_VERSION__
     * @throws \Exception
     */
    public function save(DataInterface $data) : DataInterface
    {
        return $this->getDataMapper()->saveOne($data);
    }
}
