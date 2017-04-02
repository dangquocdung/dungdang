@extends('layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">

      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $loaitin2->ten}}
      </a>

      @foreach ($tintheoloai as $ttl)

      <div class="list-group-item">

        <h4>{{ $ttl->tieude }}</h4>
        <p><small>{{ $ttl->created_at }}</small></p>
        <img src="/upload/hinh/tintuc/{{ $ttl->urlhinh }}" alt="">
        <p>{{ $ttl->tomtat }}</p>

      </div>

      @endforeach

    </div>



  </div><!--/row-->
@endsection
