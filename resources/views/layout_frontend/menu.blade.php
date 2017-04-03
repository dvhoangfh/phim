<!-- nav -->
<div class="movies_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('welcome')}}">Trang chủ</a></li>
                        <li><a href="series.html">phim lẻ</a></li>
                        <li><a href="news.html">phim bộ</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể loại <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                @foreach ($theloai as $key => $val)
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                            <li><a href={{route('welcome.theloai',$val->slug)}}>{{$val->ten_theloaiphim}}</a></li>
                                    </ul>
                                </div>
                                @endforeach
                                <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quốc gia <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <li>
                                    @foreach ($quocgia as $key => $val)
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                                <li><a href="{{route('welcome.quocgia',$val->slug)}}">{{$val->ten_quocgia}}</a></li></a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="short-codes.html">Thư giãn</a></li>
                        <!-- <li><a href="list.html">Danh sách</a></li> -->
                    </ul>
                </nav>
            </div>
        </nav>  
    </div>
</div>
<!-- //nav -->