<div style="background: #b3f0ff;" class="img_hader">
@extends(template() . 'layout.master2')
<div style="background: #b3f0ff;" class="img_hader">
@section('content2')
<div style="background: #b3f0ff;" class="img_hader">
    <div style="background: #ffffff;">
        <div class="card">
            <div style="background: #000000;" class="img_hader">
                <!-- Stats -->
                <div class="section">
                    <br>
                    <div class="text_canter_man">
                        <h3 style="text-align: center;font-weight: bold;font-size: 25px;color: #c9d6d7;">Rank &amp;Reward</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .r_box {
            display: flex;
            background: #1663c5;
            margin-bottom: 5px;
            padding: 5px;
            border-radius: 7px;
            align-items: center;
            justify-content: space-between;
        }
        .r_box p {
            margin: 0;
            font-size: 11px;
            color: #fff;
            line-height: 1.5;
        }
        a.clm {
    background: #fff;
    color: #000;
    height: 40px;
    width: 55px;
    line-height: 40px;
    text-align: center;
    border-radius: 5px;
    font-weight: bolder;
    font-size: 13px;
}
    </style>


    <div class="section" style="margin-top:15px;">
        <div class="row">

            @foreach(\App\Models\Reward::get() as $key=>$element)
            <div class="col-6" style="padding-left: 2px;padding-right: 2px;">
                <div class="r_box"  style="@if($key % 2 == 0) background: #003cff @else blue @endif">
                    <div>
                        
                        <img src="/imag/4Qxgn49y7nzh.gif" style="height:145px;">
                        <span style="margin-left: 30%;"><a href="{{route('user.clm', $element->id)}}" class="clm">Spain</a>
                    </div>
                </div>
            </div>
            @endforeach
 
 
   
@endsection



