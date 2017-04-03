@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản lý banner
    <small>Sắp xếp</small>
  </h1>
</section>
<link rel="stylesheet" href="/plugins/nestable/nestable.css">
        <!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-md-12">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Banner</h3>
                </div><!-- /.box-header -->

				<form action="" method="POST" autocomplete="off">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<div class="box-body">
						<div class="form-group">
						    <label for="exampleInputEmail1">Chọn phim  - (<span class="text-red">Tối đa 5 phim</span>)</label>
						    <select id="dsphim" class="form-control select2">
					    	@foreach ($data as $key => $val)
					    		<option value="{{ $val->id}}" data-name="{{ $val->ten_phim}}">{{ $val->ten_phim}}</option>
					    	@endforeach
					    </select>
						</div>
						<label for="exampleInputEmail1" class="text-red">Kéo thả để sắp xếp vị trí phim</label>
					    <div class="form-group">
			    	        <div class="dd" id="nestable">
					            <ol class="dd-list">
									@foreach ($data_banner as $key => $val)
										<li class='dd-item' data-id='{{ $val->id}}'>
											<div class='dd-handle'>{{ $val->ten_phim}}</div>
											<i class='nestable-trash fa fa-trash'></i>
										</li>
									@endforeach
					            </ol>
					        </div>
					    </div>
					    <div class="form-group">
					    	<span disable="disable" class="btn btn-success" id="luu">Lưu</span>
					    	<p id="thongbao" style="color:red"></p>
					    </div>
					</div>	  
				</form>
          	</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->

@endsection
@section('script')
<script src="/plugins/nestable/jquery.nestable.js"></script>
<script type="text/javascript" >
	$(document).ready(function() {

	    // activate Nestable for list 1
	    $('#nestable').nestable({
	        group: 1
	    })
	});
</script>
<script src="/dist/js/banner.js"></script>
@endsection