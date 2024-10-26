<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">

        <a href="{{route('user.profile')}}" class="headerButton">
            <!-- Image Upload -->
            <div> <img src="{{ @Auth::user()->image ? getFile('user', @Auth::user()->image) : '/imag/logo (2).png' }}" style="height:30px;border-radius:50px;"></div>
            <a href="{{route('home')}}">
                <div class="pageTitle">
                    {{-- <img src="{{asset('asset/theme3/assets/img/logo.png')}}" alt="logo" class="logo"> --}}
                    <img src="/imag/photo1720898608-removebg-preview.png" style="height:25px;">
            </a>

    </div>



</div>
</a>
<div class="right">
    <a href="javascript:void(0)" class="headerButton transactionLogBtn">
        <ion-icon class="icon" name="notifications"></ion-icon>
    </a>

    <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
        <ion-icon name="menu-outline"></ion-icon>
    </a>

</div>
</div>
<!-- * App Header -->
