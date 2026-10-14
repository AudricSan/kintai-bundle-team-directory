<?php

declare(strict_types=1);

namespace kintai\Bundles\Installed\TeamDirectory;

use kintai\Contract\Bundle;
use kintai\Contract\Extension\NavItem;

final class TeamDirectoryBundle extends Bundle
{
    public function getName(): string
    {
        return 'team-directory';
    }

    public function getVersion(): string
    {
        return '1.2.0';
    }

    public function getLabel(): string
    {
        return __('bundle_team_directory');
    }

    public function getDescription(): string
    {
        return __('bundle_team_directory_desc');
    }

    public function register(): void
    {
        $this->loadViewsFrom($this->getPath() . '/Views', 'team-directory');
        $this->loadRoutesFrom($this->getPath() . '/routes.php');
        $this->loadAssetsFrom('public');
    }

    /**
     * Navigation (contrat 1.1) : entrée(s) de la barre du haut et de la barre mobile.
     */
    public function navigation(): array
    {
        return [
            new NavItem('team_directory', NavItem::MAIN, 'team_directory', 'team.index', 'team.index',
                icon: 'users', activePaths: ['/team'], order: 10),
        ];
    }
}
