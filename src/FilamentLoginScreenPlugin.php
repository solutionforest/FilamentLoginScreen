<?php

namespace Solutionforest\FilamentLoginScreen;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentLoginScreenPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filamentloginscreen';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
        ]);

    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
