

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                </div>
            </div>

            <div class="clearfix">
            <form class="edit">
                <div class="row">
                    <div class="col-md-12">
                        <label>First Name :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_fname; ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label>Last Name : </label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_lname; ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label>Address Line 1 :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_address; ?>"/>
                    </div>

                    <div class="col-md-12">
                        <label>Address Line 2 (Option) :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_address2; ?>"/>
                    </div>

                    <div class="col-md-12">
                        <label>Town / City :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_town_city ?>"/>
                    </div>

                    <div class="col-md-12">
                        <label>Postal :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_postal ?>"/>
                    </div>

                    <div class="col-md-12">
                        <label>Country :</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_country; ?>"/>
                    </div>

                    <div class="col-md-12">
                            <h3>Contact Details</h3>
                    </div>
                    <div class="col-md-12">
                        <label>Contact:</label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_contact; ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label>Email: </label> 
                        <input type="text" class="form-control" value="<?php echo $user_info->ui_email; ?>"/>
                    </div>
                    <div class="col-md-12 alignright">
                        <input type="submit" class="btn btn-success" value="submit"/>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </div>

