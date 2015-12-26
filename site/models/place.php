<?php 

use GreenRiverGorge\BasePage;

class PlacePage extends BasePage
{
    public function gmapUrl()
    {
        if ($this->address()->isNotEmpty())
        {
            return 'https://maps.google.com/?' . urlencode($this->address()->toString());
        }
    }
}