<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\Helper\FieldsGroups;

use eZ\Bundle\EzPublishCoreBundle\ApiLoader\RepositoryConfigurationProvider;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Builds a SettingsFieldGroupsList.
 */
final class RepositoryConfigFieldsGroupsListFactory
{
    /** @var \eZ\Bundle\EzPublishCoreBundle\ApiLoader\RepositoryConfigurationProvider */
    private $configProvider;

    public function __construct(RepositoryConfigurationProvider $configProvider)
    {
        $this->configProvider = $configProvider;
    }

    public function build(TranslatorInterface $translator)
    {
        $repositoryConfig = $this->configProvider->getRepositoryConfig();

        return new ArrayTranslatorFieldsGroupsList(
            $translator,
            $repositoryConfig['fields_groups']['default'],
            $repositoryConfig['fields_groups']['list']
        );
    }
}
