
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $sites->s_name; ?></h1>
                </div>
            </div>

            <div class="row">
	            <div class="col-md-12">
	             	<a href="<?php url('site/manage/1/new_page'); ?>" class="btn btn-primary">Add Page</a>
	            </div>
            </div>
            <div class="row">
	            <div class="col-md-12">
	             	<hr/>
	            </div>
            </div>
            <div class="padding-md clearfix">
                <div class="row">

                    <div class="col-md-12">

                	<table style="width: 100%">
                	<tr>
                		<th>Page Name</th>
                		<th>Action</th>
                	</tr>
            		<?php 
                        if($pages != '' && count($pages) > 0){
                            foreach ($pages as $value) {

                                echo '<tr>
                                        <td><a href="'.$value->page_id.'">'.$value->page_title.'</a></td><td><a href="'.$sites->s_url.'/'.($value->page_slug != 'home' ? $value->page_slug : '').'" target="_blank">View</a> | <a href="'.$value->page_id.'">Edit</a> | <a href="'.$value->page_id.'/delete">Delete</a></td>
                                    </tr>';
                            }
                        }else{
                        	echo '<tr><td>No Page Found!</td></tr>';
                        }
                    ?>
                    </table>


                	</div>
                </div>
            </div>

        </div>
    </div>

