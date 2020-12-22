@extends('layouts.master')
@section('title','Images')
@section('content')

<style type="text/css">
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
				<h1>Images Page</h1>
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://www.w3schools.com/css/img_5terre.jpg">
							<img src="https://www.w3schools.com/css/img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>


				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://www.w3schools.com/css/img_forest.jpg">
							<img src="https://www.w3schools.com/css/img_forest.jpg" alt="Forest" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>

				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://www.w3schools.com/css/img_lights.jpg">
							<img src="https://www.w3schools.com/css/img_lights.jpg" alt="Northern Lights" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>

				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://www.w3schools.com/css/img_mountains.jpg">
							<img src="https://www.w3schools.com/css/img_mountains.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2016/03/09/10/37/light-bulb-1246043_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2016/03/09/10/37/light-bulb-1246043_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2014/12/15/17/16/pier-569314_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2014/12/15/17/16/pier-569314_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2016/02/19/11/19/office-1209640_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2016/02/19/11/19/office-1209640_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2015/06/08/15/11/typewriter-801921_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2015/06/08/15/11/typewriter-801921_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2015/03/17/14/05/sparkler-677774_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2015/03/17/14/05/sparkler-677774_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="responsive">
					<div class="gallery">
						<a target="_blank" href="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378_960_720.jpg">
							<img src="https://cdn.pixabay.com/photo/2014/05/02/21/50/laptop-336378_960_720.jpg" alt="Mountains" width="600" height="400">
						</a>
						<div class="desc"></div>
					</div>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

@endsection