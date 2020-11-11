# React App UI for Laravel Translation Manager

To have the pre-compiled files included in your mix based asset compilation add the following
lines to your Laravel project's `webpack.mix.js`, after compilation of your assets. 

```js
mix.copy(['vendor/revolta77/ltm/public/js/index.js'], 'public/vendor/ltm/js/index.js')
    .copy(['vendor/revolta77/ltm/public/css/index.css'], 'public/vendor/ltm/css/index.css')
    .copy(['vendor/revolta77/ltm/public/images'], 'public/vendor/ltm/images')
;
```

If you want to build this app as part of your asset compilation then you will need to add the
following to your `webpack.mix.js` (assuming this package is under
`vendor/revolta77/ltm` directory):

```js
mix.react('vendor/revolta77/ltm/resources/assets/js/index.js', 'public/vendor/ltm/js')
    .sass('vendor/revolta77/ltm/resources/assets/sass/index.scss', 'public/vendor/ltm/css')
    .setResourceRoot('/vendor/ltm/')
;
```

If you are not using mix compilation and the `public/mix-manifest.json` does not exist or does
not get modified then you need to add the following lines to this file:

```json
{
    "/vendor/ltm/js/index.js": "/vendor/ltm/js/index.js",
    "/vendor/ltm/css/index.css": "/vendor/ltm/css/index.css",
}
```

