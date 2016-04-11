<?php
/**
 * Phoenix Laboratories NG.
 * Author: J. C. Nwobodo (phoenixlabs.ng@gmail.com)
 * Project: BareBones PHP Framework
 * Date:    1/7/2016
 * Time:    8:11 PM
 **/

namespace Application\Controllers;

use System\Request\RequestContext;


use Application\Models\Lga;
use Application\Models\Zone;

class Default_Controller extends A_Controller
{
    protected function doExecute(RequestContext $requestContext)
    {
        $data = array('page-title'=>"Search");

        $requestContext->setResponseData($data);
        $requestContext->setView('index.php');
    }
}