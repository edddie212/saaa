@extends('master')
@section('content')

@if($contents->count())
{{ Breadcrumbs::render('content', $url) }}

 <div class="page-breadcrumb">
   <div class="container">
       <div class="row">
        <div class="col">
          <h4> {{ $title }}  </h4>
       </div>
      </div>
     </div>
   </div>

<div class="space-50"></div>

<div class="container">
@foreach ($contents as $content)
<div class="row">
  <div class="col">
    <h2>{{$content->ctitle}}</h2>
<br>
     <p>{!! $content->article !!}</p>
     <br><hr>
  </div>
 </div>

@endforeach
</div>
@else
{{ Breadcrumbs::render('content', $url) }}
<div class="container">
 <div class="row">
  <div class="col-12">
     <h2 class="text-center">No Content</h2>
   <b><p class="text-center"><i>No content  for this menu link</i></p></b>

  </div>
 </div>
</div>
@endif

@endsection
