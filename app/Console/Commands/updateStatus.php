<?php

namespace App\Console\Commands;

use App\Jobs\UpdateStatus as JobsUpdateStatus;
use App\Models\TodoItem;
use Illuminate\Console\Command;

class updateStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the status from to-do-list';

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
       
       JobsUpdateStatus::dispatch();
       TodoItem::chunk(100,function($todos){
        foreach($todos as $todoItem){
            $todoItem->status='done';
            $todoItem->update();
            $this->info('Todo '.$todoItem->description.' updated');
        }
         });
       
    }
}
