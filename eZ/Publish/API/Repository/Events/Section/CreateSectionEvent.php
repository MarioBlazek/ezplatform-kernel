<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\API\Repository\Events\Section;

use eZ\Publish\API\Repository\Values\Content\Section;
use eZ\Publish\API\Repository\Values\Content\SectionCreateStruct;
use eZ\Publish\SPI\Repository\Event\AfterEvent;

final class CreateSectionEvent extends AfterEvent
{
    /** @var \eZ\Publish\API\Repository\Values\Content\SectionCreateStruct */
    private $sectionCreateStruct;

    /** @var \eZ\Publish\API\Repository\Values\Content\Section */
    private $section;

    public function __construct(
        Section $section,
        SectionCreateStruct $sectionCreateStruct
    ) {
        $this->sectionCreateStruct = $sectionCreateStruct;
        $this->section = $section;
    }

    public function getSectionCreateStruct(): SectionCreateStruct
    {
        return $this->sectionCreateStruct;
    }

    public function getSection(): Section
    {
        return $this->section;
    }
}
