
<div style="background: #b3f0ff;" 
@php
    $sliding_banner = element('sliding_banner.element');
    $notice = content('notice.content');
    $yourLinks = content('links.content');
@endphp
{{-- <div id="sliderBody">
    <!-- Sliding Banner -->
    <div class="section wallet-card-section pt-1">
        <div id="owl-demo" class="owl-carousel owl-theme mt-2">
            @foreach ($sliding_banner as $slid)
                <div class="item">
                    <img class="rounded-20px" src="{{asset('asset/theme3/images/sliding_banner/'. $slid->data->image)}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <!-- Sliding Banner -->
</div> --}}

<div class="section wallet-card-section pt-1">
    <div id="sliderCarosel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner rounded-20px shadow-sm">

            @php $i=0; @endphp
            @forelse($sliding_banner as $item)
                @php
                    $actives = '';
                @endphp

                @if ($i == 0)
                    @php $actives = 'active';@endphp
                @endif
                @php $i=$i+1; @endphp

                <div class="carousel-item {{$actives}}">
                    <img class="d-block w-100" src="{{asset('asset/theme3/images/sliding_banner/'. $item->data->image)}}" alt="banner">
                </div>

            @empty
            @endforelse
<div style="background: #b3f0ff;" 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#sliderCarosel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderCarosel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </a>
    </div>
</div>
<div style="background: #b3f0ff;" 
<div class="container">
    <!-- Scroling Notice -->
    
                    </div>  
                    <br>
  <marquee style="background: #66a3ff;
    width: 98%;
    color: red;
    margin-left: 5px;" behavior="scroll" direction="left">
   {{@$notice->data->title}}
</marquee>
            <div style="background: #b3f0ff;"  
                    </div>
                </div>
               
           
      

    <!-- Icon Card --><div style="background: #b3f0ff;" 

    <div class="row">
        <a href="{{route('user.usdt.index')}}" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 90px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black">  <br>Deposit</span>
        </a>
        <a href="{{route('user.withdraw')}}" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>Withdraw</span>
        </a>
        <a href="{{@$yourLinks->data->telegram}}" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>Help/Suport</span>
        </a>
        <a href="{{route('pages', 'about')}}" class="col-3 text-center">
            <div class="card-body p-0" style="height: 60px; width: 95px; margin:auto;">
                <div class="card-body p-0">
                   <span style="margin-left: -25%;"> <img class="p-1" src="/imag/photo1720886982-removebg-preview.png" alt="">
                </div>
            </div>
            <span class="small-font"><span class="text-black"><br>About us</span><br>
        </a>
         <div class="new_invite " style="padding: 300px 35px;border-radius: 10px;background-size: 100% 100% !important; background:url('/imag/photo1720888825.jpeg')">
        </div>
          </div></div>
   </div>
                
                   
                        
    </div> </div>

                
{{-- @if ($sections->sections != null)
    @foreach ($sections->sections as $sections)
        @include(template().'sections.' . $sections)
    @endforeach
@endif --}}


<!-- mt-2 gaph -->
{{-- <div class="mt-2"></div>


<div class="modal fade" id="calculationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Profit calculate') }}</h5>
                <button type="button" class="close btn btn-warning" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="profit">


            </div>
        </div>
    </div>
</div> --}}


