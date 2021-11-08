<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace lexing2008\yii2AssetsAutoCompress;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
interface IFormatter
{
    /**
     * @param string $content
     * @return string
     */
    public function format($content);
}