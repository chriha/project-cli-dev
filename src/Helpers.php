<?php

namespace Chriha\ProjectCLI;

use Psr\Log\LoggerInterface;

/**
 * Class Helpers
 * @package Chriha\ProjectCLI
 *
 * @method static app($name = null)
 * @method static string|null projectPath(string $path = '')
 * @method static string|null pluginsPath(string $path = '')
 * @method static string|null home(string $path = '')
 * @method static void line($text = '')
 * @method static void danger($text)
 * @method static void abort($text)
 * @method static string timeAgo($date)
 * @method static string mbStrReverse(string $string)
 * @method static bool commandExists(string $command)
 * @method static string|null searchInFile(string $search, string $file)
 * @method static string|null findNamespace(string $file)
 * @method static string hostsFile()
 * @method static bool rmdir(string $dir)
 * @method static void recursiveRemoveDir(string $dir)
 * @method static void recursiveCopy(string $src, string $dst)
 * @method static LoggerInterface logger()
 */
class Helpers
{

}
