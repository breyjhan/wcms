

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $sites->s_name; ?></h1>
                </div>
            </div>

            <div class="row">
                    <ul class="inline alignright">
                        <li>
                            <a href="<?php echo $sites->s_url; ?>" target="_blank" class="btn btn-primary"><i class="fa fa-eye fa-fw"></i> View Site</a>
                        </li>
                    </ul>
            </div>
            <div class="clearfix square">
                <div class="row">
                    <div class="col-md-6">
                        <label>Domain:</label> 
                        <div class="form-control"><a href="<?php echo $sites->s_url; ?>" target="_blank"><?php echo $sites->s_url; ?></a></div>
                    </div>
                    <div class="col-md-12"><br/></div>
                    <div class="col-md-6">
                        <label>Package: <a href="user/site-upgrade">Upgrade</a></label> 
                        <div class="form-control">10 Page CMS</div>
                    </div>
                    <div class="col-md-6">
                        <label>Storage:</label> 
                        <div class="form-control">24/500 MB</div>
                    </div>
                    <div class="col-md-12">
                            <br/>
                    </div>
                    <div class="col-md-6">
                        <label>Registered:</label> 
                        <div class="form-control">November 07, 1992</div>
                    </div>
                    <div class="col-md-6">
                        <label>Expired: <a href="user/site-check-renew">Renew</a></label> 
                        <div class="form-control">November 07, 2018</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

