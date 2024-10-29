<?php

namespace App\Console\Commands;

use App\Models\Task;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendPendingTasksEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:send-pending-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to users with pending tasks';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $pendingTasks = $user->tasks()->where('status', 'Pending')->get();

            if ($pendingTasks->count() > 0) {
                Mail::to($user->email)->send(new \App\Mail\PendingTasksEmail($pendingTasks));
            }
        }

        return Command::SUCCESS;
    }
}
