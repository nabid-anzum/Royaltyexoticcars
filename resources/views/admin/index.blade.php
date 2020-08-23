<?php ini_set("allow_url_fopen","1");
?>
<!doctype html>
<html class="no-js" lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>{{__('messages.site_name')}}</title>
      <meta name="description" content="{{__('messages.site_name')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" href="apple-icon.png">
      <link rel="shortcut icon" href="{{asset('upload/favicon.ico')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/themify-icons/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/flag-icon-css/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/selectFX/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/jqvmap/dist/jqvmap.min.css')}}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
      <script src='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js'></script>
      <link rel='stylesheet' href='https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css'>
      <input type="hidden" id="url_path" value="{{url('/')}}">
      <script src="{{asset('uikit/tests/js/test.js')}}"></script>
       @if(Session::get("is_rtl")==0)
      <link rel="stylesheet" href="{{asset('admin-asset/assets/css/style.css').'?v=2'}}">
      @else
       <link rel="stylesheet" href="{{asset('admin-asset/assets/css/Rtl.css').'?v=2'}}">
      @endif

      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="{{asset('admin-asset/vendors/chosen/chosen.min.css')}}">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.3/css/selectize.default.min.css'>
      <script>UPLOADCARE_PUBLIC_KEY = '7b7f57c2b9e95d9770ed';</script>

      <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">

       @yield('style')
   </head>
   <style type="text/css">
   .product-heading h1:before{
      background-color:{{site_color()}} !important;
   }
   .product-heading h1:after{
      background-color:{{site_color()}} !important;
   }
   .one-product-slider h1:after{
      background-color:{{site_color()}} !important;
   }
   .col-md-3.services:after{
      background-color:{{site_color()}} !important;
   }
       a.btn{
           color: #fff !important;
       }

   .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
       color: #fff !important;
   }
   .wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
       background: #2184be;
       color: #fff !important;
       cursor: default;
   }

