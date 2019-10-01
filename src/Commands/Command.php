<?php

namespace Chriha\ProjectCLI\Commands;

use Closure;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Style\OutputStyle;
use Symfony\Component\Process\Process;

/**
 * Class Command
 * @package Chriha\ProjectCLI\Commands
 *
 * @property bool $requiresProject = false
 * @property bool $hasDynamicOptions = false
 * @property OutputStyle $output
 * @property InputInterface $input
 * @property bool $inProject = false
 * @method void __construct( string $name = null )
 * @method array additionalArgs( int $index = null )
 * @method int call( $command, array $arguments = [] )
 * @method Process spinner( string $title, Process $process, Closure $output = null )
 * @method void table( array $headers, array $rows, $tableStyle = 'default', array $columnStyles = [] )
 * @method void abort( string $message ) : void
 * @method mixed ask( string $question, $default = null, $validator = null )
 * @method void info( string $string ) : void
 * @method void line( $string, $style = null )
 * @method void example( string $command ) : void
 * @method void warn( $string )
 * @method mixed confirm( string $question, bool $default = true )
 * @method void alert( $string )
 * @method void comment( $string )
 * @method mixed anticipate( $question, array $choices, $default = null )
 * @method mixed askWithCompletion( $question, array $choices, $default = null )
 * @method string choice( $question, array $choices, $default = null, $attempts = null, $multiple = null )
 * @method void question( $string )
 * @method void error( $string )
 * @method void step( $text )
 * @method mixed secret( $question )
 * @method bool task( string $title, Closure $task = null, $loadingText = 'loading ...' )
 * @method mixed argument( $key )
 * @method mixed option( $key )
 */
abstract class Command extends SymfonyCommand
{

}
