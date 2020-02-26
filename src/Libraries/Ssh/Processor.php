<?php

namespace Chriha\ProjectCLI\Libraries\Ssh;

use Closure;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Console\Style\OutputStyle;

/**
 * Class Config
 * @package Chriha\Libraries\Ssh
 *
 * @method void __construct(OutputStyle $output, Connection $connection, bool $break = true)
 * @method int run(string $title, $command, Closure $callback = null)
 * @method int execute(string $title, Process $process, Closure $callback = null)
 * @method int copy(string $title, string $source, string $target, Closure $callback = null)
 * @method Process getProcess($script)
 * @method array getEnvironmentVariables(string $host)
 * @method int gatherExitCodes(array $processes)
 * @method array getFrames()
 * @method void updateOutput(string $content)
 * @method void addOutput($content, bool $success)
 */
class Processor
{

}
