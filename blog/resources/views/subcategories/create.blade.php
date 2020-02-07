@extends('base')

@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Categories
                </header>
                <div class="panel-body">
                    
                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @elseif($message = Session::get('error'))
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
                    <div class="form">
                        <form class="cmxform form-horizontal " method="post" action="{{url('/sub-categories/store')}}">
                           {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Category</label>
                                <div class="col-lg-6">
                                    <select name="cat_id" class="form-control">
                                        <option value="" selected disabled>Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Sub-Category Name</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="subcat_name" name="subcat_name" type="text">
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Sub-Category Description</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" name="subcat_desc"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-default" type="button">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page end-->
</div>
@endsection