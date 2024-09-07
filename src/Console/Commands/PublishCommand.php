<?php

namespace XMultibyte\Engine\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    protected $signature = 'pe:publish
    {--force : Overwrite any existing files}
    {--config: Publish configuration files}
    {--migration : Publish migration files} ';
    
    protected $description = 'Command description';
    
    public function handle(): void
    {
        //TODO: Publish Command
    }
}
