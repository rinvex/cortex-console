<?php

declare(strict_types=1);

namespace Cortex\Console\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cortex:install:console {--f|force : Force the operation to run when in production.} {--r|resource=* : Specify which resources to publish.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Cortex Console Module.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->alert($this->description);

        $this->call('cortex:publish:console', ['--force' => $this->option('force'), '--resource' => $this->option('resource')]);
        $this->call('cortex:seed:console');

        $this->call('cortex:activate', ['--module' => 'cortex/console']);
    }
}
