<?php
/**
 * This file is part of the Ray.SentryModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\SentryModule;

use Ray\Di\AbstractModule;
use Ray\Di\Scope;

class SentryModule extends AbstractModule
{
    /**
     * @var string
     */
    private $dsn;

    /**
     * @var array
     */
    private $options;

    /**
     * @param string $dsn
     * @param array  $options
     */
    public function __construct($dsn, array $options = [])
    {
        $this->dsn = $dsn;
        $this->options = $options;
    }

    protected function configure()
    {
        $this->bind(\Raven_Client::class)->in(Scope::SINGLETON);
        $this->bind(\Raven_Client::class)->toConstructor(\Raven_Client::class, 'options_or_dsn=dsn,options=options');
        $this->bind()->annotatedWith('dsn')->toInstance($this->dsn);
        $this->bind()->annotatedWith('options')->toInstance($this->options);
    }
}
