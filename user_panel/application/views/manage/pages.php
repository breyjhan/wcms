
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $site->s_name; ?></h1>
                </div>
            </div>

            <div class="row">
                
	            <div class="col-md-12">
                    <?php notify() ?>
                    <a type="button" class="btn btn-primary addpage" data-toggle="modal" data-target="#addpage">Add Page</a>
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
                                        <td><a href="'.$value->page_id.'">'.$value->page_title.'</a></td><td><a href="'.$site->s_url.'/'.($value->page_slug != 'home' ? $value->page_slug : '').'" target="_blank">View</a> | <a href="'.$value->page_id.'">Edit</a> | <a href="'.$value->page_id.'/delete">Delete</a></td>
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

    <!-- Modal -->
    <form id="addpage" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Page</h4>
          </div>
          <div class="modal-body">
            <div id="msg"></div>
            <label>Page Title</label>
            <input type="text" name="title" class="form-control">
            <input type="hidden" name="account" value="<?php echo $account; ?>" class="form-control">

            <div id="taber">
                <h3>Basic SEO (optional)</h3>
                <div class="tab">
                    <label>Description:</label>
                    <textarea name="description" class="form-control"></textarea>                    
                    <br/>
                    <label>Keywords:</label>
                    <textarea name="keywords" class="form-control"></textarea>
                    <br/>
                    <label>Slug:</label>
                    <?php echo $site->s_url; ?>/<input type="text" name="slug">
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>

      </div>
    </form>

