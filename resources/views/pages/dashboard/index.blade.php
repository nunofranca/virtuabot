@extends('master.index')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <x-Dashboard.EntriesComponents/>
            <x-Dashboard.RedsComponents/>
            <x-Dashboard.GreensComponents/>
            <x-Dashboard.TotalUsersComponents/>
        </div>
        <div class="row mt-4">
            <x-dashboard.GraphicsComponents/>
        </div>
        <div class="row mb-4">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <x-Dashboard.LatestScoresComponents/>
                <x-Dashboard.NextScoresComponents/>
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                <x-Dashboard.LatestEntriesComponents/>
            </div>

        </div>


        <footer class="footer py-4  ">
           @include('pages.dashboard.__partials.footer')
        </footer>
    </div>
@stop
