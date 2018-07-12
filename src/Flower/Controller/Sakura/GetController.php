<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Controller\Sakura;

use Flower\Repository\LocationsRepository;
use Flower\Repository\SakuraRepository;
use Flower\View\ContentTypeInterface;
use Windwalker\Core\Controller\AbstractController;
use Windwalker\Core\View\HtmlView;
use Windwalker\Core\View\LayoutRenderableInterface;
use Windwalker\DataMapper\DataMapper;
use Windwalker\Debugger\Helper\DebuggerHelper;
use Windwalker\Http\Response\JsonResponse;

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

        $id = $this->input->get('id');

        /** @var SakuraRepository $repo */
        $repo = $this->getRepository('Sakura');

        $sakura = $repo->getSakuraById($id);

        /** @var LocationsRepository $locationsRepo */
        $locationsRepo = $this->getRepository('locations');
        $view          = $this->getView('sakura');
        // 把拿到的資料陣列丟到 view 裡面的的陣列，讓 view 可以拿出來用
        $view['sakura'] = $sakura;
        $view['locations'] = $locationsRepo->getLocations();

        $view->setLayout('form');



        return $view->render();

    }
}
