<?php 

namespace GreenRiverGorge;

use \response as Response;
use \Kirby as OriginalKirby;

class Kirby extends OriginalKirby
{
    /**
     * Get a rendered view as a string
     *
     * @param  \Page  $page
     * @param  array  $data
     * @return  string 
     */
    public function template(\Page $page, $data = [])
    {
        $data = array_merge([
            'kirby' => $this,
            'site'  => $this->site(),
            'pages' => $this->site()->children(),
            'page'  => $page,
        ], $page->templateData(), $data, $this->controller($page, $data));

        return App::view()->make($page->template(), $data);
    }

    /**
     * Restrict a page type to logged-in users
     *
     * @param array $roles
     * @param array $users
     * @return void
     */
    public function guard()
    {
        if (!site()->user())
        {
            die(new Response('Authorization required', 'html', 401));
        }
    }
}