<?php 

use \c as Config;
use \r as Request;
use Jevets\Kirby\Form;

return function ($site, $pages, $page) {

    $form = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Your name is required',
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Your valid email address is required',
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => 'Your phone number is required',
        ],
        'business_type' => [
            'rules' => ['required'],
            'message' => 'Business type is required',
        ],
        'business_name' => [
            'rules' => ['required'],
            'message' => 'Business name is required',
        ],
        'business_phone' => [
            'rules' => ['required'],
            'message' => 'Business phone is required',
        ],
        'business_address' => [
            'rules' => ['required'],
            'message' => 'Business address is required',
        ],
        'business_description' => [
            'rules' => ['required'],
            'message' => 'Business description is required',
        ],
        'business_website' => [],
        'tripadvisor' => [],
        'facebook' => [],
        'twitter' => [],
        'instagram' => [],
    ]);


    if (Request::is('post'))
    {
        if ($form->validates())
        {
            flash('messages.success', ['We got your message.', "We'll be back in touch within a few days after we've reviewed your business.", "If approved we'll request a featured photo from you."]);

            // save submission
            $listRequest = new GreenRiverGorge\ListRequest($form->data());
            $listRequest->store( $page );

            $to = explode(',', Config::get('email.to'));

            // notify
            $email = new \Email([
                'from'    => 'GRG <' . Config::get('email.from') . '>',
                'subject' => '[grg] New Listing Request',
                'body'    => snippet('emails/list-request', $form->data(), true),
            ]);

            foreach ($to as $recip)
            {
                try
                {
                    $email->send([
                        'to' => $recip,
                    ]);
                }
                catch (\Exception $e) {}
            }
        }
        else
        {
            flash('messages.error', ['There were errors with your submission.']);
        }

        go ($page->url());
    }

    return compact('form');

};
