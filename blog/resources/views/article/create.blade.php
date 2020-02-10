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
                        <form class="cmxform form-horizontal " method="POST" action="{{url('/article/store')}}">
                           {{ csrf_field() }}
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-3">Title</label>
                                <div class="col-lg-6">
                                    <input class=" form-control" id="title" name="title" type="text">
                                </div>
                            </div>
                           
                            <div class="form-group ">
                                <label for="price" class="control-label col-lg-3">Category Description</label>
                                <div class="col-lg-6">
                                    <script src="{{URL::asset('assets/js/nicEdit.js')}}" type="text/javascript"></script>
                                    <script type="text/javascript">
                                        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                                    </script>
                                    <div id="myNicPanel" style="width: auto;"></div>
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
@endsection