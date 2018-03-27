@extends('layouts.app')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3"></h1>
            <p></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Free Puzzles</h2>
                <p>Try your free puzzle now!</p>
                <p><a class="btn btn-secondary" href="#" role="button">Start &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Paid Puzzles</h2>
                <p>Lets explore the challenging side!</p>
                <p><a class="btn btn-secondary" href="#" role="button">Start &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Puzzle of the Day</h2>
                <p>Your Daily Puzzle Dose is waiting for you!</p>
                <p><a class="btn btn-secondary" href="#" role="button">Start &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

@endsection