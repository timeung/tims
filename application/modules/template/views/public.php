<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing Page || Welcome to  Textbook Information Management System</title>
        <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url("css/mypublic.css")?>"/>
        <style>
            #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }
      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                                <a href="<?=base_url("")?>"><img src="<?=base_url("img/logo.png")?>" class="img-rounded"/></a>
                                                                <a class="navbar-brand" href="<?=base_url()?>">TIMS</a>
                                                                <p class="navbar-text">ກະຊວງສືກສາທີການ ແລະ ກິລາ ກົມ ການເງິນ, ພະແນກ ຄຸ້ມຄອງຊັບສິນ ແລະ ສະໜອງວັດຖຸ</p>
                                                                </div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="<?=base_url("about")?>">About</a>
						</li>
                                                <li>
                                                    <a href="<?=base_url("download")?>">Download</a>
						</li>

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others Page<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
                                                                    <a href="<?=base_url("login")?>">TextBook</a>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
 <div class="container">
                <div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<div class="carousel slide" id="carousel-101430">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-101430">
							</li>
							<li data-slide-to="1" data-target="#carousel-101430">
							</li>
							<li data-slide-to="2" data-target="#carousel-101430">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
                                                                                                                                <img alt="" src="<?=base_url("photo/p13.jpg")?>" />
								<div class="carousel-caption">
									<h4>
										<!--First Thumbnail label-->
									</h4>
									<p>
										<!--Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.-->
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?=base_url("photo/p7.jpg")?>" />
								<div class="carousel-caption">
									<h4>
										<!--Second Thumbnail label-->
									</h4>
									<p>
										<!--Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.-->
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="<?=base_url("photo/p5.jpg")?>" />
								<div class="carousel-caption">
									<h4>
										<!--Third Thumbnail label-->
									</h4>
									<p>
										<!--Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.-->
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-101430" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-101430" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<div class="col-md-2 column">
				</div>
			</div>
     
	
                                    <?php
                                      $this->load->view("$modules/$file_view");
                                    ?>
	
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<div id="footer">
                                                                                <div class="container">
                                                                                  <p class="muted credit">Copyright © 2014 tims.laosbg.gov.la  .All rights reserved. Develop by Eung</p>
                                                                                </div>
                                                                              </div>

				</div>
				<div class="col-md-2 column">
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
                    <div class="container">
                        
                    
			
                        </div>
		</div>
	</div>
</div>
        
    <!-- JavaScript -->
        
        <script src="<?=base_url('js/jquery-1.11.0.min.js')?>"></script>
        <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
    </body>
</html>