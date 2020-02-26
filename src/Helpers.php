<?php

namespace Chriha\ProjectCLI;

use Psr\Log\LoggerInterface;

/**
 * Class Helpers
 * @package Chriha\ProjectCLI
 *
 * @method static app($name = null)
 * @method static ?string projectPath(string $path = '')
 * @method static ?string pluginsPath(string $path = '')
 * @method static ?string home(string $path = '')
 * @method static void line($text = '')
 * @method static void danger($text)
 * @method static void abort($text)
 * @method static string timeAgo($date)
 * @method static string mbStrReverse(string $string)
 * @method static bool commandExists(string $command)
 * @method static ?string searchInFile(string $search, string $file)
 * @method static ?string findNamespace(string $file)
 * @method static string hostsFile()
 * @method static bool rmdir(string $dir)
 * @method static recursiveRemoveDir(string $dir)
 * @method static recursiveCopy(string $src, string $dst)
 * @method static LoggerInterface logger()
 */
class Helpers
{

}
