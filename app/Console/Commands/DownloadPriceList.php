<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class DownloadPriceList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:price-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download price list from stavtrack';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'https://www.stavtrack.ru/files/price.pdf';

        $path = public_path('files/price.pdf');

        $response = Http::get($url);

        if ($response->successful()){
            file_put_contents($path, $response->body());
            $this->info('Price list downloaded successfully');
        }else{
            $this->error('Filed to download a price list');
        }
    }
}
