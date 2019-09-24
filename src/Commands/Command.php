<?php

namespace Chriha\ProjectCLI\Commands;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 * Class Command
 * @package Chriha\ProjectCLI\Commands
 *
 * @property OutputInterface $output
 * @property InputInterface $input
 * @method array additionalArgs( int $index = null )
 * @method argument( string $key )
 * @method option( string $key )
 * @method int call( $command, array $arguments = [] )
 * @method void exit( ?string $message )
 * @method ask( string $message, $default = null )
 * @method void info( string $message )
 * @method void line( $string, $style = null )
 * @method void warn( $string ) A nice description
 * @method bool task( string $title, \Closure $task = null, $loadingText = 'loading ...' )
 * @method confirm( string $question, bool $default = false )
 * @method spinner( string $title, Process $process, \Closure $output = null )
 * @method void table( array $headers, array $rows, $style = 'borderless' )
 */
class Command extends SymfonyCommand
{

}
