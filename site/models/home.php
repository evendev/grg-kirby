<?php 

use GreenRiverGorge\BasePage;

class HomePage extends BasePage
{
    /**
     * Get all places
     *
     * @return array
     */
    public function places()
    {
        $data = [];

        foreach (site()->index()->filterBy('intendedTemplate', 'place') as $place)
        {
            if ($place->location()->isNotEmpty())
            {
                $data[] = $place->serialize();
            }
        }

        return $data;
    }

    /**
     * Get all places as JSON
     *
     * @return string
     */
    public function placesJson()
    {
        return json_encode($this->places());
    }
}