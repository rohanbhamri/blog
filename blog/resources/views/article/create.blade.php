@extends('base')
<script src="{{URL::asset('assets/js/nicEdit.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>


@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Article
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
                        <form class="cmxform form-horizontal " method="POST" action="{{url('/article/store')}}">
                           {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Title</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="title" name="title" type="text">
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Select Category</label>
                                <div class="col-lg-6">
                                    <select class=" form-control" id="cat_id" name="cat_id" onchange="getSubcategory(this.value)">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Select Sub-Category</label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="subcat_id" name="subcat_id">
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Short Description</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="short_desc" name="short_desc">
                                    </textarea>
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Brief Explanation</label>
                                <div class="col-lg-6">
                                    <textarea name="brief" id="myInstance1" style="height: auto;" class="form-control">
                                        HTML <b>content</b> <i>default</i> in textarea
                                    </textarea>
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

<script>
function getSubcategory(cat_id){
    $.post('/article/getSubcategory', {'cat_id': cat_id}, function(success){
        var options = $("#subcat_id");
        $("#subcat_id").empty();
        options.append('<option value="">Select Sub-Category</option>');
        //don't forget error handling!
        success.forEach(function(item) {
            // alert(item.subcat_name)
            options.append('<option value="'+item.id+'">'+item.subcat_name+'</option>');
        });
        console.log(success);
    });
}
</script>
@endsection