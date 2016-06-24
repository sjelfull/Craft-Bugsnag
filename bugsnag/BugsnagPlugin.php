<?php
/**
 * Bugsnag plugin for Craft CMS
 *
 * Plugin that allows you to log errors/exceptions in Craft to Bugsnag.
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   Craft-Bugsnag
 * @since     1.0.0
 */

namespace Craft;

class BugsnagPlugin extends BasePlugin
{
    /**
     * Initialize Bugsnag.
     */
    public function init()
    {
        // Log Craft Exceptions to Bugsnag
        craft()->onException = function ($event) {
            craft()->bugsnag->notifyException($event->exception);
        };

        // Log Craft Errors to Bugsnag
        craft()->onError = function ($event) {
            craft()->bugsnag->notifyError($event->message);
        };
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Bugsnag');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Allows you to log errors/exceptions in Craft to Bugsnag.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/sjelfull/Craft-Bugsnag/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/sjelfull/Craft-Bugsnag/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Fred Carlsen';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://sjelfull.no';
    }
}