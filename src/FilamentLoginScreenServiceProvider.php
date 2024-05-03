<?php

namespace Solutionforest\FilamentLoginScreen;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLoginScreenServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filamentloginscreen';

    public static string $viewNamespace = 'filamentloginscreen';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);

        $configFileName = $package->shortName();
 
        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }

    }


    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

    }

    protected function getAssetPackageName(): ?string
    {
        return 'solutionforest/filamentloginscreen';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make(static::$name, __DIR__ . '/../resources/dist/filamentloginscreen.css'),
        ];
    }

}