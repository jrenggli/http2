<?php

declare(strict_types=1);

/*
 * This file is part of TYPO3 CMS-based extension "http2" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

namespace B13\Http2\Service;

use BT3\Bt3Core\Utility\GeneralUtility as Bt3CoreGeneralUtility;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;
use TYPO3\CMS\Core\Utility\StringUtility;

use const JSON_PRETTY_PRINT;

class ResourceService implements SingletonInterface
{
    protected array $scripts = [];
    protected array $styles = [];

    public function getScripts(): array
    {
        return array_unique($this->scripts);
    }

    public function addScript(string $script): void
    {
        $this->scripts[] = $script;
    }

    public function getStyles(): array
    {
        return array_unique($this->styles);
    }

    public function addStyle(string $style): void
    {
        $this->styles[] = $style;
    }




}
