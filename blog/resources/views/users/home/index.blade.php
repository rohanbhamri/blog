@extends('usersbase')

@section('content')


		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read Our Blog</h2>
				<div class="row row-bottom-padded-md">
                @foreach ($articles as $article)
                <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                    <div class="blog-entry">
                        <a href="#" onclick="getArticle({{$article->id}})" class="blog-img" data-toggle="modal" data-target="#basicExampleModal">
                            <img src="{{URL::asset('user_assets/images/img-1.jpg')}}" class="img-responsive" alt="">
                        </a>
                        <div class="desc">
                            <h3><a href="#" onclick="getArticle({{$article->id}})" data-toggle="modal" data-target="#basicExampleModal">{{$article->title}}</a></h3>
                            <span><small>by {{$article->writtenby}} </small> </span>
                            <p  style="color:black">{!!$article->short_desc!!}</p>
                            <a href="#" onclick="getArticle({{$article->id}})" class="lead" data-toggle="modal" data-target="#basicExampleModal">Read More <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                </div>
                
                @endforeach    
                
                </div>
			</div>
		
			
		</div>

<style>
    .modal {
    text-align:center;
    z-index: 10000 !important;

}
.modal-fluid {
    display: inline-block;
    width: 96%;
}
.close{
    background: red;
    height:20px;
    width: 20px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-fluid " role="document">
    <div class="modal-content">
        <div class="modal-header" style="border:none;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body" id="article_body">
        <div class="row">
            <div class="col-sm-12" id="title" style="font-size:25px;"></div>
            <div class="col-sm-12" id="short_desc" style="text-align:justify"></div>
            <div class="col-sm-12" id="breif" style="text-align:justify"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>