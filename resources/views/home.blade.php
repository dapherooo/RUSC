
@extends('layouts.main')

@section('header')

<div id="carouselExampleDark" class="carousel carousel slide mt-5" data-bs-ride="carousel" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="https://source.unsplash.com/1800x800/?sporty" class="d-block w-100" alt="sporty">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1>RUSC</h1>
          <h5>Remember your schedule and make your event for your life with RUSC together grow up  to better.</h5>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="https://source.unsplash.com/1800x800/?healty" class="d-block w-100" alt="healty">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1>RUSC</h1>
          <h5>Make your dream to be to with go to the race life.</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1900x800/?fun" class="d-block w-100" alt="fun">
        <div class="carousel-caption d-none d-md-block mb-5">
          <h1>RUCS</h1>
          <h5>Vision without action is a daydream. Action without vision is a nightmare.</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection

  