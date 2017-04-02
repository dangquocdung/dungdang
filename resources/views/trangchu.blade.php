@extends('layouts.home')
@section('content')

<div class="row">

  <div class="tab-group-item">



    <!-- Tab panes -->
    <div class="tab-content">

      <div class="row">
        <div class="col-md-7">
          @if ($fn)
            <div class="minhhoa">
              <img src="/upload/hinh/tintuc/{{ $fn->urlhinh }}" alt="{{ $fn->tieude }}" width="100%">
            </div>
            <h4><a href="/front/{{$fn->loaitin->menutop->tenkhongdau}}/{{$fn->loaitin->tenkhongdau}}/{{$fn->id}}-{{$fn->tieudekhongdau}}">{{ $fn->tieude }}</a></h4>

            <div class="news-desc">
              {{ $fn->tomtat }}
            </div>
          @endif

        </div>

        <div class="col-md-5 hidden-xs hidden-sm">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#tin-moi" role="tab" data-toggle="tab">Tin mới</a></li>
            <li><a href="#tin-noi-bat" role="tab" data-toggle="tab">Tin nổi bật</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="tin-moi">

              @foreach ($tenNews as $tn)
                <div class="tin-moi">
                  <h6><a href="/front/{{$tn->loaitin->menutop->tenkhongdau}}/{{$tn->loaitin->tenkhongdau}}/{{$tn->id}}-{{$tn->tieudekhongdau}}">

                    {{ $tn->tieude }}</a></h6>
                </div>
              @endforeach

            </div>

            <div class="tab-pane" id="tin-noi-bat">

              @foreach ($toptenNews as $ttn)
                <div class="tin-moi">
                  <h6><a href="/front/{{$ttn->loaitin->menutop->tenkhongdau}}/{{$ttn->loaitin->tenkhongdau}}/{{$ttn->id}}-{{$ttn->tieudekhongdau}}">
                    {{ $tn->tieude }}</a></h6>
                </div>
              @endforeach
            </div>



          </div>
        </div>
      </div>




      <div class="tab-pane" id="profile">Tin mới</div>

    </div>

  </div>

  @foreach ($loaitintrangchu as $lttc)

  <div class="list-group">

    <a class="list-group-item active main-color-bg" href="/{{ $lttc->tenkhongdau }}">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $lttc->ten }}
    </a>

    <div class="list-group-item">
      <div class="row">
        @foreach ($tintuc as $tt)
        @if ($tt->loaitin_id == $lttc->id)
        <div class="col-6 col-sm-6 col-lg-4">
          <div class="tintuc">
            <h4><a href="/front/{{$tt->loaitin->menutop->tenkhongdau}}/{{$tt->loaitin->tenkhongdau}}/{{$tt->id}}-{{$tt->tieudekhongdau}}">
              {{ $tt->tieude }}</a></h4>
            <div class="minhhoa">
              <img src="/upload/hinh/tintuc/{{ $tt->urlhinh}}" alt="" width="100%">
            </div>
            <div class="news-desc">
              {{ $tt->tomtat}}
            </div>
          </div>
        </div>
        @endif
        @endforeach

      </div>
    </div>
  </div>

  @endforeach

</div>

<!-- Modal Login -->
<div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Đăng nhập quản trị</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">Địa chỉ email</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Nhớ tài khoản
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-8 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Đăng nhập
                                  </button>

                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      Quên mật khẩu?
                                  </a>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


</div>
<!-- End Modal -->








@endsection
