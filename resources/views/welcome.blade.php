@extends('layout.master')

@section('content')
    <style>
        /* Carousel Responsive */
        .carousel-item img {
            width: 100%;
            height: 50vh; /* minimal 50% dari tinggi layar */
            object-fit: cover; /* biar gambar tidak ketarik */
        }

        @media (min-height: 800px) {
            .carousel-item img {
                height: 60vh; /* bisa dinaikkan biar lebih proporsional di layar tinggi */
            }
        }

        @media (min-width: 992px) {
            .carousel-item img {
                height: 70vh; /* di desktop kasih lebih tinggi */
            }
        }
    </style>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/01.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/02.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/01.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- Komponen lainnya --}}
    @include('component._component1')
    @include('component._component2')
    @include('component._component3')
    @include('component._component4')
    @include('component._component5')
    @include('component._component6')
    @include('component._component7')
    @include('component._component8')
    @include('component._component9')

    {{-- Contact --}}
    <div id="contact" class="contact-area default-padding">
        ...
    </div>
@endsection
