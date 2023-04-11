@extends('layouts.app')

@section('page-name')
Comic List
@endsection

@section('comic-list')
<div class="comic-list">
    <div class="position-relative">
    <span class="label fs-1">CURRENT SERIES</span>
  </div>

  <section class="pt-5">
    <ul class="my-5">
        @foreach ($comic_list as $comic)
      <li class="mb-4">
        <a href="#">
          <div class="cover">
            <img
             {{-- src="{{$comic['thumb']}}" --}}
             src=' https://picsum.photos/300/500'
              alt=""
            />
          </div>
          <div class="series">{{$comic['series']}}</div>
        </a>
      </li>
      @endforeach
    </ul>
    <div class="d-flex justify-content-center mb-4">
      <button class="label">LOAD MORE</button>
    </div>
  </section>
</div>
@endsection