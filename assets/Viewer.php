<?php
/**
 * @author Pinaki Das <vtigerdevel@gmail.com>
 * @copyright 2022 - LimitN Technologies pvt limited
 */

require_once 'inc/libs/smarty3/SmartyBC.class.php';

class Viewer extends SmartyBC
{
    /**
     * constructor - set the templateDir and compileDir for the Smarty files
     */
    function __construct()
    {
        parent::__construct();

        $templatesDir = 'templates/';
        $compileDir = 'test/templates_c/';

        if (!file_exists($compileDir)) {
            mkdir($compileDir, 0777, true);
        }
        $this->setTemplateDir(array($templatesDir));
        $this->setCompileDir($compileDir);
    }
}