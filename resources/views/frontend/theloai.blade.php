@extends('layout_frontend.header')
@section('content')

<!-- <div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div> -->
<style type="text/css" media="screen">
	.active{
		padding-right: 4px;
		padding-left: 4px;
	}
	.active a{
		background-color: #222 !important;
    	border-color: #222 !important;
	}	
</style>
<div class="w3l-agile-horror">
       <!-- /w3l-medile-movies-grids -->
			<div class="w3l-medile-movies-grids">
				<!-- /movie-browse-agile -->
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text">Phim {{$data_theloai->ten_theloaiphim}} </h4>
								</div>
								<div class="container">
									<!-- /latest-movies1 -->
							    <div class="browse-inner-come-agile-w3">
							    	@foreach ($data as $key => $val)
							   		<div class="col-md-2 w3l-movie-gride-agile">
										<a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif" class="hvr-shutter-out-horizontal"><img src="{{ $val->img_phim }}" title="{{ $val->ten_phim }}" alt=" " width="182px" height="268px" />
										     <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
										</a>
										<div class="mid-1">
											<div class="w3l-movie-text">
												<h6 class="textlimit" ><a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif">{{ $val->ten_phim }}</a></h6>							
											</div>
											<div class="mid-2">
												<p>{{ $val->namsanxuat }}</p>
												<div class="block-stars">
													<ul class="w3l-ratings">
														    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
															
															 <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
															<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>		
										</div>
								 	    <div class="ribben">
											<p>NEW</p>
										</div>	
									</div>
									@endforeach
									<div class="clearfix"> </div>
								</div>
							<!-- //latest-movies1 -->
				<!--//browse-agile-w3ls -->
						
						<div class="blog-pagenat-wthree">
						@if (count ($data))
						<?php $url_parameter = ''; $count = 0; ?>
					
						{{ $data->appends([])->links() }}
						@endif
						</div>
					</div>
				<!-- //movie-browse-agile -->
		</div>
	      <!-- //w3l-medile-movies-grids -->
	</div>
	</div>	
</div>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('li[class="active"] span').replaceWith('<a>' + $('li[class="active"] span').html() +'</a>');
			$('li[class="disabled"] span').replaceWith('<a>' + $('li[class="disabled"] span').html() +'</a>');
			
		});
	</script>
@endsection