</style>


   <body class="rtl">
       <div id="overlaychk">
                        <div class="cv-spinner">
                           <span class="spinner"></span>
                        </div>
                     </div>
      <div class="go">
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa fa-bars"></i>
               </button>
               <a class="navbar-brand" href="{{url('admin/dashboard')}}">
               {{__('messages.site_name')}}
               </a>
               <a class="navbar-brand hidden" href="{{url('admin/dashboard')}}">
               {{__('messages.short_code')}}
               </a>
            </div>
            <div id="main-menu" class="main-menu collapse">
               <ul class="nav navbar-nav">
                  <li class="active">
                     <a href="{{url('admin/dashboard')}}">
                     <i class="menu-icon fa fa-dashboard"></i>
                     {{__('messages.dashboard')}}
                     </a>
                  </li>
                  <h3 class="menu-title"></h3>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-dollar"></i>
                         {{__('messages.sales')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                         <li>
                             <a href="{{url('admin/order')}}">
                                 Shop Sales
                             </a>
                         </li>
                         <li>
                             <a href="{{url('admin/vehicle-orders')}}">
                                 Rental Orders
                             </a>
                         </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-cube"></i>
                         Rental Catalogue
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                         <li>
                             <a href="{{url('admin/vehiclecategory')}}">
                                 {{__('messages.category')}}
                             </a>
                         </li>
                         <li>
                             <a href="{{url('admin/vehicle-brand')}}">
                                 Brands
                             </a>
                         </li>
                        <li>
                           <a href="{{url('admin/vehicles')}}">
                               Vehicles
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/vehicle-schedules')}}">
                               Schedules
                           </a>
                        </li>
                     </ul>
                  </li>

                   <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-cube"></i>
                         Shop Catalogues
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/product')}}">
                               {{__('messages.product')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/category')}}">
                           {{__('messages.category')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/options')}}">
                           {{__('messages.option')}}
                           </a>
                        </li>
                        <!--<li>
                           <a href="{{url('admin/attributeset')}}">
                           {{__('messages.attributeset')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/attribute')}}">
                           {{__('messages.attribute')}}
                           </a>
                        </li>-->
                        <li>
                           <a href="{{url('admin/review')}}">
                           {{__('messages.review')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/featureproduct')}}">
                           {{__('messages.feature_product')}}
                           </a>
                        </li>
                     </ul>
                  </li>
                  <!--<li class="active">
                     <a href="{{url('admin/product')}}"  aria-haspopup="true" aria-expanded="false">
                         <i class="menu-icon  fa fa-linode"></i>
                         {{__('messages.add')}} {{__('messages.catalog')}}
                     </a>
                  </li>-->
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-gift"></i>
                     {{__('messages.offers')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/offer')}}">
                           {{__('messages.big_offer')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/normaloffer')}}">
                           {{__('messages.normal_offer')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/sensonal_offer')}}">
                           {{__('messages.sensonal_offer')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/deals')}}">
                           {{__('messages.current_offer')}}
                           </a>
                        </li>
                     </ul>
                  </li>



                   <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="menu-icon  fa fa-tags"></i>
                           {{__('messages.coupon')}}/ Vouchers
                       </a>
                       <ul class="sub-menu children dropdown-menu">
                           <li>
                               <a href="{{url('admin/coupon')}}">Shop Coupon</a>
                           </li>
                           <li>
                               <a href="{{url('admin/vehicle-coupon')}}">Vehicle Coupon</a>
                           </li>
                       </ul>
                   </li>
                 @if(Session::get("is_web")==1)
                  <li class="active">
                     <a href="{{url('admin/sepical_category')}}">
                     <i class="menu-icon fa fa-image"></i>
                     {{__('messages.special_category')}}
                     </a>
                  </li>
                  @endif
                  <li class="active">
                     <a href="{{url('admin/faq')}}">
                     <i class="menu-icon fa fa-image"></i>
                        FAQs
                     </a>
                  </li>

                   <li class="active">
                     <a href="{{url('admin/notification')}}">
                     <i class="menu-icon fa fa-image"></i>
                     {{__('messages.notification')}}
                     </a>
                  </li>
                 @if(Session::get("is_web")==1)
                  <li class="active">
                     <a href="{{url('admin/contact')}}">
                     <i class="menu-icon fa fa-address-book"></i>
                     {{__('Inquiries')}}
                     </a>
                  </li>
                 @endif

                   <!--<li class="active">
                     <a href="{{url('admin/complain')}}">
                     <i class="menu-icon  fa fa-tags"></i>
                     {{__('messages.complain')}}
                     </a>
                  </li>-->



                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-users"></i>
                     {{__('messages.users')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/user')}}">
                           {{__('messages.users')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/admin')}}">
                           {{__('messages.admin')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/userrole')}}">
                           {{__('messages.role')}}
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-cog"></i>
                     {{__('Appearance')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/banner')}}">
                           {{__('messages.banner')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/slider')}}">
                           {{__('Home Page Slider')}}
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon  fa fa-cog"></i>
                     {{__('messages.site_setting')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/setting')}}">
                           {{__('messages.setting')}}
                           </a>
                        </li>
                        <!--<li>
                           <a href="{{url('admin/pages')}}">
                           {{__('messages.page')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/serverkey/1')}}">
                           {{__('messages.Android Server Key')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/serverkey/2')}}">
                           {{__('messages.Iphone Server Key')}}
                           </a>
                        </li>-->
                        @if(Session::get("is_web")==1)
                        <!--<li>
                           <a href="{{url('admin/support/1')}}">
                           {{__('messages.helpsupport')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/support/2')}}">
                           {{__('messages.termscon')}}
                           </a>
                        </li>-->
                        @endif
                     </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="menu-icon fa fa-globe"></i>
                     {{__('messages.localization')}}
                     </a>
                     <ul class="sub-menu children dropdown-menu">
                        <li>
                           <a href="{{url('admin/translations')}}">
                           {{__('messages.translation')}}
                           </a>
                        </li>
                        <li>
                           <a href="{{url('admin/taxes')}}">
                           {{__('messages.taxes')}}
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="active">
                     <a href="{{url('admin/report')}}">
                     <i class="menu-icon fa fa-bar-chart"></i>
                     {{__('messages.report')}}
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="header-menu">
               <div class="col-sm-10 pr0 eco-tog">
                  <a id="menuToggle" class="menutoggle pull-left">
                  <i class="fa fa fa-tasks"></i>
                  </a>
                  <div class="header-left florig">
                  </div>
               </div>
                   <div class="col-sm-1 dropdown for-notification">
                  <div class="dropdown">
  <button class="btn  dropdown-toggle" type="button" id="bell-button" onclick="checknotify()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-bell"></i>
                                <span class="count bg-danger" id="ordercount" style="">0</span>
  </button>
  <div class="dropdown-menu" aria-labelledby="bell-button" id="notificationshow">
   <p class="red" id="notificationmsg">{{__('messages.orders_pending')}}</p>
  </div>
</div>

                        </div>
               <div class="col-sm-1 col-12 eco-pro">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img class="user-avatar rounded-circle" src="{{Session::get('profile_pic')}}" alt="User Avatar">
                     </a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{url('admin/editprofile')}}">
                        <i class="fa fa-user"></i>
                        {{__('messages.my_profile')}}
                        </a>
                        <a class="nav-link" href="{{url('admin/changepassword')}}">
                        <i class="fa fa-user"></i>
                        {{__('messages.change_pwd')}}
                        </a>
                        <a class="nav-link" href="{{url('admin/logout')}}">
                        <i class="fa fa-power-off"></i>
                        {{__('messages.logout')}}
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         @yield('content')
   </div>
</div>
      <input type="hidden" id="url_path" value="{{url('/')}}">
      <input type="hidden" id="error_cur_pwd" value="{{__('passwords.error_cur_pwd')}}">
      <input type="hidden" id="delete_data" value='{{__("messages_error_success.delete_alert")}}'>
      <input type="hidden" id="data_save_success" value="{{__('messages_error_success.data_save_success')}}">
      <input type="hidden" id="something" value="{{__('messages_error_success.error_code')}}">
      <input type="hidden" id="generalmsg" value="{{__('messages_error_success.general_form_msg')}}">
      <input type="hidden" id="fixerror" value="{{__('messages_error_success.per_bet')}}">
      <input type="hidden" id="check_price" value="{{__('messages_error_success.check_price')}}">
      <input type="hidden" id="offer_price_error" value="{{__('messages_error_success.offer_price_error')}}">
      <input type="hidden" id="pass_mus" value="{{__('passwords.pass_mus')}}">
      <input type="hidden" id="requiredfields" value="{{__('messages_error_success.required_field')}}">
      <input type="hidden" id="soundnotify" value="{{asset('sound/notification/notification.mp3')}}">
      <input type="hidden" id="orders_pending" value="{{__('messages.orders_pending')}}">
      <input type="hidden" id="you_have" value="{{__('messages.you_have')}}">
      <input type="hidden" id="new_order" value="{{__('messages.new_order')}}">
      <input type="hidden" id="demo_lang" value="{{Session::get('is_demo')}}">
       <input type="hidden" id="vieworder_lang" value="{{__('messages.view_order')}}">
       <input type="hidden" id="setemail" value="{{__('messages.setupemail')}}"/>
        <input type="hidden" id="no_realted_msg" value="{{__('messages.no_realted')}}"/>
      <input type="hidden" id="coupon_vaild_max" value="{{__('messages.coupon_vaild_max')}}"/>
      <input type="hidden" id="image_invaild" value="{{__('messages.img_invaild')}}"/>
      <script src="{{asset('admin-asset/vendors/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('admin-asset/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{asset('admin-asset/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('admin-asset/assets/js/main.js')}}"></script>
      <script src="{{asset('admin-asset/vendors/chosen/chosen.jquery.min.js')}}"></script>
      <script src="{{asset('admin-asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
       <script src='https://code.jquery.com/jquery-1.12.3.js'></script>


      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
      <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
      <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
      <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
      <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
      <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
      <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
      <script type="text/javascript" src="{{asset('js/admin.js').'?v=45454'}}"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.js'></script>
      @yield('footer')
   </body>
</html>
