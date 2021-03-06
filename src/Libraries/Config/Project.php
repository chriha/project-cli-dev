<?php

namespace Chriha\ProjectCLI\Libraries\Config;

use PHLAK\SemVer\Version;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

/**
 * Class Project
 * @package Chriha\ProjectCLI\Libraries\Config
 *
 * @method array|string get(string $path)
 * @method self set(string $path, $value)
 * @method boolean hasConfig() Checks for existing project config
 * @method Version version(Version $version = null) get / set project version
 * @method void save() Save current project config to file ./project.yml
 */
class Project
{

}
