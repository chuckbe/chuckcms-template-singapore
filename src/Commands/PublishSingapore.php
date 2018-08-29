<?php

namespace Chuckbe\ChuckcmsTemplateSingapore\Commands;

use Chuckbe\ChuckcmsTemplateSingapore\migrations\seeds\ChuckcmsTemplateSingaporeTableSeeder;
use Illuminate\Console\Command;

class PublishSingapore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chuckcms-template-singapore:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command publishes the Singapore template for ChuckCMS.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new ChuckcmsTemplateSingaporeTableSeeder();
        $seeder->run();
        
        $this->info('Validating your information and generating a new site...');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info(' ');
        $this->info('ChuckCMS Template Singapore published successfully');
        $this->info(' ');
    }
}
