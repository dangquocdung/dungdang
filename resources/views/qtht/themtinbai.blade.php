@extends('qtht.layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

          <div class="panel-heading"><strong>Thêm tin/bài trong mục {{ $themtin->ten }}</strong></div>

          <div class="panel-body">
            <form action="/qtht/{{ $themtin->id }}/them" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              <input type="hidden" name="loaitin_id" value="{{ $themtin->id }}"/>
              <div class="modal-body">

                <div class="form-group">
                  <label>Tiêu đề</label>
                  <input type="text" class="form-control" name="tieude" placeholder="Nhập Tiêu đề" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea type="text" class="form-control" name="tomtat" rows="3" placeholder="Nhập tóm tắt" required=""></textarea>
                </div>

                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" name="urlhinh" required="" />
                </div>

                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="noidung" id="noidung" class="form-control ckeditor" rows="10"></textarea>
                </div>

                <div class="form-group">
                  <label>Ghi chú</label>
                  <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
                </div>

                <div class="form-group">
                  <label>Tin nổi bật</label> &nbsp;
                  <input type="checkbox" name="tinnoibat" value="1">
                </div>

              </div>

              <div class="modal-footer">
                <button type="reset" class="btn btn-default">Làm lại</button>
                <button type="submit" class="btn btn-primary">Đăng</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection
