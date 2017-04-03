@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Phim
    <small>Danh sách</small>
  </h1>
</section>

        <!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-md-12">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Danh sách phim</h3>
                  <a href="{{route('phim.create')}}"><span class="btn btn-success pull-right"><i class="fa fa-plus"></i></span></a>
                </div><!-- /.box-header -->
				<form action="{{ isset($data_edit) ? route('quocgia.update',$data_edit->id) : route('quocgia.store') }}" method="POST" autocomplete="off">
					<div class="box-body">
					    <table class="table table-bordered table-stripped datatable">
							<thead>
								<tr>
									<th style="width: 5%">Mã</th>
									<th style="width: 40%">Tên phim</th>
									<th style="width: 5%">Lượt xem</th>
									<th style="width: 5%">Phân loại</th>
									<th style="width: 20%">Thể loại</th>
									<th style="width: 20%">Quốc gia</th>
									<th style="width: 5%">Tác vụ</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data AS $k => $v)
									<tr>
										<td>{{$v->id}}</td>
										<td><a title="{{$v->ten_phim}}" href="{{route('phim.edit',$v->id)}}">{{$v->ten_phim}}</a></td>
										<td>{{$v->luotxem}}</td>
										<td>
											@if($v->phimbo == 1)
												<span class="label label-success">Phim bộ</span>
											@else
												<span class="label label-info">Phim lẻ</span>
											@endif
										</td>
										<td>
										@foreach ($theloaiphim as $key => $val)
											@if($v->id == $val->idphim)
												<a href="{{route('theloai')}}">{{ $val->ten_theloaiphim}}</a>&nbsp&nbsp&nbsp&nbsp&nbsp
											@endif
		
										@endforeach
										</td>
										<td>
										@foreach ($quocgiaphim as $key => $val)
											@if($v->id == $val->idphim)
												<a href="{{route('quocgia')}}">{{ $val->ten_quocgia}}</a>&nbsp&nbsp&nbsp&nbsp&nbsp
											@endif
		
										@endforeach	
										</td>
										<td class="text-center">                                        
	                                        <a href="#" data-href="{{route('phim.delete',$v->id)}}" data-toggle="modal" data-target="#deleted">
	                                            <span class="badge bg-red">Delete</span>
	                                        </a>
	                                    </td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>	  
				</form>
          	</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->

@endsection