@extends('layout.header')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Phim
    <small>Sửa</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
		<div class="col-md-12">
         	<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Phim</h3>
                  <a title="Quay lại" href="{{route('phim')}}"><span class="btn btn-danger pull-right"><i class="fa fa-arrow-circle-left"></i></span></a>
                </div><!-- /.box-header -->

				<form action="{{ route('phim.update', $data_edit->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="box-body">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					    <div class="row">
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Tên phim</label>
								    <input type="text" class="form-control" id="id_name" name="tenphim" value="{{ isset($data_edit) ? $data_edit->ten_phim : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Slug (SEO URL)</label>
								    <input type="text" class="form-control" id="id_slug" name="slug" value="{{ isset($data_edit) ? $data_edit->slug : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Tên tiếng anh</label>
								    <input type="text" class="form-control" name="tentienganh" value="{{ isset($data_edit) ? $data_edit->ten_tienganh : '' }}">
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Đạo diễn</label>
								    <input type="text" class="form-control" name="daodien" value="{{ isset($data_edit) ? $data_edit->daodien : '' }}">
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Diễn viên</label>
								    <input type="text" class="form-control" name="dienvien" value="{{ isset($data_edit) ? $data_edit->dienvien : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Thể loại</label>
								    <select class="form-control select2" name="theloai[]" multiple style="width: 100%;>
								    	@foreach($theloai as $k => $v)			    			
							    				<option value="{{$v->id}}
							    				@foreach($data_edit_theloaiphim as $key => $val) @if($v->id == $val->idtheloai) selected="selected" selected="selected" @endif @endforeach">{{$v->ten_theloaiphim}}</option>
								    	@endforeach
								    </select>
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Quốc gia</label>
								    <select class="form-control select2" name="quocgia[]" multiple style="width: 100%;>
								    	@foreach($quocgia as $k => $v)
								    		<option value="{{$v->id}}
								    		@foreach($data_edit_quocgiaphim as $key => $val) @if($v->id == $val->idquocgia) selected="selected" selected="selected" @endif @endforeach">{{$v->ten_quocgia}}</option>
								    	@endforeach
								    </select>
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Nhà sản xuất</label>
								    <input type="text" class="form-control" name="nhasanxuat" value="{{ isset($data_edit) ? $data_edit->nhasanxuat : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Năm sản xuất</label>
								    <input type="text" class="form-control" name="namsanxuat" value="{{ isset($data_edit) ? $data_edit->namsanxuat : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-3">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Phim bộ</label><br>
								    <input value="1" type="checkbox" name="phimbo" @if($data_edit->phimbo == 1) checked='checked' @endif>
								</div>
					    	</div>
					    	<div class="col-md-3">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Tiêu đề <span class="text-red">(HD,NEW, 13/40)</span></label><br>
								    <input type="text" class="form-control" name="tieude" value="{{ isset($data_edit) ? $data_edit->tieude : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Thời lượng</label>
								    <div class="input-group">
					                    <input type="text" class="form-control" name="thoiluong" value="{{ isset($data_edit) ? $data_edit->thoiluong : '' }}">
					                    <span class="input-group-addon">Phút</span>
					                 </div>
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Link</label>
								    <input type="text" class="form-control" name="link" value="{{ isset($data_edit) ? $data_edit->linkphim : '' }}" >
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Nội dung phim</label>
			                        <textarea  name="noidungphim" placeholder="Place some text here" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ isset($data_edit) ? $data_edit->noidung : '' }}</textarea>
								</div>
					    	</div>
					    	<div class="col-md-3">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Ảnh đại diện phim</label>
								    <input type="file" name="anhdaidien" value="" class="borrowerImageFile filePhoto" data-errormsg="PhotoUploadErrorMsg">
									<img id="previewHolder" alt="Ảnh đại diện phim (182 x 268)" width="182px" height="268px"/>
								</div>
					    	</div>
							<div class="col-md-3">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Ảnh đại diện phim cũ</label>								   
									<img src="{{ isset($data_edit) ? $data_edit->img_phim : '' }}" alt="Ảnh đại diện phim (182 x 268)" width="182px" height="268px"/>
								</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="form-group">
									<label for="exampleInputEmail1" for="">Ảnh banner cũ</label>
									<img src="{{ isset($data_edit) ? $data_edit->banner_phim : '' }}" width="620px" height="268px">
								</div>
					    	</div>
					    	<div class="col-md-12">
					    		<div class="form-group">
								    <label for="exampleInputEmail1">Ảnh banner phim</label>
								    <input type="file" class=" filePhotobanner" id="imgInp" name="anhbanner" value="{{ isset($data_edit) ? $data_edit->ten_theloaiphim : '' }}" >
								    <img id="previewHolderbanner" alt="Ảnh banner phim (1100 x 450)" width="1100" height="450px"/><br>
								</div>
					    	</div>
					    </div>
						  <button type="submit" class="btn btn-success">Cập nhật</button>
					</div>	  
				</form>
          	</div><!-- /.box -->
		</div>
	</div>
</section><!-- /.content -->
@endsection
@section('script')
	<script src="/dist/js/myjs.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){

			function readURL(input) {
			  if (input.files && input.files[0]) {
			    var reader = new FileReader();
			    reader.onload = function(e) {
			      $('#previewHolder').attr('src', e.target.result);
			    }

			    reader.readAsDataURL(input.files[0]);
			  }
			}

			function readURLbanner(input) {
			  if (input.files && input.files[0]) {
			    var reader = new FileReader();
			    reader.onload = function(e) {
			      $('#previewHolderbanner').attr('src', e.target.result);
			    }

			    reader.readAsDataURL(input.files[0]);
			  }
			}

			$(".filePhoto").change(function() {
			  readURL(this);
			});
	  		$(".filePhotobanner").change(function() {
			  readURLbanner(this);
			});

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
	        });

		});

	</script>
@endsection