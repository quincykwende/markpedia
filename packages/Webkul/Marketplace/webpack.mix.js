const { mix } = require("laravel-mix");
require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
    var publicPath = 'publishable/assets';
} else {
    var publicPath = "../../../public/themes/default/assets";
    var publicPath = "../../../public/themes/velocity/assets";
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix.js([__dirname + "/src/Resources/assets/js/app.js"], "js/marketplace.js")
    .copyDirectory(__dirname + "/src/Resources/assets/images", publicPath + "/images")
    .sass(__dirname + "/src/Resources/assets/sass/app.scss", "css/marketplace.css")
    .sass(__dirname + "/src/Resources/assets/sass/mpVelocity.scss", "css/mpVelocity.css")
    .sass(__dirname + "/src/Resources/assets/sass/admin.scss", "css/marketplace-admin.css")
    .options({
        processCssUrls: false
    });

if (mix.inProduction()) {
    mix.version();
}