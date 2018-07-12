<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Controller\Sakura;

use Windwalker\Core\Controller\AbstractController;

/**
 * The SaveController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class PutController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     */
    protected function doExecute()
    {
        $title = $this->input->getString('title');

        $method = $this->input->getMethod();

        show($method, 'But this is Put');

    }
}
