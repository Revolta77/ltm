<?php namespace Revolta77\TranslationManager;

use Illuminate\Translation\TranslationServiceProvider as BaseTranslationServiceProvider;

class TranslationServiceProvider extends BaseTranslationServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLoader();
        
        $db_driver = config('database.default');

        if ($db_driver === 'pgsql') {
            $translatorRepository = 'Revolta77\TranslationManager\Repositories\PostgresTranslatorRepository';
        } else {
            $translatorRepository = 'Revolta77\TranslationManager\Repositories\MysqlTranslatorRepository';
        }

        $this->app->bind(
            'Revolta77\TranslationManager\Repositories\Interfaces\ITranslatorRepository',
            $translatorRepository
        );

        $this->app->singleton('translator', function ($app) {
            $loader = $app['translation.loader'];

            // When registering the translator component, we'll need to set the default
            // locale as well as the fallback locale. So, we'll grab the application
            // configuration so we can easily get both of these values from there.
            $locale = $app['config']['app.locale'];

            $trans = new \Revolta77\TranslationManager\Translator($app, $loader, $locale);

            $trans->setFallback($app['config']['app.fallback_locale']);

            if ($app->bound(\Revolta77\TranslationManager\ManagerServiceProvider::PACKAGE)) {
                $trans->setTranslationManager($app[\Revolta77\TranslationManager\ManagerServiceProvider::PACKAGE]);
            }

            return $trans;
        });
    }
}
