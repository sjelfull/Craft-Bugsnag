<?php
/**
 * Bugsnag plugin for Craft CMS
 *
 * Bugsnag Service
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   Craft-Bugsnag
 * @since     1.0.0
 */

namespace Craft;

class BugsnagService extends BaseApplicationComponent
{
    protected $bugsnag;

    /**
     * Init Bugsnag.
     */
    public function init()
    {
        parent::init();

        // Require Bugsnag vendor code
        require_once __DIR__.'/../vendor/autoload.php';
        $environment = craft()->config->get('environment', 'bugsnag') ?? CRAFT_ENVIRONMENT;

        // Init Bugsnag
        $serverApiKey = craft()->config->get('serverApiKey', 'bugsnag');
        $this->bugsnag = new \Bugsnag_Client($serverApiKey);
        $this->bugsnag->setSendEnvironment(true);
        $this->bugsnag->setReleaseStage($environment);
    }

    public function notifyException($exception) {
        $this->bugsnag->notifyException($exception);
    }

    public function notifyError($error) {
        $this->bugsnag->notifyError('CraftError', $error);
    }

}