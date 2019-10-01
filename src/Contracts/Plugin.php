<?php

namespace Chriha\ProjectCLI\Contracts;

interface Plugin
{

    public function configure() : void;

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle() : void;

    /**
     * @return string
     */
    public static function pluginName() : string;

    /**
     * @return string
     */
    public static function pluginDescription() : string;

    /**
     * Returns the URL of the repository
     *
     * @return string
     */
    public static function pluginSource() : string;

    /**
     * @return string
     */
    public static function pluginVersion() : string;

}
