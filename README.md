# Bugsnag plugin for Craft CMS

Plugin that allows you to log errors/exceptions in Craft to Bugsnag.

## Installation

To install Bugsnag, follow these steps:

1. Download & unzip the file and place the `bugsnag` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/sjelfull/Craft-Bugsnag.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `bugsnag` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Bugsnag works on Craft 2.4.x and Craft 2.5.x.

## Bugsnag Overview

Bugsnag's cross platform error monitoring automatically detects crashes in your applications, letting you ship with confidence.

## Configuring Bugsnag

1. Copy  the bugsnag.php configuration file into your `craft/config` folder.
2. Update `serverApiKey` with a API key from your Bugsnag project.
2. (Optionally) Set the `environment` configuration setting to something. Defaults to `production`.

## Using Bugsnag

It will automatically log most exceptions/errors. If you want to log a exception/error from an custom plugin, you can use one of the two service methods:

- For exceptions: `craft()->bugsnag->notifyException($exception);`
- For errors: `craft()->bugsnag->notifyError($message);`

## Bugsnag Changelog

### 1.0.0 -- 2016.06.24

* Initial release

Brought to you by [Fred Carlsen](http://sjelfull.no)