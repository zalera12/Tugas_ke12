@extends('layouts.main')

@section('content')
 <!-- Hero Section -->
 <div class="hero-section text-black">
    <div>
        <h1>Welcome to FilmHub</h1>
        <p>Explore the latest movies and series from around the world</p>
        <a href="#" class="btn btn-primary btn-lg">Start Watching</a>
    </div>
</div>

<!-- Combined Featured Movies and Popular Series Section -->
<div class="container" style="margin-top: 80px;">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-center">
                <!-- Featured Movies Card -->
                <div class="card mx-3 mb-4" style="width: 45%;">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Featured Movies</h3>
                    </div>
                    <div class="card-body">
                        <!-- Example Movie Card -->
                        <div class="card mb-3">
                            <img src="path_to_movie_poster.jpg" class="card-img-top" alt="Movie Poster">
                            <div class="card-body">
                                <h5 class="card-title">Movie Title</h5>
                                <p class="card-text">A brief description of the movie.</p>
                                <a href="#" class="btn btn-primary">Watch Now</a>
                            </div>
                        </div>

                        <!-- Add more movie cards as needed -->
                    </div>
                </div>

                <!-- Popular Series Card -->
                <div class="card mx-3 mb-4" style="width: 45%;">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Popular Series</h3>
                    </div>
                    <div class="card-body">
                        <!-- Example Series Card -->
                        <div class="card mb-3">
                            <img src="path_to_series_poster.jpg" class="card-img-top" alt="Series Poster">
                            <div class="card-body">
                                <h5 class="card-title">Series Title</h5>
                                <p class="card-text">A brief description of the series.</p>
                                <a href="#" class="btn btn-primary">Watch Now</a>
                            </div>
                        </div>

                        <!-- Add more series cards as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-dark container-fluid text-white text-center py-3 mt-5">
    <p>&copy; 2024 FilmHub. All Rights Reserved.</p>
</footer>

@endsection