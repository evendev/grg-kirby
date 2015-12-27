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

    /**
     * Get the document title
     *
     * @return string
     */
    public static function title()
    {
        $title = site()->title();

        if (page()->title()->isNotEmpty())
        {
            $title = page()->title() . ' - ' . $title;
        }

        return $title;
    }
}