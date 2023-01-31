<?php

namespace App\Jobs;

use App\Models\DataLog;
use Carbon\Carbon;
use Dflydev\DotAccessData\Data;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class UsuApiJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $datas = [];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($url, $totalInsert = 1)
    {
        $url = "http://usu.test/api/fakultas";
        $response = Http::get($url);

        $responseBody = json_decode($response->getBody(), true)['data'];

        $this->datas = array_chunk($responseBody, $totalInsert);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i=1;
        $data_log = DataLog::create([
            'name' => "created " . $i . " " . Carbon::now(),
            'status' => 'draft'
        ]);
        sleep(2);



        sleep(2);
        $data_log->update([
            'status' => 'selesai'
        ]);
    }
}
