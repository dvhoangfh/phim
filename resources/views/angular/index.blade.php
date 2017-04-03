@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thể loại
    <small>Danh sách</small>
  </h1>
</section>

        <!-- Main content -->
<section class="content">
    <div class="row" ng-app="">
		<div class="col-md-4">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Thể loại</h3>
                </div><!-- /.box-header -->

				<form action="{{ isset($data_edit) ? route('theloai.update',$data_edit->id) : route('theloai.store') }}" method="POST" autocomplete="off" >
					<div class="box-body">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    <div class="form-group">
						    <label for="exampleInputEmail1">Tên thể loại</label>
						    <input type="text" class="form-control" id="id_name" name="tentheloai" value="{{ isset($data_edit) ? $data_edit->ten_theloaiphim : '' }}" required ng-model="names">
						    <p class="text-red" ng-bind="names"></p>
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
								<th style="width: 30%">Tên thể loại</th>
								<th style="width: 30%">Slug</th>
								<th style="width: 20%">STT</th>
								<th style="width: 15%">Tác vụ</th>
							</tr>
						</thead>
						<tbody>
							
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