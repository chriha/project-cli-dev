<?php

namespace Chriha\ProjectCLI\Services;

use PHLAK\SemVer\Version;

/**
 * Class Git
 * @package Chriha\ProjectCLI\Services
 *
 * @method string branch() Current branch
 * @method bool inBranch( string $branch ) Checks if the current branch is the one provided
 * @method string latestTag() Returns the latest tag on the current branch
 * @method array commitRange( ?string $start, string $head = 'HEAD' ) Returns the commits for the specified range
 * @method void tag( Version $version, bool $push = true ) Create the specified tag
 * @method bool isClean() Checks if the current working directory is clean
 */
class Git
{

}
