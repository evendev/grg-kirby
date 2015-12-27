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

    /**
     * Get the human-readable "type" of the place
     *
     * @return string
     */
    public function type()
    {
        $types = [
            'do'   => 'Attraction',
            'eat'  => 'Restaurant',
            'stay' => 'Lodging',
        ];

        return $types[$this->parent()->uid()];
    }

    /**
     * Serialize this Place for public data consmuption
     *
     * @return array
     */
    public function serialize()
    {
        $loc = $this->location()->split(',');

        return [
            'uid' => $this->uid(),
            'collectionUrl' => $this->parent()->url(),
            'collection' => $this->type(),
            'title' => $this->title()->toString(),
            'phone' => $this->phoneNumber()->toString(),
            'location' => [
                'lng' => $loc[1],
                'lat' => $loc[0],
            ],
        ];
    }
}