@extends('qtht.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Danh sách tin tức</strong></div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>TT</th>
                    <th>Tiêu đề</th>
                    <th>Loại tin</th>
                    <th>Minh hoạ</th>
                    <th>Ghi chú</th>
                    <th></th>
                    <th></th>
                  </tr>
                  <?php  $stt=1; ?>
                  @foreach ($tintuc as $tin)
                  <tr>
                    <td>{{ $stt }}</td>
                    <td>
                      <a href="/{{$tin->loaitin->menutop->tenkhongdau}}/{{$tin->loaitin->tenkhongdau}}/{{$tin->id}}-{{$tin->tieudekhongdau}}" target="_blank">{{ $tin->tieude }}</a>
                    </td>
                    <td>{{ $tin->loaitin->ten }}</td>

                    <td>
                      <a class="urlhinh" href="../upload/hinh/tintuc/{{ $tin->urlhinh }}">
                        <img class="img-responsive" src="../upload/hinh/tintuc/{{ $tin->urlhinh }}" style="display:block; margin:0 auto" width="50px">
                      </a>
                    </td>

                    <td>{{ $tin->ghichu }}</td>

                    <td style="text-align: center;">
                      <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">


                        <button onclick="return confirm('Bạn muốn xóa tin này?')" type="submit" class="btn btn-sm btn-danger">Xoá</button>
                      </form>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-warning" href="/qtht/tin-bai/sua/{{ $tin->id }}">Sửa</a>

                    </td>
                  </tr>

                  <?php  $stt++; ?>
                  @endforeach
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
