@extends('base')

@section('content')

  <!-- //market-->
  <div class="market-updates">
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-1">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-home" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Total Rooms</h4>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-2 ">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-bed" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Total Beds</h4>
                {{-- <h3>{{$beds[0]->beds}}</h3> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-3 ">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-home" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Filled Rooms</h4>
                {{-- <h3>{{$filled_rooms[0]->counts}}</h3> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-1 ">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-bed" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Filled Beds</h4>
                {{-- <h3>{{$filled_beds[0]->beds}}</h3> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-2 ">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-user" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Members</h4>
                {{-- <h3>{{$current_occupants[0]->occupants}}</h3> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-2 market-update-gd">
        <div class="market-update-block clr-block-3 ">
            <div class="col-md-2 market-update-right">
                <i class="fa fa-money" style="color:white; font-size:40px;"> </i>
            </div>
            <div class="col-md-10 market-update-left" style="white-space: nowrap;">
                <h4>Collection</h4>
                {{-- <h3>{{$total_rent[0]->total_rent}}</h3> --}}
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    
    
    <div class="clearfix"> </div>
</div>

    
    <div class="clearfix"> </div>
</div>
@endsection