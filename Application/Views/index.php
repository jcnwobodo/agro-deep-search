<?php
/**
 * Phoenix Laboratories NG.
 * Author: J. C. Nwobodo (phoenixlabs.ng@gmail.com)
 * Project: BareBones PHP Framework
 * Date: 10/4/2015
 * Time: 12:17 PM
 */

include_once('header-1.php');
?>
<div class="text-center full-padding-top full-margin-top full-margin-bottom full-padding-bottom">
    <h1 class="page-header"><?php site_info('name'); ?> <small><sup><span class="glyphicon glyphicon-registration-mark"></span></sup></small></h1>
    <h5><label for="search">Deep Search</label></h5>
</div>
<div class="full-margin-top full-padding-top">
    <form name="search-form" method="get" enctype="application/x-www-form-urlencoded" action="<?php home_url('/'); ?>">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 text-center">
                <div class="form-group form-group-lg full-margin-top full-padding-top">
                    <input name="search" id="search" type="search" required class="form-control" placeholder="Search" value="<?= $data['search-term']; ?>"/>
                </div>
                <div class="form-group form-group-lg full-margin-top full-padding-top">
                    <button id="run-search" class="btn btn-lg btn-primary">
                        <span class="glyphicon glyphicon-search"></span> Search
                    </button>
                </div>
            </div>
        </div>
        <!--
        <hr/>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center">Work in Progress, <small style="font-style: oblique;">Please call back soon</small></h3>
            </div>
        </div>
        <hr/>
        -->
    </form>
</div>
<?php
$sticker = "navbar-fixed-bottom";
include_once("footer.php");
?>