<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class PutInDied extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send message about PutIn died';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Telegram::sendMessage([
            'chat_id' => 642114867,
            'text' => 'Putin not died!'
        ]);
        return;
    }
}
