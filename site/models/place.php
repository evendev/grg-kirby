<?php 

use GreenRiverGorge\BasePage;

class PlacePage extends BasePage
{
    /**
     * Get the toll-free phone number if exists, otherwise
     * get the local phone number.
     *
     * @return string
     */
    public function phoneNumber()
    {
        if ($this->phoneTollFree()->isNotEmpty())
            return $this->phoneTollFree();

        return $this->phone();
    }

    /**
     * Get a URL to the place's location on google maps
     *
     * @return string
     */
    public function gmapUrl()
    {
        if ($this->address()->isNotEmpty())
        {
            return 'https://maps.google.com/?q=' . urlencode($this->address()->toString());
        }
    }
}