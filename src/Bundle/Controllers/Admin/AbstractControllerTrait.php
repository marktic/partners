<?php

declare(strict_types=1);

namespace Marktic\Partners\Bundle\Controllers\Admin;

use Marktic\Partners\Bundle\Library\View\ViewUtility;
use Nip\Controllers\Response\ResponsePayload;
use Nip\View\View;

/**
 * @method ResponsePayload payload()
 */
trait AbstractControllerTrait
{
    use \Marktic\Partners\Bundle\Controllers\Base\AbstractControllerTrait;

    protected function registerViewPathsPartners(View $view): void
    {
        ViewUtility::registerViewPaths($view, 'admin');
    }
}
