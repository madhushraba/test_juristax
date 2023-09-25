<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>madhushraba21</title>
    <link href="{{ asset('backend') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
{{-- ============================= --}}




<body>

    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"
        style="height:100%; border-top: 1px solid #e01638;">
        <div class="sb-sidenav-menu" style=" height: 82vh; position: sticky;">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                <x-nav-link :href="route('home')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none;">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-home"></i>
                        {{ 'Home' }}</div>
                </x-nav-link>

                <x-nav-link :href="route('page1')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ ' Page 1' }}
                    </div>
                </x-nav-link>
                <x-nav-link :href="route('page2')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ 'Enquiry Management' }}
                    </div>
                </x-nav-link>
                <x-nav-link :href="route('page2')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ 'Contact user table' }}
                    </div>
                </x-nav-link>
                {{-- ======================= --}}



                <div id="layoutSidenav">
                    <div id="layoutSidenav_nav">
                        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                            <div class="sb-sidenav-menu">
                                <div class="nav">

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePages" aria-expanded="false"
                                        aria-controls="collapsePages" style="padding: 12px; color:pink;">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Category Management
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                                        data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                                data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                                aria-controls="pagesCollapseAuth">
                                                view more
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                                </div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                                data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <x-nav-link :href="route('catlist')" :active="request()->routeIs('dashboard')" class="text-white  "
                                                        style="text-decoration: none; border: none; ">
                                                        <div class="danger " style="padding: 12px; color:pink;"> <i
                                                                class="fas fa-chart-area"></i>
                                                            {{ 'List' }}
                                                        </div>
                                                    </x-nav-link>
                                                    <x-nav-link :href="route('addcat')" :active="request()->routeIs('dashboard')"
                                                        class="text-white  "
                                                        style="text-decoration: none; border: none; ">
                                                        <div class="danger " style="padding: 12px; color:pink;"> <i
                                                                class="fas fa-chart-area"></i>
                                                            {{ 'Add category' }}
                                                        </div>
                                                    </x-nav-link>
                                                </nav>
                                            </div>

                                        </nav>
                                    </div>

                                </div>

                        </nav>
                    </div>

                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
                </script>
                <script src="js/scripts.js"></script>







                {{-- ======================== --}}

                <x-nav-link :href="route('users')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ 'Users' }}
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('testimonial')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ 'Testimonial' }}
                    </div>
                </x-nav-link>
                <x-nav-link :href="route('contactform')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fas fa-chart-area"></i>
                        {{ 'Contact Form' }}
                    </div>
                </x-nav-link>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small" style="padding: 2px 12px; color:pink;">Logged in as:</div>
            <span style="padding: 12px; color:pink;"> @madhushraba</span>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
