  <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">TMS - Tempat Motor Sumedang</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li >
							<a href="{{URL::to('/')}}"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li >
							<a href="{{URL::to('/show')}}"><span aria-hidden="true" class="glyphicon glyphicon-th"></span><br>List 
							Motor</a>
						</li>
						
						<li>
							<a href="{{URL::to('/about')}}"><span aria-hidden="true" class="icon_mail"></span><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Slider -->
        <div class="slider-container">
            <div class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('blog/img/slider/3.jpg')}}">
                            <div class="flex-caption">
                       
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('blog/img/slider/2.jpg')}}">
                            <div class="flex-caption">
                       
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('blog/img/slider/1.jpg')}}">
                            <div class="flex-caption">
                            	
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1>Website tempat beli<span class="colored-text">Motor</span>
	            		<p>
	            		Murah & 
	            		Terpercaya
	            		daerah Sumedang dengan <span class="colored-text">metode pembayaran langsung ke tempat</span> 
	            		</p>	
	            	</div>
            	</div>
        	</div>
        </div>