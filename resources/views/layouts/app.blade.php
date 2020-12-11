<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    @component('layouts.partials.header', ['title'=> $pageTitle]) 
    @endcomponent
</head>

<body class="nk-body bg-lighter npc-default has-sidebar">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @component('layouts.partials.sidebar') 
            @endcomponent
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @component('layouts.partials.topbar') 
                @endcomponent
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @component('layouts.partials.footer') 
                @endcomponent
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @component('layouts.partials.script') 
    @endcomponent
     <!-- end JavaScript -->
</body>

</html>