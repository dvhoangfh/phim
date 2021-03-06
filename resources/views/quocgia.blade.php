@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quốc gia
    <small>Danh sách</small>
  </h1>
</section>

        <!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-md-4">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quốc gia</h3>
                </div><!-- /.box-header -->

				<form action="{{ isset($data_edit) ? route('quocgia.update',$data_edit->id) : route('quocgia.store') }}" method="POST" autocomplete="off">
					<div class="box-body">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    <div class="form-group">
						    <label for="exampleInputEmail1">Tên quốc gia</label>
						    <input type="text" class="form-control" id="id_name" name="tenquocgia" value="{{ isset($data_edit) ? $data_edit->ten_quocgia : '' }}" required>
						  </div>
						 <div class="form-group">
						    <label for="exampleInputEmail1">Slug</label>
						    <input type="text" class="form-control" id="id_slug" name="slug" value="{{ isset($data_edit) ? $data_edit->slug : '' }}" required>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Số thứ tự</label>
						     <input type="text" class="form-control" name="stt" value="{{ isset($data_edit) ? $data_edit->stt : '' }}" required>
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
								<th style="width: 30%">Tên quốc gia</th>
								<th style="width: 30%">Slug</th>
								<th style="width: 20%">STT</th>
								<th style="width: 15%">Tác vụ</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data AS $k => $v)
								<tr>
									<td>{{$v->id}}</td>
									<td>{{$v->ten_quocgia}}</td>
									<td>{{$v->slug}}</td>
									<td>{{$v->stt}}</td>
									<td class="text-center">                                        
                                        <a href="{{route('quocgia.edit',$v->id)}}">
                                            <span class="badge">Update</span>
                                        </a>
                                        <a href="#" data-href="{{route('quocgia.delete',$v->id)}}" data-toggle="modal" data-target="#deleted">
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
@section('script')
<script type="text/javascript">
        $("#id_name").keyup(function(){
            var str = $(this).val();
            str = str.toLowerCase();
            str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
            str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
            str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
            str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
            str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
            str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
            str= str.replace(/đ/g,"d");
            str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\&lt;|\&gt;|\?|\/|,|\.|\:|\'| |\"|\&amp;|\#|\[|\]|~/g,"-");
            str= str.replace(/-+-/g,"-"); //thay thế 2- thành 1-
            str= str.replace(/^\-+|\-+$/g,"");//cắt bỏ ký tự - ở đầu và cuối chuỗi
            str = str.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#id_slug").val(str);        
        })
</script>
@endsection