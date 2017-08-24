    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h2>Accredited Specialist <br/>in Criminal Law</h2>
              <p>Lorem ipsum dolor sit amet,</br>consectetuer adipiscing elit. Aenean<br/>commodo ligula eget dolor.</p>
              <button class="btn btn-primary">Read more...</button>
          </div>
        </div>
      </div>
    </section>



		<?php if(isset($page) && count($page) > 0){
			include 'content/'.$page->page_id.'.php'; 
		}?>

