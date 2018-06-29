<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\View\Sakura;

use Flower\View\ContentTypeInterface;
use Windwalker\Core\View\HtmlView;

/**
 * The SakuraHtmlView class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SakuraHtmlView extends HtmlView implements ContentTypeInterface
{
    /**
     * Property renderer.
     *
     * @var  string
     */
    protected $renderer = 'edge';

    /**
     * prepareData
     *
     * @param \Windwalker\Data\Data $data
     *
     * @return  void
     *
     * @since  __DEPLOY_VERSION__
     */
    protected function prepareData($data)
    {
        $date = new \DateTime($data->date);
        $date->setTimezone(new \DateTimeZone('Asia/Taipei'));

        $data->date = $date->format('Y/m/d H:i:s');
    }

    /**
     * getContentType
     *
     * @return  string
     *
     * @since  __DEPLOY_VERSION__
     */
    public function getContentType(): string
    {
        return 'text/html';
    }
}
