
<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document"><div style="background: #b3f0ff;"
        <div class="modal-content"><div style="background: #b3f0ff;"
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="/imag/CC_20240528_193018.png" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong></strong><br>
                        <div class="text-muted"><span class="text-black">Main Manu</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->



                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="/" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="pie-chart-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <span class="text-black">Home
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/deposit/log" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                               <span class="text-black"> Deposit log
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/withdraw/log" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="apps-outline"></ion-icon>
                            </div>
                            <div class="in">
                              <span class="text-black">  Withdraw log
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/reword" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <div class="in">
                               <span class="text-black"> Reword
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->
                <!-- menu -->
                <div class="listview-title mt-1">Profile Setting</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="/profile/setting" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="pie-chart-outline"></ion-icon>
                            </div>
                            <div class="in">
                               <span class="text-black"> Profile Photo
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/profile/change/password" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                            <span class="text-black">    Password Chang
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/address/setting" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="apps-outline"></ion-icon>
                            </div>
                            <div class="in">
                             <span class="text-black">   Address
                            </div>
                        </a>
                    </li>

                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="{{@$yourLinks->data->telegram}}" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                              <span class="text-black">  Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                            <span class="text-black">    Log out
                            </div>
                        </a>
                    </li>
<br>

                </ul>
                <!-- * others -->

                <!-- send money -->

                <!-- * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->
