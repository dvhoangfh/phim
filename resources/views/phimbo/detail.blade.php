@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Phim bộ
    <small>Chi tiết danh sách tập</small>
  </h1>
</section>

        <!-- Main content -->
<section class="content">
    <div class="row">
    	<div class="col-md-12">
    		<div class="box box-success">
    			<div class="box-body">
    				<h2>{{ $phim->ten_phim }}</h2>
    				<h5>Tổng số tập : {{ count($data) }}</h5>
    			</div>
    		</div>
    	</div>
		<div class="col-md-4">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Thêm danh sách tập</h3>
                </div><!-- /.box-header -->

				<form action="{{ isset($data_edit) ? route('phimbo.detail.update',[$maphim,$data_edit->id]) : route('phimbo.store',$maphim) }}" method="POST" autocomplete="off">
					<div class="box-body">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    <div class="form-group">
						    <label for="exampleInputEmail1">Tiêu đề</label>
						    <input type="text" class="form-control" name="tieude" value="{{ isset($data_edit) ? $data_edit->tieude : '' }}" required>
						  </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Link</label>
						    <input type="text" class="form-control" name="link" value="{{ isset($data_edit) ? $data_edit->link : '' }}" required>
						  </div>
						  <button type="submit" class="btn btn-success">Submit</button>
					</div>	  
				</form>
          	</div><!-- /.box -->
		</div>
		<div class="col-md-8">
             <div class="box box-primary">
             	<div class="box-body">
					<table class="table table-bordered table-hover table-stripped">
						<thead>
							<tr>
								<th style="width: 5%">Mã</th>
								<th style="width: 30%">Tiêu đề</th>
								<th style="width: 30%">Link</th>
								<th style="width: 15%">Tác vụ</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data AS $k => $v)
								<tr>
									<td>{{$v->id}}</td>
									<td>{{$v->tieude}}</td>
									<td>{{$v->link}}</td>
									<td class="text-center">                                        
                                        <a href="{{ route('phimbo.detail.edit',[$maphim,$v->id]) }}">
                                            <span class="badge">Update</span>
                                        </a>
                                        <a href="#" data-href="{{route('phimbo.detail.delete',[$maphim,$v->id])}}" data-toggle="modal" data-target="#deleted">
                                            <span class="badge bg-red">Delete</span>
                                        </a>
                                    </td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section><!-- /.content -->

@endsection
