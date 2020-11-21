@extends('layouts.frontend.app')
@push('title') Index @endpush
@push('description')

@endpush
@push('css')

@endpush
@section('content')
    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    @include('frontend.partial-sections.hero-wrapper')
    <!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->

    <!-- ================================
    START INFO AREA
================================= -->
    @include('frontend.partial-sections.info')
    <!-- end info-area -->
    <!-- ================================
    END INFO AREA
================================= -->

    <div class="section-block"></div>

    <!-- ================================
    START ROUND-TRIP AREA
================================= -->
    @include('frontend.partial-sections.round-trip')
    <!-- end round-trip-flight -->
    <!-- ================================
    END ROUND-TRIP AREA
================================= -->

    <!-- ================================
    START HOTEL AREA
================================= -->
    @include('frontend.partial-sections.hotel')
    <!-- end hotel-area -->
    <!-- ================================
    END HOTEL AREA
================================= -->

    <!-- ================================
    START DESTINATION AREA
================================= -->
    @include('frontend.partial-sections.destination')
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->

    <!-- ================================
    START CAR AREA
================================= -->
    @include('frontend.partial-sections.car')
    <!-- end car-area -->
    <!-- ================================
    END CAR AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
    @include('frontend.partial-sections.testimonial')
    <!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    @include('frontend.partial-sections.cta')
    <!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
       START BLOG AREA
================================= -->
    @include('frontend.partial-sections.blog')
    <!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!-- ================================
    START MOBILE AREA
================================= -->
    @include('frontend.partial-sections.mobile')
    <!-- end mobile-app -->
    <!-- ================================
    END MOBILE AREA
================================= -->

    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    @include('frontend.partial-sections.clientlogo')
    <!-- end clientlogo-area -->
    <!-- ================================
       END CLIENTLOGO AREA
================================= -->
@endsection

<script>
    // main.js

    // POST request using fetch()
    fetch("https://jsonplaceholder.typicode.com/posts", {

        // Adding method type
        method: "POST",

        // Adding body or contents to send
        body: JSON.stringify({
            title: "foo",
            body: "bar",
            userId: 1
        }),

        // Adding headers to the request
        headers: {
            "Content-type": "application/json; charset=UTF-8"
        }
    })

        // Converting to JSON
        .then(response => response.json())

        // Displaying results to console
        .then(json => console.log(json));

</script>
@push('js')

@endpush