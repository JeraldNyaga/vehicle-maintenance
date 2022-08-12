
<!DOCTYPE html>
<html lang="en" class="">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="http://rubick-laravel.left4code.com/dist/images/logo.svg" rel="shortcut icon">
    <meta name="csrf-token" content="mqdZtJ0S3yPUSsL71E0bcYI0kaPZiuFAc4kFOWzP">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Admin.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/Profile_Style.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
            <title>Dashboard </title>

  
            <link rel="dns-prefetch" href="//developers.google.com"><link rel="dns-prefetch" href="//maps.googleapis.com"></head>
            <!-- END: Head -->

            <body class="py-5">
                <!-- BEGIN: Mobile Menu -->
                <div class="mobile-menu md:hidden">
                    <div class="mobile-menu-bar">
                        <a href="" class="flex mr-auto">
                            <img alt="Midone - HTML Admin Template" class="w-6" src="http://rubick-laravel.left4code.com/dist/images/logo.svg">
                        </a>
                        <a href="javascript:;" class="mobile-menu-toggler">
                            <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i>
                        </a>
                    </div>
                    <div class="scrollable">
                        <a href="javascript:;" class="mobile-menu-toggler">
                            <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i>
                        </a>
                        <ul class="scrollable__content py-2">
                            <li>
                                <a href="javascript:;" class="menu menu--active">
                                    <div class="menu__icon">
                                        <i data-lucide="home"></i>
                                    </div>
                                    <a href="Dashboard.php">
                                        <div class="menu__title">
                                            Dashboard
                                            <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i>
                                        </div>
                                    </a>
                                </a>

                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon">
                                        <i data-lucide="shopping-bag"></i>
                                    </div>
                                    <div class="menu__title">
                                        E-Commerce
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                    </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="http://rubick-laravel.left4code.com/categories-page?layout=side-menu" class="menu">
                                            <div class="menu__icon">
                                                <i data-lucide="activity"></i>
                                            </div>
                                            <div class="menu__title">
                                               View Categories
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://rubick-laravel.left4code.com/add-product-page?layout=side-menu" class="menu">
                                            <div class="menu__icon">
                                                <i data-lucide="activity"></i>
                                            </div>
                                            <div class="menu__title">
                                                Add Product
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="menu">
                                            <div class="menu__icon">
                                                <i data-lucide="activity"></i>
                                            </div>
                                            <div class="menu__title">
                                               View Products
                                            </div>
                                        </a> 
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="menu">
                                            <div class="menu__icon">
                                                <i data-lucide="activity"></i>
                                            </div>
                                            <div class="menu__title">
                                                Orders
                                                <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                            </div>
                                        </a>
                                        <ul class="">
                                            <li>
                                                <a href="http://rubick-laravel.left4code.com/transaction-list-page?layout=side-menu" class="menu">
                                                    <div class="menu__icon">
                                                        <i data-lucide="zap"></i>
                                                    </div>
                                                    <div class="menu__title">Orders List</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://rubick-laravel.left4code.com/transaction-detail-page?layout=side-menu" class="menu">
                                                    <div class="menu__icon">
                                                        <i data-lucide="zap"></i>
                                                    </div>
                                                    <div class="menu__title">Orders Detail</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon">
                                    <i data-lucide="users"></i>
                                </div>
                                <div class="menu__title">
                                    Users
                                    <i data-lucide="chevron-down" class="menu__sub-icon "></i>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="http://rubick-laravel.left4code.com/users-layout-1-page?layout=side-menu" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="activity"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 1
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick-laravel.left4code.com/users-layout-2-page?layout=side-menu" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="activity"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 2
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://rubick-laravel.left4code.com/users-layout-3-page?layout=side-menu" class="menu">
                                        <div class="menu__icon">
                                            <i data-lucide="activity"></i>
                                        </div>
                                        <div class="menu__title">
                                            Layout 3
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Mobile Menu -->
            <div class="flex mt-[4.7rem] md:mt-0">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                 
                    <div class="side-nav__devider my-6"></div>
                    <ul>
                        <li>
                            <a href="<?php echo base_url('admin-dashboard'); ?>" class="side-menu side-menu--active">
                                <div class="side-menu__icon ">
                                    <i data-lucide="home"></i>
                                </div>
                                <div class="side-menu__title">
                                    Dashboard

                                </div>
                            </a>

                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon">
                                    <i data-lucide="shopping-bag"></i>
                                </div>
                                <div class="side-menu__title">
                                    E-Commerce
                                    <div class="side-menu__sub-icon ">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                 </div>
                             </div>
                         </a>
                         <ul class="">
                            <li>
                                <a href="<?php echo base_url('admin-list-category'); ?>" class="side-menu">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        View Categories
                                    </div>
                                </a>
                            </li>
                           
                            <li>
                                <a href="<?php echo base_url('products'); ?>" class="side-menu">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        View Products
                                        <div class="side-menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-lucide="users"></i>
                            </div>
                            <div class="side-menu__title">
                                Users
                                <div class="side-menu__sub-icon ">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url('list-Users'); ?>" class="side-menu">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        List users
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('create-user'); ?>" class="side-menu">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        Add user
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin-clients-logs'); ?>" class="side-menu">
                            <div class="side-menu__icon">
                            <span class="iconify" data-icon="carbon:tool-kit"></span>
                            </div>
                            <div class="side-menu__title">
                               Maintenance
                                <div class="side-menu__sub-icon ">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </a>
                                       </li>
                    <li>
                        <a href="<?php echo base_url('admin-profile'); ?>" class="side-menu">
                            <div class="side-menu__icon">
                                <i data-lucide="trello"></i>
                            </div>
                            <div class="side-menu__title">
                                Profile
                                <div class="side-menu__sub-icon ">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="side-nav__devider my-6"></li>


                </ul>
            </nav>
            <!-- END: Side Menu -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Application</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                            <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                        </div>
                        <a class="notification sm:hidden" href="">
                            <i data-lucide="search" class="notification__icon dark:text-slate-500"></i>
                        </a>
                        <div class="search-result">
                            <div class="search-result__content">
                                <div class="search-result__content__title">Pages</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center">
                                        <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                                            <i class="w-4 h-4" data-lucide="inbox"></i>
                                        </div>
                                        <div class="ml-3">Mail Settings</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                            <i class="w-4 h-4" data-lucide="users"></i>
                                        </div>
                                        <div class="ml-3">Users & Permissions</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                            <i class="w-4 h-4" data-lucide="credit-card"></i>
                                        </div>
                                        <div class="ml-3">Transactions Report</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Users</div>
                                <div class="mb-5">
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-14.jpg">
                                        </div>
                                        <div class="ml-3">Denzel Washington</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">denzelwashington@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-6.jpg">
                                        </div>
                                        <div class="ml-3">Johnny Depp</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-13.jpg">
                                        </div>
                                        <div class="ml-3">Leonardo DiCaprio</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">leonardodicaprio@left4code.com</div>
                                    </a>
                                    <a href="" class="flex items-center mt-2">
                                        <div class="w-8 h-8 image-fit">
                                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-11.jpg">
                                        </div>
                                        <div class="ml-3">Russell Crowe</div>
                                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">russellcrowe@left4code.com</div>
                                    </a>
                                </div>
                                <div class="search-result__content__title">Products</div>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-2.jpg">
                                    </div>
                                    <div class="ml-3">Apple MacBook Pro 13</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-10.jpg">
                                    </div>
                                    <div class="ml-3">Sony Master Series A9G</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-7.jpg">
                                    </div>
                                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/preview-5.jpg">
                                    </div>
                                    <div class="ml-3">Apple MacBook Pro 13</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i>
                        </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-content">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-13.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-11.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="http://rubick-laravel.left4code.com/dist/images/profile-10.jpg">
                                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Nicolas Cage</a>
                                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <img alt="Midone - HTML Admin Template" src="http://rubick-laravel.left4code.com/dist/images/profile-15.jpg">
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-primary text-white">
                                <li class="p-2">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Frontend Engineer</div>
                                </li>
                                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                                <li>
                                    <a href="<?php echo base_url('admin-profile'); ?>" class="dropdown-item hover:bg-white/5">
                                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5">
                                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5">
                                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item hover:bg-white/5">
                                        <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                                <li>
                                    <a href="http://rubick-laravel.left4code.com/logout" class="dropdown-item hover:bg-white/5">
                                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    <!-- END: Account Menu -->
<div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="Profile_images/avatar_1.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
            <h4>Admin</h4>
          </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Kenneth Valdez
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  fip@jukmuh.al
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (239) 816-9029
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (320) 380-4539
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Bay Area, San Francisco, CA
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info" id="form-btn">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>


     <!-- Edit Profile Form -->
      <div class="card" id="profile-edit">
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="Kenneth Valdez">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="fip@jukmuh.al">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(239) 816-9029">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(320) 380-4539">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                  <input type="button" class="btn btn-primary px-4" value="Save Changes">
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</body>
</html>
