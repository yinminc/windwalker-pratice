<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

use Windwalker\DataMapper\DataMapper;

/**
 * The LocationSeeder class.
 *
 * @since  __DEPLOY_VERSION__
 */
class LocationSeeder extends \Windwalker\Core\Seeder\AbstractSeeder
{
    /**
     * doExecute
     *
     * @return  void
     * @throws Exception
     */
    public function doExecute()
    {
        $faker = \Faker\Factory::create('zh_TW');
        $mapper = new DataMapper('locations');
        $date = new DateTime('now');

        foreach (range(1, 15) as $i) {
            $mapper->createOne([
                'title' => $faker->country,
                'description' => $faker->sentence(3),
                'created' => $date->format($this->getDateFormat())
            ]);

            // 計算載入資料的筆數
            $this->outCounting();
        }

    }

    /**
     * doClear
     *
     * @return  void
     */
    public function doClear()
    {
        $this->truncate('locations');
    }
}
