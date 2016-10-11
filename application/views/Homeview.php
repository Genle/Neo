<?php 
	if(isset($title) && !empty($title))
		$data['title'] = $title;
	else
		$data['title'] =$data['title'] = "empty";
    $this->load->view('layouts/header', $data);
?>



<div class="container marketing">
	
	<script type="text/ng-template" id="publishView.html">
      <!-- Publish part-->
      <div ng-controller="publishController as $ctrl" class="pub-btn">
	      <div class="modal fade">
		      	<div class="modal-dialog">
		      		<div class="modal-content">
		      			<div class="modal-header">
		      				<h4 class="modal-title">Publish</h4>
		      			</div>
		      			<div class="modal-body">
					      	<form action="">
					      		<div class="form-group">
						      		<label for="">Non:</label>
						      		<input type="text" class="form-control">
					      		</div>
					      		<div class="form-group">
						      		<label for="">Vil:</label>
						      		<input type="text" class="form-control">
					      		</div>

					      		<div class="form-group">
						      		<label for="">Pwoblem:</label>
						      		<textarea name="" id="" cols="60" rows="3" class="form-control"></textarea>
					      		</div>

					      		<div class="form-group">
						      		<label for="">Solisyon:</label>
						      		<textarea name="" id="" cols="60" rows="3" class="form-control"></textarea>
					      		</div>
					      	</form>
		      				
		      			</div>
		      			<div class="modal-footer">
		      				<input type="button" class="btn-success btn" value="Publish" ng-click="submitForm()" />
		      				<input type="button" class="btn btn-danger" value="Cancel" ng-click="cancelForm()" />
		      			</div>
		      		</div><!-- modal-content -->
		      	</div><!-- modal-dialog -->
	      </div><!-- modal -->
	      </script>
      	<button class="modal-btn" type="button" ng-click="$ctrl.open()"><img class="btn-p" src=<?php echo base_url()."/assets/img/pub-btn.png"?> alt=""></button>
      </div>
     
      <!-- <div class="container publish">
	      	<div class="test">
		      	<form action="">
		      		<div class="form-group">
			      		<label for="">Non:</label>
			      		<input type="text" class="form-control">
		      		</div>
		      		<div class="form-group">
			      		<label for="">Vil:</label>
			      		<input type="text" class="form-control">
		      		</div>

		      		<div class="form-group">
			      		<label for="">Pwoblem:</label>
			      		<textarea name="" id="" cols="60" rows="3" class="form-control"></textarea>
		      		</div>

		      		<div class="form-group">
			      		<label for="">Solisyon:</label>
			      		<textarea name="" id="" cols="60" rows="3" class="form-control"></textarea>
		      		</div>
		      	</form>
	      	</div>
      </div> -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

<?php
    $this->load->view('layouts/footer');
?>