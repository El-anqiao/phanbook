<?php

namespace Helper;

use Codeception\Module;

/**
 * Here you can define custom actions
 * all public methods declared in helper class will be available in $I
 */
class Acceptance extends Module
{
    public function haveUserAgent($userAgent)
    {
        /** @var \Codeception\Module\PhpBrowser $phpBrowser */
        $phpBrowser = $this->getModule('PhpBrowser');
        $phpBrowser->setHeader('User-Agent', $userAgent);
    }
}
