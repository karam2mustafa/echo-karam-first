<?php

namespace karam\Commands;

use Illuminate\Console\Command;

class KaramCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'karam:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Commands description';

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
        $this->line(' karam test');
    }
}
