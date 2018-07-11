<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Controller\Sakuras;

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
        $q = $this->input->getString('q');

        $view = $this->getView();
        $conditions = [];

        if ($q) {
            $conditions[] = ["title LIKE '%$q%' OR `desc` LIKE '%$q%'"];
        }

        $view['sakuras'] = $this->getRepository()->getSakuras($conditions, 'id DESC');
        $view['q'] = $q;

        return $view->render();
    }
}
