@extends('cms.cms_master')

@section('main_content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Content</h1>
  </div>
<div class="row">
 <div class="col-8">
  <form  action="{{url('cms/content/' . $content_item['id'] )}}" method="POST" novalidate="novalidate" autocomplete="off">
    @method('PUT')
    @csrf
    <div class="form-group">
       <label for="menu-id"><span class="text-danger">* </span> Menu Link :</label>
     <select class="form-control" name="menu_id" id="menu-id">
     @foreach ($menu as $item)
    <option @if( $content_item['menu_id'] == $item['id']) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
     @endforeach
    </select>
       <span class="text-danger">{{ $errors->first('menu_id') }}</span>
    </div>
    <div class="form-group">
       <label for="title"><span class="text-danger">* </span> Title :</label>
       <input value="{{ $content_item['ctitle'] }}" type="text" name="ctitle" id="title" class="form-control field-input-cms">
       <small class="text-muted text-black">The Title Menu, min 2 chars - max255 chars</small><br>
       <span class="text-danger">{{ $errors->first('ctitle') }}</span>
    </div>
    <div class="form-group">
       <label for="article"><span class="text-danger">* </span> Article :</label>
       <textarea name="article" id="article" class="form-control">{{$content_item['article']}}</textarea>
       <small class="text-muted text-black">The Article, min 2 chars</small><br>
       <span class="text-danger">{{ $errors->first('article') }}</span>
    </div>
    <a class="btn btn-primary" href="{{url('cms/coontent')}}">Cancel</a>
    <input class="btn btn-dark" type="submit" name="submit" value="Update Content">
  </form>
 </div>
</div>

</main>
@endsection
