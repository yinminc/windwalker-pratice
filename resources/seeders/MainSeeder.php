<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

use Windwalker\Core\Seeder\AbstractSeeder;

/**
 * The MainSeeder class.
 *
 * @since  {DEPLOY_VERSION}
 */
class MainSeeder extends AbstractSeeder
{
    /**
     * doExecute
     *
     * @return  void
     * @throws ReflectionException
     */
    public function doExecute()
    {
        $this->execute(CoverSeeder::class);
        $this->execute(LocationSeeder::class);
        $this->execute(SakuraSeeder::class);
    }

    /**
     * doClear
     *
     * @return  void
     * @throws ReflectionException
     */
    public function doClear()
    {
        $this->clear(CoverSeeder::class);
        $this->clear(LocationSeeder::class);
        $this->clear(SakuraSeeder::class);
    }
}
