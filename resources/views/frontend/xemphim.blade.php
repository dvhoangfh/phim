@extends('layout_frontend.header')
@section('content')
<?php
if($linkphimbo != null){
	$link = $linkphimbo->link;
}
else{
	$link = $data->linkphim;
}
$api = 'https://videoapi.io/api/getlink?key=b9042a2a2234c2bc3376e13559b1d99b&link='.$link.'&json=jwplayer';
$sources = curl($api);
// pr($sources);
// pr($sources[0]['file']);
function curl($url)
{
	$ch = @curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	$page = curl_exec($ch);
	curl_close($ch);
	return $page;
}
?>
<!-- single -->
<div class="single-page-agile-main">
	<div class="container">
		<div class="single-page-agile-info">
               <!-- /movie-browse-agile -->
       		<div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="video-grid-single-page-agileits">
							<div id="video"></div>
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<div class="single-agile-shar-buttons">
								<ul>
									<li>
										<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
										<script>(function(d, s, id) {
										  var js, fjs = d.getElementsByTagName(s)[0];
										  if (d.getElementById(id)) return;
										  js = d.createElement(s); js.id = id;
										  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
										  fjs.parentNode.insertBefore(js, fjs);
										}(document, 'script', 'facebook-jssdk'));</script>
									</li>
									<li>
										<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
									</li>
									<li>
										<!-- Place this tag where you want the +1 button to render. -->
										<div class="g-plusone" data-size="medium"></div>

										<!-- Place this tag after the last +1 button tag. -->
										<script type="text/javascript">
										  (function() {
											var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
											po.src = 'https://apis.google.com/js/platform.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="list-phim">
						@if($data_phimbo !='')
							@foreach($data_phimbo as $key => $val)
							<a href="{{route('welcome.xemphim',$data->slug.'-tap-'.$val->tieude.'-'.$data->id)}}"><span class="btn btn-warning">{{$val->tieude}}</span></a>
							@endforeach
						@endif
					</div>
					
					
					<div class="all-comments">
						<div class="all-comments-info">
							<h2>{{ $data->ten_phim}}</h2>
							<div class="agile-info-wthree-box">
								<div>
									<p>Luợt xem : <span class="text-info-phim">133,653</span></p>
								</div>
								<div class="gioithieuphim">
									<p>Năm phát hành : <span class="text-info-phim">{{ $data->namsanxuat}}</span></p>
								</div >
								<div class="gioithieuphim">
									<p>Thời lượng : <span class="text-info-phim"> {{ $data->thoiluong}}</span></p>
								</div>
								<div class="gioithieuphim">
									<p>Thể loại : <span class="text-info-phim">
									 	@foreach ($theloaiphim as $key => $val)
											@if($data->id == $val->idphim)
												{{ $val->ten_theloaiphim}},
											@endif
										@endforeach
									 </span></p>
								</div>
								<div class="gioithieuphim">
									<p>Quốc gia : <span class="text-info-phim"> Việt Nam</span></p>
								</div>
								<div class="gioithieuphim">
									<p>Đạo diễn : <span class="text-info-phim">{{ $data->daodien}}</span></p>
								</div>
								<div class="gioithieuphim">
									<p>Diễn viên : <span class="text-info-phim"> {{ $data->dienvien}}</span></p>
								</div>
								<div class="gioithieuphim">
									<p>Nội dung phim : </p>
									<p>{{ $data->noidung}}</p>
								</div>
							</div>
						</div>
						<div class="media-grids">
							<div class="media">
								<div id="fb-root"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=317789995228802";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));
									</script>
									<div class="fb-comments" data-href="http://localhost:8000/xem-phim/phim-dragon-ball-super-tap-10-12.html" data-width="700" data-numposts="5"></div>
							</div>
						</div>
					</div>

				</div>
				<!-- END COL-MD-8 -->

				<div class="col-md-4 single-right">
					<h4 class="text-phimdecu w3_home_popular">Phim đề cử</h4>
					<div class="single-grid-right">
					@foreach ($phimdecu as $key => $val)
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif"><img src="{{ $val->img_phim }}" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif" class="title"> {{ $val->ten_phim }}</a>
								<p class="author"><a href="#" class="author">{{ $val->dienvien }}</a></p>
								<p class="views content_decu">{{ $val->noidung }}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					@endforeach
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //movie-browse-agile -->
			<!-- END COL-MD-4 -->

			<!--body wrapper start-->
			<h4 class="latest-text text-phimlienquan">Phim liên quan</h4>
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
					@foreach ($phimlienquan as $key => $val)
						<div class="item">
							<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
								<a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif" class="hvr-shutter-out-horizontal"><img src="{{ $val->img_phim }}" title="{{ $val->ten_phim }}" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6 class="textlimit"><a href="@if($val->phimbo == 1)
													{{route('welcome.xemphim',$val->slug.'-tap-1-'.$val->id)}}
												@else
													{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}
												@endif">{{ $val->ten_phim }}</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>{{ $val->namsanxuat }}</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>{{ $val->tieude }}</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
			<!--body wrapper end-->

		</div>
		<!-- //w3l-latest-movies-grids -->
	</div>	
</div>
	<!-- //w3l-medile-movies-grids -->
@endsection
@section('script')
<script type="text/javascript" src="https://api.blogit.vn/BITplayer/jwplayer/jwplayer-7.7.4/jwplayer.js"></script>
<script type="text/javascript">
	jwplayer.key = "rqQQ9nLfWs+4Fl37jqVWGp6N8e2Z0WldRIKhFg==";
	var playerInstance = jwplayer("video");
		playerInstance.setup({
			sources: <?php echo($sources)?>,
			controls: true,
			displaytitle: true,
			aspectratio: "16:9",
			fullscreen: "true",
			autostart: false,
			abouttext: "Hoho phim",
			aboutlink: "hohophim.com",
		});
</script>
<script type="text/javascript">
        $(document).ready(function() {
            var fullurl = window.location.href;
            $("a[href='"+fullurl+"']").children().addClass('myactive');
        });
</script>
@endsection