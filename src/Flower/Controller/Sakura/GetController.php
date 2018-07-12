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


        //利用 mapper 指令進行資料庫操作

//        $mapper = new DataMapper('sakuras');

//        $mapper->createOne([
//           'title' => 'Hello',
//           'desc' => 'kerker'
//        ]);


//        $sakuras = $mapper->findAll();

//        $sakuras = $sakuras->only([
//           'id',
//           'desc'
//        ]);

//        $sakuras = $sakuras->filter(function (Query $query) {
//
//        });

//        $sakuras = $mapper->select('COUNT(id) AS count')
//            ->findOne()->count;

//        foreach ($sakuras as $sakuras) {
//            echo $sakuras->id . ':' . $sakuras->title . '<br>';
//        }

//        show($sakuras);


        // 直接進行 DB 操作，組合ＤＢ指令丟到 setQuery，丟出來就會是乾淨的陣列
//        $db = $this->app->database;
//
//        $query = $db->getQuery(true);
//
//        $id = 1;
//
//        echo $query->select('*')
//            ->from('sakuras')
//            ->where('%n = %q', 'id', $id)
//                ->orWhere([
//                    'id > 1',
//                    'id < 3'
//                ])
//            ->order('id DESC')
//            ->limit(2,0);
//
//        $sakuras = $db->setQuery($query)->loadAll();

//        show($sakuras);



//        $view = $this->input->get('view','sakura');
//        $format = $this->input->get('format', 'html');
//        $layout = $this->input->get('layout', 'default');
//        $foo = $this->input->get('foo','BAR');

        $id = $this->input->get('id');


//        $view['location'] = 'Japan';
//        $view->set('color', 'warning');
//        $view->set('foo', $foo);
//        $view->set('id', $this->input->get('id'));
//        $view->set('date', '2018-06-25 00:00:00');


//        $sakuras = new DataMapper('sakuras');
//
//        $sakura = $sakuras->findOne([
//            'id' => $id
//        ]);

//        $mapper = new DataMapper('sakuras');
//        $sakura = $mapper->findOne($id);

        /** @var SakuraRepository $repo */
        $repo = $this->getRepository('Sakura');

        $sakura = $repo->getSakuraById($id);

        /** @var LocationsRepository $locationsRepo */
        $locationsRepo = $this->getRepository('locations');
        $view          = $this->getView('sakura');
        // 把拿到的資料陣列丟到 view 裡面的的陣列，讓 view 可以拿出來用
        $view['sakura'] = $sakura;
        $view['locations'] = $locationsRepo->getLocations();


        if ($view instanceof LayoutRenderableInterface) {
            $view->setLayout('form');
        }


        return $view->render();

    }
}
