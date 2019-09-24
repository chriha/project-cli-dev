<?php

namespace Chriha\ProjectCLI\Libraries\Ssh;

use Closure;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 * Class Config
 * @package Chriha\Libraries\Ssh
 *
 * @method void __construct( OutputInterface $output, Connection $connection, bool $break = true )
 * @method int run( string $title, $command, Closure $callback = null )
 * @method int copy( string $title, string $source, string $target, Closure $callback = null )
 * @method Processor composerInstall( string $path )
 * @method Process getProcess( $script )
 */
class Processor
{

}