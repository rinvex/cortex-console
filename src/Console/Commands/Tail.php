<?php

declare(strict_types=1);

namespace Cortex\Console\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Tail extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'tail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'tail command';

    /**
     * $files.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * __construct.
     *
     * @param \Illuminate\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * fire.
     */
    public function handle()
    {
        $path = $this->argument('path');
        $lines = (int) $this->option('lines');

        if (empty($path) === false) {
            $root = function_exists('base_path') === true ? base_path() : getcwd();
            $file = rtrim($root, '/').'/'.$path;
        } else {
            $path = function_exists('storage_path') === true ? storage_path() : getcwd();
            $path = rtrim($path, '/').'/';

            $file = (new Collection($this->files->glob($path.'logs/*.log')))
                ->map(function ($file) {
                    return is_file($file) === true ? $file : false;
                })->sortByDesc(function ($file) {
                    return filectime($file);
                })->first();
        }

        $this->readLine($file, $lines);
    }

    /**
     * readLine.
     *
     * @param string $file
     * @param int    $lines
     *
     * @return string|null
     */
    protected function readLine($file, $lines = 50): ?string
    {
        if (is_file($file) === false) {
            $this->error('tail: cannot open ‘'.$file.'’ for reading: No such file or directory');

            return null;
        }

        $fp = fopen($file, 'r');
        $i = 1;
        $result = [];
        while (! feof($fp)) {
            if ($i > $lines) {
                break;
            }
            $content = fgets($fp);
            $result[] = $content;
            $i++;
        }
        fclose($fp);

        $this->line(implode('', $result));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments(): array
    {
        return [
            ['path', InputArgument::OPTIONAL, 'path'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            ['lines', null, InputOption::VALUE_OPTIONAL, 'output the last K lines, instead of the last 50', 50],
        ];
    }
}
