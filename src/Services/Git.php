<?php

namespace Chriha\ProjectCLI\Services;

use PHLAK\SemVer\Version;

/**
 * Class Git
 * @package Chriha\ProjectCLI\Services
 *
 * @method string branch() Current branch
 * @method bool inBranch(string $branch) Checks if the current branch is the one provided
 * @method string latestTag() Returns the latest tag on the current branch
 * @method array commitRange(?string $start, string $head = 'HEAD') Returns the commits for the specified range
 * @method bool isClean() Checks if the current working directory is clean
 * @method void tag(Version $version, bool $push = true) Create the specified tag
 * @method bool commit(string $message, bool $push = false)
 * @method bool clone(string $repository, ?string $target = null)
 * @method bool checkout(string $branch, ?string $path = null)
 * @method string|null tagByPath(string $path)
 */
class Git
{

}
