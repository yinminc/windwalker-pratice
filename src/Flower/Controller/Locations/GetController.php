<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Controller\Locations;

use Flower\Repository\LocationsRepository;
use Windwalker\Core\Controller\AbstractController;

/**
 * The GetController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class GetController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     * @throws \Exception
     */
    protected function doExecute()
    {

        /** @var LocationsRepository $repo */
        $repo = $this->getRepository();

        $locations = $repo->getLocations();

        $view = $this->getView();

        $view['locations'] = $locations;

        return $view->render();
    }
}
