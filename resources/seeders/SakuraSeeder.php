<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

use Windwalker\DataMapper\DataMapper;

/**
 * The SakuraSeeder class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SakuraSeeder extends \Windwalker\Core\Seeder\AbstractSeeder
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

        // find all 出來是 array 所以要先 dump
        $locations = (new DataMapper('locations'))->findAll()->dump();
        $sakuraMapper = new DataMapper('sakuras');

        foreach (range(1, 150) as $i){
            $sakuraMapper->createOne([
                'title' => $faker->word,
                'locations_id' => $faker->randomElement($locations)->id,
                'desc' => $faker->paragraph
            ]);

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
        $this->truncate('sakuras');
    }
}
