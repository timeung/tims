<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
        <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    </head>
    <body>
        <body  >
        
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" rel="home" href="#">Brand</a>
	</div>
	
	<div class="collapse navbar-collapse">
		
		<ul class="nav navbar-nav">
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
		</ul>
		
		<div class="col-sm-3 col-md-3 pull-right">
		<form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
		</div>
		</form>
		</div>
		
	</div>
</div>


<div class="row wrap">
  
  <!--left-->
  <div class="col-sm-3">
    
     <div class="row">
      <div class="col-xs-12">
        <h2>Side</h2>
    	<div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Content here..</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Content here..</div>
        </div>
        <hr>
	   </div>
      </div>
    	
    
  </div><!--/left-->
  
  <!--center-->
  <div class="col-sm-6">

    <div class="row">
      <div class="col-xs-12">
        <h2>Article Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.</p>
        <p class="lead"><button class="btn btn-default">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul>
      </div>
    </div>
    <hr>
    
    <div class="row">
      <div class="col-xs-12">
        <h2>Article Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.</p>
        <p class="lead"><button class="btn btn-default">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">4 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 7 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 56 Shares</a></li></ul>
      </div>
    </div>
    <hr>
              
    <div class="row">
      <div class="col-xs-12">
        <h2>Article Heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.</p>
        <p class="lead"><button class="btn btn-default">Read More</button></p>
        <p class="pull-right"><span class="label label-default">keyword</span> <span class="label label-default">tag</span> <span class="label label-default">post</span></p>
        <ul class="list-inline"><li><a href="#">1 Week Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul>
      </div>
    </div>
    <hr>
    
    
    
  </div><!--/center-->
  
  
  <!--right-->
  <div class="col-sm-3">
    
    <div class="row">
      <div class="col-xs-12">
        <h2>Side</h2>
    	<div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Content here..</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
            Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
            dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
            Aliquam in felis sit amet augue.</div>
        </div>
        <hr>
        <div class="panel panel-default">
         	<div class="panel-heading">Title</div>
         	<div class="panel-body">Content here..</div>
        </div>
        <hr>
	   </div>
      </div>
    
  </div><!--/right-->
  
  <hr>
  
</div><!-- /.container -->
        <script src="<?=base_url()?>js/jquery-1.11.0.min.js"></script>
    </body>
</html>
