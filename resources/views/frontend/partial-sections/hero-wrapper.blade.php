<section class="hero-wrapper">
    <div class="hero-box hero-bg">
        <span class="line-bg line-bg1"></span>
        <span class="line-bg line-bg2"></span>
        <span class="line-bg line-bg3"></span>
        <span class="line-bg line-bg4"></span>
        <span class="line-bg line-bg5"></span>
        <span class="line-bg line-bg6"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto responsive--column-l">
                    <div class="hero-content pb-5">
                        <div class="section-heading">
                            <h2 class="sec__title cd-headline zoom">
                                Amazing <span class="cd-words-wrapper">
                                <b class="is-visible">Tours</b>
                                <b>Adventures</b>
                                <b>Flights</b>
                                <b>Hotels</b>
                                <b>Cars</b>
                                <b>Cruises</b>
                                <b>Package Deals</b>
                                <b>Fun</b>
                                <b>People</b>
                                </span>
                                Waiting for You
                            </h2>
                        </div>
                    </div><!-- end hero-content -->
                    <div class="section-tab text-center pl-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">
                                    <i class="la la-plane mr-1"></i>Flights Search
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="stay-tab" data-toggle="tab" href="#stay" role="tab" aria-controls="hotel" aria-selected="false">
                                    <i class="la la-hotel mr-1"></i>Stays Search
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="package" aria-selected="false">
                                    <i class="la la-shopping-bag mr-1"></i>Tour
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="vacation-package-tab" data-toggle="tab" href="#vacation-package" role="tab" aria-controls="car" aria-selected="true">
                                    <i class="la la-car mr-1"></i>Vacation Packages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="thing-to-do-tab" data-toggle="tab" href="#thing-to-do" role="tab" aria-controls="cruise" aria-selected="false">
                                    <i class="la la-ship mr-1"></i>Things to do
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="food-and-drink-tab" data-toggle="tab" href="#food-and-drink" role="tab" aria-controls="tour" aria-selected="false">
                                    <i class="la la-globe mr-1"></i>Food & Drink
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="spa-tab" data-toggle="tab" href="#spa" role="tab" aria-controls="package" aria-selected="false">
                                    <i class="la la-shopping-bag mr-1"></i>Spa
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="online-activity-tab" data-toggle="tab" href="#online-activity" role="tab" aria-controls="car" aria-selected="true">
                                    <i class="la la-car mr-1"></i>Online Activities
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="cruise" aria-selected="false">
                                    <i class="la la-ship mr-1"></i>Ticket
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="car-rental-tab" data-toggle="tab" href="#car-rental" role="tab" aria-controls="tour" aria-selected="false">
                                    <i class="la la-globe mr-1"></i>Car Rental
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab" aria-controls="car" aria-selected="true">
                                    <i class="la la-car mr-1"></i>Transfer
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="travel-gear-tab" data-toggle="tab" href="#travel-gear" role="tab" aria-controls="cruise" aria-selected="false">
                                    <i class="la la-ship mr-1"></i>Travel Gear
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" id="cruises-tab" data-toggle="tab" href="#cruises" role="tab" aria-controls="tour" aria-selected="false">
                                    <i class="la la-globe mr-1"></i>Cruises
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                    <div class="tab-content search-fields-container" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            @include('frontend.partial-search-fields.flight')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="stay" role="tabpanel" aria-labelledby="stay-tab">
                            @include('frontend.partial-search-fields.stay')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                            @include('frontend.partial-search-fields.tour')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="vacation-package" role="tabpanel" aria-labelledby="vacation-package-tab">
                            @include('frontend.partial-search-fields.vacation-package')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="thing-to-do" role="tabpanel" aria-labelledby="thing-to-do-tab">
                            @include('frontend.partial-search-fields.thing-to-do')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="food-and-drink" role="tabpanel" aria-labelledby="food-and-drink-tab">
                            @include('frontend.partial-search-fields.food-and-drink')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="spa" role="tabpanel" aria-labelledby="spa-tab">
                            @include('frontend.partial-search-fields.spa')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="online-activity" role="tabpanel" aria-labelledby="online-activity-tab">
                            @include('frontend.partial-search-fields.online-activity')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                            @include('frontend.partial-search-fields.ticket')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="car-rental" role="tabpanel" aria-labelledby="car-rental-tab">
                            @include('frontend.partial-search-fields.car-rental')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                            @include('frontend.partial-search-fields.transfer')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="travel-gear" role="tabpanel" aria-labelledby="travel-gear-tab">
                            @include('frontend.partial-search-fields.travel-gea')
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="cruises" role="tabpanel" aria-labelledby="cruises-tab">
                            @include('frontend.partial-search-fields.cruises')
                        </div><!-- end tab-pane -->
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
    </div>
</section>
