@extends('layouts/app', ['title' => 'MuroDev.uz - Asosiy'])
@section('content')
	<!-- START HOME -->
	<section id="home" class="templatemo-home">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>Murodjon Shomuratov</strong></h1>
					<h2 class="tm-home-subtitle">Ijodiy direktor</h2>
					<p>Men professional <strong>Web</strong> dasturchiman. Menga bo`lgan ishonchingiz uchun <strong>RAHMAT!</strong></p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">Boshlaylik</a>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- START work -->
	<section id="work" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-11">
					<h2 class="title">Bizning <strong>xizmatlar</strong></h2>						
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-link"></i>
						<h3 class="text-uppercase tm-work-h3">Web sayt</h3>
						<hr>
						<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-shopping-cart"></i>
						<h3 class="text-uppercase tm-work-h3">internet do`kon</h3>
						<hr>
						<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
						<i class="fa fa-pencil fa-fw"></i>
						<h3 class="text-uppercase tm-work-h3">web dastur</h3>
						<hr>
						<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna.</p> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END work -->

	<!-- START PORTFOLIO -->
	<section id="portfolio" class="tm-portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounce">
					<div class="title">
						<h2 class="tm-portfolio-title">Mening <strong>Portfoliyam</strong></h2>
					</div>

					<!-- START ISO SECTION -->
					<div class="iso-section">
						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">
								@foreach ($ports as $port)
									
								
								<div class="iso-box  col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="{{'/storage/'.$port->thumb}}" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<a target="_blank" href="{{$port->ssilka}}"><h3 class="portfolio-item-title">{{$port->name}}</h3></a>
											{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p> --}}
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PORTFOLIO -->
	@include('contact')
	
@endsection