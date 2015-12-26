<?php 

namespace GreenRiverGorge;

use KirbyCasts\Kirby\Blade\BladeView as View;

class App
{
    /**
     * Helper method for rendering a view
     *
     * @return ViewPage
     */
    public static function view()
    {
        return new View();
    }
}