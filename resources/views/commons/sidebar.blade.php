<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"  style="height:100%; border-top: 1px solid #e01638;">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>

            <x-nav-link :href="route('home')" :active="request()->routeIs('dashboard')" class="text-white  "
                style="text-decoration: none; border: none;">
                <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-home"></i>
                    {{ 'Home' }}</div>
            </x-nav-link>

            <x-nav-link :href="route('page1')" :active="request()->routeIs('dashboard')" class="text-white  "
                style="text-decoration: none; border: none; ">
                <div class="danger " style="padding: 12px; color:pink;"> <i
                        class="fas fa-chart-area"></i>
                    {{ 'Page 1' }}
                </div>
            </x-nav-link>
            <x-nav-link :href="route('page2')" :active="request()->routeIs('dashboard')" class="text-white  "
                style="text-decoration: none; border: none; ">
                <div class="danger " style="padding: 12px; color:pink;"> <i
                        class="fas fa-chart-area"></i>
                    {{ 'Page 2' }}
                </div>
            </x-nav-link>
            <x-nav-link :href="route('users')" :active="request()->routeIs('dashboard')" class="text-white  "
                style="text-decoration: none; border: none; ">
                <div class="danger " style="padding: 12px; color:pink;"> <i
                        class="fas fa-chart-area"></i>
                    {{ 'Users' }}
                </div>
            </x-nav-link>


        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small" style="padding: 2px 12px; color:pink;">Logged in as:</div>
        <span style="padding: 12px; color:pink;"> @madhushraba</span>
    </div>
</nav>