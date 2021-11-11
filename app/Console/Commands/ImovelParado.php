<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\LocacaoImoveis;
use App\VendaImoveis;

class ImovelParado extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ImovelParado';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esses são os imóveis parados a 6 meses ou mais';

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
     * @return int
     */
    public function handle()
    {

        return 0;
    }
}
