<?php namespace Revolta77\TranslationManager\Console;

use Illuminate\Console\Command;
use Revolta77\TranslationManager\Manager;

class FindCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:find';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find translations in php/twig files';

    /** @var  \Revolta77\TranslationManager\Manager */
    protected $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire() {
        $this->handle();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $counter = $this->manager->findTranslations();
        $this->info('Done importing, processed ' . $counter . ' items!');
    }
}
