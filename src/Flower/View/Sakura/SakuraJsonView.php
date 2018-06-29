<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

namespace Flower\View\Sakura;

use Flower\View\ContentTypeInterface;
use Windwalker\Core\View\StructureView;
use Windwalker\Debugger\Helper\DebuggerHelper;

/**
 * The SakuraJsonView class.
 *
 * @since  __DEPLOY_VERSION__
 */
class SakuraJsonView extends StructureView implements ContentTypeInterface
{
    /**
     * prepareData
     *
     * @param \Windwalker\Structure\Structure $data
     *
     * @return  void
     *
     * @since  __DEPLOY_VERSION__
     */
    protected function prepareData($data)
    {
        DebuggerHelper::disableConsole();

        parent::prepareData($data);
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
        return 'application/json';
    }
}
