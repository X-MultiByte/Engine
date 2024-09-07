<?php

namespace XMultibyte\Engine\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'engine:install
    {--force : Force overwrite any existing files}
    {--webdriver : Download WebDriver during the installation}
    ';
    
    protected string $description = 'Perform Engine Installation.';
    
    public function handle(): void
    {
        //TODO: Install Command.
    }
    
    public function install()
    {
        //TODO: Install Method.
    }
}
