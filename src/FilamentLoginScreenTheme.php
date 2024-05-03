<?php

namespace Solutionforest\FilamentLoginScreen;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentLoginScreen implements Plugin
{
    public function getId(): string
    {
        return 'filamentloginscreen';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filamentloginscreen', __DIR__ . '/../resources/dist/filamentloginscreen.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filamentloginscreen');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
