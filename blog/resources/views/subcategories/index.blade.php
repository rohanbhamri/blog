@extends('base')

@section('content')

		<div class="table-agile-info">   
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            
          @endif
        
          @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  <div class="panel panel-default">
 
    <div class="panel-heading">
      subcategories
    </div>
   
    <div class="">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            {{-- <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th> --}}
            <th>S.No.</th>
            <th>Category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($subcategories as $subcategory)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$subcategory->cat_name}}</td>
                <td>{{$subcategory->subcat_name}}</td>
                <td>{{$subcategory->subcat_desc}}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{url('sub-categories/edit', $subcategory->id)}}">Edit</a></li>
                          <li><a href="{{url('sub-categories/delete', $subcategory->id)}}">Delete</a></li>
                        </ul>
                      </div>
                </td>
            </tr>
        @endforeach
        
        </tbody>
      </table>
    </div>
    
  </div>
</div>
@endsection