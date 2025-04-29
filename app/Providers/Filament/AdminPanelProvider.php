<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Awcodes\Curator\CuratorPlugin;
use Filament\Support\Colors\Color;
use Filament\Navigation\NavigationItem;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
// use TomatoPHP\FilamentBrowser\FilamentBrowserPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Z3d0X\FilamentFabricator\FilamentFabricatorPlugin;
use RyanChandler\FilamentNavigation\FilamentNavigation;
use Filament\Http\Middleware\DisableBladeIconComponents;
//use  Z3d0X\FilamentFabricator\FilamentFabricatorPlugin;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Support\Facades\Auth;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('web-admin')
            ->path('web-admin')
            ->login()
            ->colors([
                'primary' => Color::Green,
            ])

            ->favicon(asset('images/Aliveng.png'))
            ->plugin(FilamentNavigation::make())
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                //Widgets\FilamentInfoWidget::class,
            ])
            ->sidebarFullyCollapsibleOnDesktop()

            ->navigationItems([
                NavigationItem::make('view Page')
                    ->url('/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-presentation-chart-line')
                    ->group('View Webpage')
                    ->sort(3)
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentFabricatorPlugin::make(),
               CuratorPlugin::make()
                ->label('Media')
                ->pluralLabel('Media')
                ->navigationIcon('heroicon-o-photo')
                ->navigationGroup('Content')
                ->navigationSort(3)
                ->navigationCountBadge()

            ])
            ->plugin(
                \TomatoPHP\FilamentBrowser\FilamentBrowserPlugin::make()

            );



    }
}
