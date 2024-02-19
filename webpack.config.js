const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js') // Assurez-vous que ce fichier existe dans votre dossier assets
    .addStyleEntry('bootstrap', './assets/bootstrap.js') // Assurez-vous que ce fichier existe
    // .copyFiles({from: './assets/images'}) // Exemple si vous voulez copier des images
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction());

module.exports = Encore.getWebpackConfig();