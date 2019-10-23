// src/AppBundle/Resources/public/js/main.js

require.config({
    paths: {
        app: '../../app/js',
        appcss: '../../app/css'
    }
});

define(['css!appcss/main'], function() {

    'use strict';

    return {

        name: "App Bundle",

        initialize: function(app) {
            app.sandbox.ckeditor.addPlugin('colorbutton');
            app.sandbox.ckeditor.addToolbarButton('colorSection', 'BGColor');
            app.sandbox.ckeditor.addToolbarButton('colorSection', 'TextColor');

            // External Plugin
            CKEDITOR.plugins.addExternal('youtube', '/bundles/app/ckeditor/youtube/plugin.js', '' );
            app.sandbox.ckeditor.addPlugin('youtube');
            app.sandbox.ckeditor.addToolbarButton('embedSection', 'Youtube');
        }
    };
});


// Don't forget to create a build task to create dist files: `src/AppBundle/Resources/public/dist/main.js`
