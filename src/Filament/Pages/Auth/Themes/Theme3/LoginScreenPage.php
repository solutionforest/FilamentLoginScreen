<?php

namespace Solutionforest\FilamentLoginScreen\Filament\Pages\Auth\Themes\Theme3;
use Filament\Pages\Auth\Login;

class LoginScreenPage extends Login
{
    
    public function __construct() {
        static::$view = 'filamentloginscreen::themes.theme3.index';
        static::$layout = 'filamentloginscreen::themes.base'; 
    }

}