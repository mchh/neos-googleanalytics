<?php
declare(strict_types=1);

namespace Neos\GoogleAnalytics\Exception;

/*
 * This file is part of the Neos.GoogleAnalytics package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\GoogleAnalytics\Exception;

/**
 * Analytics are not available (e.g. node is not yet published)
 */
class AnalyticsNotAvailableException extends Exception
{
}
