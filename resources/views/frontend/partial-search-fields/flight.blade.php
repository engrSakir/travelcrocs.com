<div class="section-tab section-tab-2 pb-3">
    <ul class="nav nav-tabs" id="myTab3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="one-way-tab" data-toggle="tab" href="#one-way" role="tab" aria-controls="one-way" aria-selected="true">
                One way
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="round-trip-tab" data-toggle="tab" href="#round-trip" role="tab" aria-controls="round-trip" aria-selected="false">
                Round-trip
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="multi-city-tab" data-toggle="tab" href="#multi-city" role="tab" aria-controls="multi-city" aria-selected="false">
                Multi-city
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="um-rah-tab" data-toggle="tab" href="#um-rah" role="tab" aria-controls="multi-city" aria-selected="false">
                Um-rah
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="group-ticket-tab" data-toggle="tab" href="#group-ticket" role="tab" aria-controls="multi-city" aria-selected="false">
                Group Ticket
            </a>
        </li>
    </ul>
</div><!-- end section-tab -->
<div class="tab-content" id="myTabContent3">
    <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
        <div class="contact-form-action">
            <form action="#" class="row align-items-center">
                <div class="col-lg-6 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying from</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" id="one-way-search-from" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-6">
                    <div class="input-box">
                        <label class="label-text">Flying to</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Departing</label>
                        <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input class="date-range form-control" type="text" name="daterange-single" value="04/28/2020">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Passengers</label>
                        <div class="form-group">
                            <div class="dropdown dropdown-contain">
                                <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <span>Passengers <span class="qtyTotal guestTotal_2">0</span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Adults</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Children</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Infants</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end dropdown -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Coach</label>
                        <div class="form-group select-contain w-auto">
                            <select class="select-contain-select">
                                <option value="1" selected>Economy</option>
                                <option value="2">Business</option>
                                <option value="3">First class</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                </div>
            </form>
        </div>
    </div><!-- end tab-pane -->
    <div class="tab-pane fade" id="round-trip" role="tabpanel" aria-labelledby="round-trip-tab">
        <div class="contact-form-action">
            <form action="#" class="row align-items-center">
                <div class="col-lg-6 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying from</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-6">
                    <div class="input-box">
                        <label class="label-text">Flying to</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Departing - Returning</label>
                        <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input class="date-range form-control" type="text" name="daterange" value="04/28/2020">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Passengers</label>
                        <div class="form-group">
                            <div class="dropdown dropdown-contain">
                                <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <span>Passengers <span class="qtyTotal guestTotal_3">0</span></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-wrap">
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Adults</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Children</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                            <label>Infants</label>
                                            <div class="qtyBtn d-flex align-items-center">
                                                <input type="text" name="qtyInput" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end dropdown -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 pr-0">
                    <div class="input-box">
                        <label class="label-text">Coach</label>
                        <div class="form-group">
                            <div class="select-contain w-auto">
                                <select class="select-contain-select">
                                    <option value="1" selected>Economy</option>
                                    <option value="2">Business</option>
                                    <option value="3">First class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3">
                    <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
                </div>
            </form>
        </div>
        <div class="advanced-wrap">
            <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                Advanced options <i class="la la-angle-down ml-1"></i>
            </a>
            <div class="collapse pt-3" id="collapseThree">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="input-box">
                            <label class="label-text">Preferred airline</label>
                            <div class="form-group">
                                <div class="select-contain w-100">
                                    <select class="select-contain-select">
                                        <option selected="selected" value=""> No preference</option>
                                        <option value="AN">Advanced Air</option>
                                        <option value="A3">Aegean</option>
                                        <option value="EI">Aer Lingus</option>
                                        <option value="5G">Aerocuahonte / Mayair</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end advanced-wrap -->
    </div><!-- end tab-pane -->
    <div class="tab-pane fade multi-flight-wrap" id="multi-city" role="tabpanel" aria-labelledby="multi-city-tab">
        <div class="contact-form-action multi-flight-field d-flex align-items-center">
            <form action="#" class="row flex-grow-1 align-items-center">
                <div class="col-lg-4 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying from</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying to</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4">
                    <div class="input-box">
                        <label class="label-text">Departing</label>
                        <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input class="date-range form-control date-multi-picker" type="text" name="daterange-single" value="04/28/2020">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
            </form>
            <div class="multi-flight-delete-wrap pt-3 pl-3">
                <button class="multi-flight-remove" type="button"><i class="la la-remove"></i></button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 pr-0">
                <div class="form-group">
                    <button class="theme-btn add-flight-btn margin-top-40px w-100" type="button"><i class="la la-plus mr-1"></i>Add another flight</button>
                </div>
            </div>
            <div class="col-lg-3 pr-0">
                <div class="input-box">
                    <label class="label-text">Passengers</label>
                    <div class="form-group">
                        <div class="dropdown dropdown-contain">
                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <span>Passengers <span class="qtyTotal guestTotal_4">0</span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-wrap">
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Adults</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Children</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Infants</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end dropdown -->
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 pr-0">
                <div class="input-box">
                    <label class="label-text">Coach</label>
                    <div class="form-group">
                        <div class="select-contain w-auto">
                            <select class="select-contain-select">
                                <option value="1" selected>Economy</option>
                                <option value="2">Business</option>
                                <option value="3">First class</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3">
                <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
            </div>
        </div>
    </div><!-- end tab-pane -->
    <div class="tab-pane fade multi-flight-wrap" id="um-rah" role="tabpanel" aria-labelledby="um-rah-tab">
    <div class="tab-pane fade multi-flight-wrap" id="group-ticket" role="tabpanel" aria-labelledby="group-ticket-tab">
        <div class="contact-form-action multi-flight-field d-flex align-items-center">
            <form action="#" class="row flex-grow-1 align-items-center">
                <div class="col-lg-4 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying from</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 pr-0">
                    <div class="input-box">
                        <label class="label-text">Flying to</label>
                        <div class="form-group">
                            <span class="la la-map-marker form-icon"></span>
                            <input class="form-control" type="text" placeholder="City or airport">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4">
                    <div class="input-box">
                        <label class="label-text">Departing</label>
                        <div class="form-group">
                            <span class="la la-calendar form-icon"></span>
                            <input class="date-range form-control date-multi-picker" type="text" name="daterange-single" value="04/28/2020">
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
            </form>
            <div class="multi-flight-delete-wrap pt-3 pl-3">
                <button class="multi-flight-remove" type="button"><i class="la la-remove"></i></button>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3 pr-0">
                <div class="form-group">
                    <button class="theme-btn add-flight-btn margin-top-40px w-100" type="button"><i class="la la-plus mr-1"></i>Add another flight</button>
                </div>
            </div>
            <div class="col-lg-3 pr-0">
                <div class="input-box">
                    <label class="label-text">Passengers</label>
                    <div class="form-group">
                        <div class="dropdown dropdown-contain">
                            <a class="dropdown-toggle dropdown-btn" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                <span>Passengers <span class="qtyTotal guestTotal_4">0</span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-wrap">
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Adults</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Children</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="qty-box d-flex align-items-center justify-content-between">
                                        <label>Infants</label>
                                        <div class="qtyBtn d-flex align-items-center">
                                            <input type="text" name="qtyInput" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end dropdown -->
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 pr-0">
                <div class="input-box">
                    <label class="label-text">Coach</label>
                    <div class="form-group">
                        <div class="select-contain w-auto">
                            <select class="select-contain-select">
                                <option value="1" selected>Economy</option>
                                <option value="2">Business</option>
                                <option value="3">First class</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3">
                <a href="flight-search-result.html" class="theme-btn w-100 text-center margin-top-20px">Search Now</a>
            </div>
        </div>
    </div><!-- end tab-pane -->
</div>
</div>



<!-- ================================
            START PAGE LAVEl SCRIPT
================================= -->
<script>
    $(document).ready(function() {
        //Prapok Name
        $( "#one-way-search-from" ).autocomplete({
            source: function(request, response) {
                console.log(request.term);
                var api_url = 'https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY,AIRPORT&keyword='+request.term;
                var access_token = "{{ getAmadeusAccessToken() }}";
                $.ajax({
                    method: 'GET',
                    url: api_url,
                    headers: {
                        Authorization: 'Bearer ' + access_token
                    },
                    success:function(responsed_data){
                        console.log(responsed_data)
                    },
                    error: function (xhr) {
                        Swal.fire({
                            title: 'Expire access code !',
                            text: "Please reload this page for generate a new access code.",
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#deaa40',
                            cancelButtonColor: '#0fcaca',
                            confirmButtonText: 'Yes, reload it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Thank you!',
                                    'New access code generation completed.',
                                    'success'
                                )
                            }
                            location.reload();
                        })
                    },
                })
            },
            minLength: 1,
        });
    });
</script>
<!-- ================================
         END PAGE LAVEl SCRIPT
================================= -->

