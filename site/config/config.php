<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', env('KIRBY_LICENSE', 'put your kirby license here'));

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// App Mode
c::set('app.mode', env('APP_MODE', 'production'));

// Email
c::set('email.from', env('EMAIL_FROM'));
c::set('email.to', env('EMAIL_TO'));

// Mailchimp
c::set('newsletter.signup_url', env('MAILCHIMP_URL'));
