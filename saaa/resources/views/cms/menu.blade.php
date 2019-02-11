@extends('cms.cms_master')

@section('main_content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Site Menu</h1>

  </div>
<p>
<a class="btn btn-primary btn-lg" href="{{ url('cms/menu/create') }}">Add Menu Link</a>
</p>

  <div class="table-responsive mt-5">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Link</th>
          <th>Title</th>
          <th>Created</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($menu as $item)
       <tr>
        <td>{{$item['link']}}</td>
        <td>{{$item['title']}}</td>
        <td>{{$item['created_at']}}</td>

        <td>
          <a class="btn btn-primary btn-sm mr-2 border" href="{{ url('cms/menu/' . $item['id'] . '/edit') }} ">Edit</a>
          <a class="btn btn-danger btn-sm" href="{{ url('cms/menu/' . $item['id']) }}">Delete</a>
        </td>
       </tr>
       @endforeach
     </tbody>
    </table>
  </div>
</main>
@endsection
