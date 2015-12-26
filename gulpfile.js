var elixir = require('laravel-elixir');

elixir(function(mix) {

    // Compile master stylesheet
    mix.sass('./site/assets/sass/app.sass', './public/assets/css/app.css');

    // Compile master javascripts
    mix.browserify('./site/assets/js/app.js', './public/assets/js/app.js');

    // Copy fonts
    mix.copy('./node_modules/bootstrap-sass/assets/fonts/bootstrap', './public/assets/fonts');
    mix.copy('./node_modules/font-awesome/fonts', './public/assets/fonts');

    // Copy images
    mix.copy('./site/assets/img', './public/assets/img');

});