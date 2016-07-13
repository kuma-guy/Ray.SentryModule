<?php
/**
 * This file is part of the Ray.SentryModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace Ray\SentryModule;

trait RavenClientInject
{
    /**
     * @var \Raven_Client
     */
    protected $ravenClient;

    /**
     * @param \Raven_Client $ravenClient
     *
     * @\Ray\Di\Di\Inject
     */
    public function setRavenClient(\Raven_Client $ravenClient = null)
    {
        $this->ravenClient = $ravenClient;
    }
}
