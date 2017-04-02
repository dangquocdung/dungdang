@extends('qtht.layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

          <div class="panel-heading"><strong>Sửa tin/bài {{ $suatin->tieude }}</strong></div>

          <div class="panel-body">
            <form action="/qtht/tin-bai/sua/{{ $suatin->id }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              <div class="modal-body">

                <div class="form-group">
                  <label>Loại tin</label>

                  <select name="loaitin_id" required class="form-control" >
                    @foreach ($loaitin as $lt)
                      @if ($lt->id == $suatin->loaitin_id)
                        <option value="{{ $lt->id }}" selected="">{{ $lt->ten}}</option>
                      @else
                        <option value="{{ $lt->id }}" >{{ $lt->ten}}</option>

                      @endif
                    @endforeach
                  </select>

                </div>

                <div class="form-group">
                  <label>Tiêu đề</label>
                  <input type="text" class="form-control" name="tieude" value="{{ $suatin->tieude }}" required="" autofocus="">
                </div>

                <div class="form-group">
                  <label>Tóm tắt</label>
                  <textarea type="text" class="form-control" name="tomtat" rows="3" required="">{{ $suatin->tomtat }}</textarea>
                </div>

                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <input type="file" id="imgInp" name="urlhinh" />
                </div>

                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea name="noidung" id="noidung" class="form-control ckeditor" rows="10">{!! $suatin->noidung !!}</textarea>
                </div>

                <div class="form-group">
                  <label>Ghi chú</label>
                  <textarea class="form-control" name="ghichu" rows="3" placeholder="Nhập ghi chú">{!! $suatin->ghichu !!}</textarea>
                </div>
              </div>

              <div class="form-group">
                <label>Tin nổi bật</label> &nbsp;
                @if ($suatin->tinnoibat == 1)
                <input type="checkbox" name="tinnoibat" value="1" checked="">
                @else
                <input type="checkbox" name="tinnoibat" value="1">
                @endif

              </div>

              <div class="modal-footer">
                <button type="reset" class="btn btn-default">Làm lại</button>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection
