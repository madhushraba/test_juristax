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


 
                <!-- Category Management Dropdown -->
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory"
                    aria-expanded="false" aria-controls="collapseCategory" style="padding: 12px; color:pink;">
                    <div class="sb-nav-link-icon" style="padding: 12px; color:pink;"><i class="fa-solid fa-bars"></i>
                    </div>
                    Category Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategory">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionCategory">
                        <x-nav-link :href="route('catlist')" :active="request()->routeIs('dashboard')" class="text-white  "
                            style="text-decoration: none; border: none; ">
                            <div class="danger " style="padding: 12px; color:pink;"> <i
                                    class="fa-solid fa-table-list"></i>
                                {{ 'Category List' }}
                            </div>
                        </x-nav-link>
                        <x-nav-link :href="route('addcat')" :active="request()->routeIs('dashboard')" class="text-white  "
                            style="text-decoration: none; border: none; ">
                            <div class="danger " style="padding: 12px; color:pink;"> <i class="fa-solid fa-plus"></i>
                                {{ 'Add category' }}
                            </div>
                        </x-nav-link>
                    </nav>
                </div>

                <!-- Enquiry Management Dropdown -->
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEnquiry"
                    aria-expanded="false" aria-controls="collapseEnquiry" style="padding: 12px; color:pink;">
                    <div class="sb-nav-link-icon" style="padding: 12px; color:pink;"><i class="fa-solid fa-bars"></i>
                    </div>
                    Enquiry Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEnquiry">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionEnquiry">
                        <x-nav-link :href="route('store.enquiry')" :active="request()->routeIs('dashboard')" class="text-white  "
                            style="text-decoration: none; border: none; ">
                            <div class="danger " style="padding: 12px; color:pink;"> <i
                                    class="fa-solid fa-table-list"></i>
                                {{ 'Enquiry Management' }}
                            </div>
                        </x-nav-link>
                        <x-nav-link :href="route('showenquiry')" :active="request()->routeIs('dashboard')" class="text-white  "
                            style="text-decoration: none; border: none; ">
                            <div class="danger " style="padding: 12px; color:pink;"> <i class="fa-solid fa-plus"></i>
                                {{ 'Show Enquiries' }}
                            </div>
                        </x-nav-link>
                    </nav>
                </div>

                {{-- ======================================================== --}}

                {{-- <x-nav-link :href="route('contactform')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fa-solid fa-id-badge"></i>
                        {{ 'Contact user form' }}
                    </div>
                </x-nav-link> --}}

                {{-- enquiry================================================= --}}

                <!-- Other Menu Items -->
                <x-nav-link :href="route('contact_table')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fa-solid fa-id-badge"></i>
                        {{ 'Contacted user table' }}
                    </div>
                </x-nav-link>

                <x-nav-link :href="route('testimonial')" :active="request()->routeIs('dashboard')" class="text-white  "
                    style="text-decoration: none; border: none; ">
                    <div class="danger " style="padding: 12px; color:pink;"> <i class="fa-solid fa-square-check"></i>
                        {{ 'Testimonial' }}
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
