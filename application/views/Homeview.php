<?php 
	if(isset($title) && !empty($title))
		$data['title'] = $title;
	else
		$data['title'] =$data['title'] = "empty";
    $this->load->view('layouts/header', $data);
?>
    <div class="container marketing">
<!--
        <div class="row">
            <div class="col-md-8">
                <input class="post-input" type="text" placeholder="Comment">
                <button class="post-btn" type="submit">Post</button>
            </div>
        </div>
-->
        <div class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Pibliye</p>
                    <button class="delete"></button>
                </header>
                <section class="modal-card-body">
                    <div class="control is-horizontal">
                        <p class="control">
                            <input class="input" type="text" placeholder="Ekri Non w vle"> </p>
                    </div>
                    <div class="control is-horizontal">
                        <p class="control">
                            <input class="input" type="text" placeholder="Antre vil ki konsene a"> </p>
                    </div>
                    <div class="control is-horizontal">
                        <p class="control ">
                            <textarea class="textarea" placeholder="Antre pwoblem ou detekte a" cols="3" rows="3"></textarea>
                        </p>
                    </div>
                    <div class="control is-horizontal">
                        <p class="control ">
                            <textarea class="textarea" placeholder="Di ki solisyon ou panse ki ka aplike " cols="3" rows="3"></textarea>
                        </p>
                    </div>
                </section>
                <footer class="modal-card-foot"> <a class="button is-primary">Pibliye</a> <a class=" cancel button">Femen</a> </footer>
            </div>
        </div>
        <div class="pub-btn">
            <button id="btn-p"><img class="btn-p" src=<?php echo base_url(). "/assets/img/pub-btn.png"?> alt=""></button>
        </div>
        <!-- START THE FEATURETTES -->
        <!--      <hr class="featurette-divider">-->
        <div class="row featurette">
           <div class="col-md-5"> <img class="featurette-image img-responsive center-block" src="http://localhost/Neo/assets/img/security.jpg" alt="Generic placeholder image"> </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Cyber security <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Computer security, also known as cyber security or IT security, is the protection of information systems from theft or damage to the hardware, the software, and to the information on them, as well as from disruption or misdirection of the services they provide.</p>
                <!--          <hr>-->
                <div class="col-md-12 comment-box">
                    <div class="col-md-6"> 
                        <a class="btn btn-default" href="">Rate Publication</a>
                     <button class="post-btn-1 btn btn-default">Comment</button> 
                     </div>
                   
                    <div class="col-md-4 col-md-push-3"><a href="#">8 Comments</a></div>
                </div>
            </div>
            
        </div>
            <div class="row post-comment post-1 ">
<!--               <h5>Cyber security</h5>-->
                <div class="post-comment-inside">
                    <input class="post-input" type="text" placeholder="Comment">
                    <button class="post-btn post-btn-1" type="submit">Post</button>
                </div>
                <div class="comment-1">
                   
                    <p>@Angelo je suis le roi</p>
                </div>
            </div>
        
        <!--      <hr class="featurette-divider">-->
        <div class="row featurette">
            <div class="col-md-5 "> <img class="featurette-image img-responsive center-block" src="https://static.pexels.com/photos/90807/pexels-photo-90807.jpeg" alt="Generic placeholder image"> </div>
            <div class="col-md-7 ">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <div class="col-md-12 comment-box">
                    <div class="col-md-6"> <a class="btn btn-default" href="">Rate Publication</a> <a class="btn btn-default" style="margin-left:12px;" href="">Comment</a> </div>
                    <div class="col-md-4 col-md-push-3"><a href="#">8 Comments</a></div>
                </div>
            </div>
        </div>
        
         <div class="row post-comment ">
<!--               <h5>Cyber security</h5>-->
                <div class="post-comment-inside">
                    <input class="post-input" type="text" placeholder="Comment">
                    <button class="post-btn" type="submit">Post</button>
                </div>
            </div>
        
        <!--      <hr class="featurette-divider">-->
        <div class="row featurette">
            <div class="col-md-5"> <img class="featurette-image img-responsive center-block" src="https://static.pexels.com/photos/185764/pexels-photo-185764.jpeg" alt="Generic placeholder image"> </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                <div class="col-md-12 comment-box">
                    <div class="col-md-6"> <a class="btn btn-default" href="">Rate Publication</a> <a class="btn btn-default comment-btn" style="margin-left:12px;" href="">Comment</a> </div>
                    <div class="col-md-4 col-md-push-3"><a href="#">8 Comments</a></div>
                </div>
            </div>
        </div>
         <div class="row post-comment ">
<!--               <h5>Cyber security</h5>-->
                <div class="post-comment-inside">
                    <input class="post-input" type="text" placeholder="Comment">
                    <button class="post-btn" type="submit">Post</button>
                </div>
            </div>
        <!--      <hr class="featurette-divider">-->
        <!-- /END THE FEATURETTES -->
        <?php
    $this->load->view('layouts/footer');
?>