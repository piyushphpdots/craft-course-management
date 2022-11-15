<?php
/**
 * Craft Course Management plugin for Craft CMS 3.x
 *
 * Course Management with Booking System
 *
 * @link      https://phpdots.com
 * @copyright Copyright (c) 2022 PHPDots Technologies
 */

namespace piyushphpdots\craftcoursemanagement\variables;

use piyushphpdots\craftcoursemanagement\CraftCourseManagement;

use Craft;

/**
 * Craft Course Management Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.craftCourseManagement }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    PHPDots Technologies
 * @package   CraftCourseManagement
 * @since     1.0.0
 */
class CraftCourseManagementVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.craftCourseManagement.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.craftCourseManagement.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
