<?php 

namespace GreenRiverGorge;

use KirbyCasts\Kirby\Blade\BladePage;

class BasePage extends BladePage
{
    /**
     * Get the menu label
     *
     * @return string
     */
    public function menuTitle()
    {
        if ($this->menuLabel()->isNotEmpty())
        {
            return $this->menuLabel();
        }

        return $this->title();
    }

    /**
     * Get the item's poster image object or a default image
     *
     * @return string
     */
    public function posterImage()
    {
        if ($this->poster()->isNotEmpty())
        {
            return $this->image( $this->poster() );
        }

        return site()->image( site()->defaultPlaceImage() );
    }
}