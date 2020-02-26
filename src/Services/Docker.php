<?php

namespace Chriha\ProjectCLI\Services;

use Symfony\Component\Process\Process;

/**
 * Class Docker
 * @package Chriha\ProjectCLI\Services
 *
 * @method ?string config()
 * @method Process run(array $commands, string $cwd = null)
 * @method Process process(array $commands = [])
 * @method Process exec(string $service, array $commands = [], bool $tty = true)
 * @method bool isRunning(string $service)
 * @method string compose()
 * @method array services() Returns all services specified in the active docker-compose file
 * @method string runExec(string $service = 'web')
 * @method array ports()
 * @method array hasOccupiedPorts()
 * @method array ps(string $service)
 * @method array stats(string $service)
 */
class Docker
{

}
