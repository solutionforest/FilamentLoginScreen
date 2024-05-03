<?php

namespace Solutionforest\FilamentLoginScreen\Filament\Pages\Auth\Themes\Theme1;

use Filament\Pages\Auth\Login;

class LoginScreenPage extends Login
{
    
    public function __construct() {
        static::$view = 'filamentloginscreen::themes.theme1.default';
        static::$layout = 'filamentloginscreen::themes.base'; 
    }

}