<!-- banner --> 
    <div id="slidey" style="display:none;">
        <ul>
           @foreach($data_banner as $key => $val)
                <li>
                <a href="{{route('welcome')}}">
                <img src="{{ str_replace(' \ ',' / ',$val->banner_phim ) }}" alt="">
                    <p class="title">{{$val->ten_phim}}</p><p class="description"> {{ substr($val->noidung, 0, 120) }}...</p>
                </li>
                </a>
            @endforeach
        </ul>       
    </div>
    <script src="public/frontend/js/jquery.slidey.js"></script>
    <script src="public/frontend/js/jquery.dotdotdot.min.js"></script>
       <script type="text/javascript">
            $("#slidey").slidey({
                interval: 8000,
                listCount: 5,
                autoplay: false,
                showList: true
            });
            $(".slidey-list-description").dotdotdot();
        </script>
<!-- //banner -->