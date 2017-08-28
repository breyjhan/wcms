

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                </div>
            </div>

            <div class="clearfix square">
                <div class="row">
                    <div class="col-md-12">
                        <label>First Name :</label> 
                        <div class="form-control"><?php echo $user_info->ui_fname; ?></div>
                    </div>
                    <div class="col-md-12">
                        <label>Last Name : </label> 
                        <div class="form-control"><?php echo $user_info->ui_lname; ?></div>
                    </div>
                    <div class="col-md-12">
                        <label>Address Line 1 :</label> 
                        <div class="form-control"><?php echo $user_info->ui_address; ?></div>
                    </div>

                    <div class="col-md-12">
                        <label>Address Line 2 (Option) :</label> 
                        <div class="form-control"><?php echo $user_info->ui_address2; ?></div>
                    </div>

                    <div class="col-md-12">
                        <label>Town / City :</label> 
                        <div class="form-control"><?php echo $user_info->ui_town_city ?></div>
                    </div>

                    <div class="col-md-12">
                        <label>Postal :</label> 
                        <div class="form-control"><?php echo $user_info->ui_postal ?></div>
                    </div>

                    <div class="col-md-12">
                        <label>Country :</label> 
                        <div class="form-control"><?php echo $user_info->ui_country; ?></div>
                    </div>

                    <div class="col-md-12">
                            <h3>Contact Details</h3>
                    </div>
                    <div class="col-md-12">
                        <label>Contact:</label> 
                        <div class="form-control"><?php echo $user_info->ui_contact; ?></div>
                    </div>
                    <div class="col-md-12">
                        <label>Email: </label> 
                        <div class="form-control"><?php echo $user_info->ui_email; ?></div>
                    </div>
                    <div class="col-md-12 alignright">
                        <a href="<?php url('user/update_profile'); ?>" class="btn btn-success">Update</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

