@extends('base')

@section('content')

<div class="mail-w3agile">
    <!-- page start-->
    <div class="row">
        
        <div class="col-sm-12 mail-w3agile">
            <section class="panel">
                <header class="panel-heading wht-bg">
                   <h4 class="gen-case">{{$article->title}} </h4>
                </header>
            </section>
        </div>

        <div class="col-sm-4 com-w3ls">
            <section class="panel">
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked mail-nav">
                        <li><a style="color:#808080"><b> Category : </b><br>{{$article->cat_name}}</a></li>
                        <li><a style="color:#808080"><b> Sub-Category : </b><br>{{$article->subcat_name}}</a></li>
                        <li><a style="color:#808080;"><b></a></li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="col-sm-8 com-w3ls">
            <section class="panel">
                <div class="panel-body">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap gallery-grids">
                            {!!$article->short_desc!!}
                            <br>
                            {!!$article->breif!!}


                        </div>
                    </div>                
                </div>
            </section>
        </div>
    </div>

    <!-- page end-->
    </div>
    <script src="{{URL::asset('assets/js/lightbox-plus-jquery.min.js')}}"> </script>
    
@endsection