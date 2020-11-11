<?php namespace Revolta77\TranslationManager\Console;

use Illuminate\Console\Command;
use Revolta77\TranslationManager\Manager;

class CleanCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean empty translations';

    /** @var \Revolta77\TranslationManager\Manager */
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
        $this->manager->cleanTranslations();
        $this->info("Done cleaning translations");
    }
}
