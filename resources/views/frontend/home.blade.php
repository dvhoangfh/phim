@extends('layout_frontend.header')
@section('content')
@include('layout_frontend.banner',$data_banner)
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="w3_agile_banner_bottom_grid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($data_phimmoi as $key => $val)
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
    </div>
</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-youtube"></i></a></li>
            <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-google"></i></a></li>
            <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>                  
        </ul>
  </nav>
</div>
<!-- general -->
<div class="general">
    <h4 class="latest-text w3_latest_text">Top phim đề cử</h4>
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Phim đề cử</a></li>
                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Xem nhiều nhất</a></li>
                <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Phim hay trong ngày</a></li>
                <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Phim hay trong tháng</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <div class="w3_agile_featured_movies">
                        @foreach($data_phimhay as $key => $val)
                            <div class="col-md-2 w3l-movie-gride-agile">
                                <a href="{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $val->img_phim }}" title="{{ $val->ten_phim }}" class="img-responsive" alt=" " />
                                    <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6 class="textlimit"><a href="{{route('welcome.xemphim',$val->slug.'-'.$val->id)}}">{{ $val->ten_phim }}</a></h6>                            
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
                                    <p>HAY</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{ $val->img_phim }}" title="{{ $val->ten_phim }}" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6 ><a href="single.html">Assassin's Creed 3</a></h6>                           
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Bad Moms</a></h6>                         
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Central Intelligence</a></h6>                         
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
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
                    <div class="clearfix"> </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Light B/t Oceans</a></h6>                         
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m11.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">X-Men</a></h6>                            
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">The BFG</a></h6>                          
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
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
                            <p>NEW</p>
                        </div>
                    </div>
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m17.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Peter</a></h6>                            
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                    <div class="clearfix"> </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m22.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Assassin's Creed 3</a></h6>                           
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Bad Moms</a></h6>                         
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Central Intelligence</a></h6>                         
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Don't Think Twice</a></h6>                            
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
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
                    <div class="col-md-2 w3l-movie-gride-agile">
                        <a href="single.html" class="hvr-shutter-out-horizontal"><img src="public/frontend/images/m23.jpg" title="album-name" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="single.html">Dead Island 2</a></h6>                            
                            </div>
                            <div class="mid-2 agile_mid_2_home">
                                <p>2016</p>
                                <div class="block-stars">
                                    <ul class="w3l-ratings">
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
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
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //general -->
<!-- Latest-tv-series -->
<div class="Latest-tv-series">
    <h4 class="latest-text w3_latest_text w3_home_popular">Phim lẻ <a href=""></h4>
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 0;$i < 6; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 6;$i < 12; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 12;$i < 18; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 18;$i < 24; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 24;$i < 28; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 24;$i < 28; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- End  -->
<!-- Latest-tv-series -->
<div class="Latest-tv-series">
    <h4 class="latest-text w3_latest_text w3_home_popular">Phim bộ <a href=""></h4>
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 0;$i < 6; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>6/20</p>
                                        </div>
                                    </div>
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 6;$i < 12; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 12;$i < 18; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 18;$i < 24; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="agile_tv_series_grid">
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 24;$i < 28; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="agileinfo_flexislider_grids">
                                @for($i = 24;$i < 28; $i++)
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" class="hvr-shutter-out-horizontal"><img src="{{ $data_phimle[$i]->img_phim}}" title="{{ $data_phimle[$i]->ten_phim}}" class="img-responsive" alt=" " />
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6 class="textlimit"><a href="{{route('welcome.xemphim',$data_phimle[$i]->slug.'-'.$data_phimle[$i]->id)}}" title="{{ $data_phimle[$i]->ten_phim}}">{{ $data_phimle[$i]->ten_phim}}</a></h6>                            
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>{{ $data_phimle[$i]->namsanxuat}}</p>
                                                <div class="block-stars">
                                                    <ul class="w3l-ratings">
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                                @endfor
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
    <!-- pop-up-box -->  
    <script src="public/frontend/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box -->
<!-- //Latest-tv-series -->
@endsection