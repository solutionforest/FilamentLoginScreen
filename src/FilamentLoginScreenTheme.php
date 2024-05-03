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
        
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
