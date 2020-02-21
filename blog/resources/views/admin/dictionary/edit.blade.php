@extends('base')
<script src="{{URL::asset('admin_assets/js/nicEdit.js')}}" type="text/javascript"></script>
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
                        <form class="cmxform form-horizontal " method="POST" action="{{url('/admin/our-dictionary/update',$id)}}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Word</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="word" name="word" type="text" autocomplete="off" value="{{$word->word}}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Meaning</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="meaning" name="meaning" autocomplete="off" value="{{$word->meaning}}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Sentence Example 1</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="sentence_1" name="sentence_1" type="text" autocomplete="off" value="{{$word->sentence_1}}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Sentence Example 2</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="sentence_2" name="sentence_2" type="text" autocomplete="off"  value="{{$word->sentence_2}}">
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
    $.post('/admin/article/getSubcategory', {'cat_id': cat_id}, function(success){
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