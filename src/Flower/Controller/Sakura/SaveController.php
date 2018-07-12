<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\Controller\Sakura;

use Flower\Repository\SakuraRepository;
use Windwalker\Core\Controller\AbstractController;
use Windwalker\Data\Data;
use Windwalker\DataMapper\DataMapper;

/**
 * The SaveController class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SaveController extends AbstractController
{
    /**
     * The main execution process.
     *
     * @return  mixed
     * @throws \Exception
     * @throws \Psr\Cache\InvalidArgumentException
     */
    protected function doExecute()
    {
        $id = $this->input->getInt('id');
        $locationid = $this->input->getInt('location_id');
        $title = $this->input->getString('title');
        $desc = $this->input->getString('desc');

        // 判斷是否有ＩＤ，如果有的ＩＤ的話就會 update 一筆資料，如果沒有ＩＤ的話，就會建立一筆新的資料
//        if ($id) {
//            $data = $mapper->updateOne([
//                'id' => $id,
//                'title' => $title,
//                'desc' => $desc
//            ]);
//        } else {
//            $data = $mapper->createOne([
//                'title' => $title,
//                'desc' => $desc
//            ]);
//        }

        /** @var SakuraRepository $repo */
        $repo = $this->getRepository();

        $data = $repo->save(new Data([
            'id' => $id,
            'location' => $locationid,
            'title' => $title,
            'desc' => $desc
        ]));


        // 當更新或創建資料之後就會給一個成功訊息
        $this->addMessage('儲存成功', 'success');

        // 表單送出資料之後，重導向回表單並且回到同個ID項目下面
        $this->setRedirect(
            $this->router->route('sakuras')
        );

        return true;

//        show($title, $desc);
//        exit(' @Checkpoint');

//        $method = $this->input->getMethod();
//
//        show($method);
//
//        show($title, $this);
    }
}
