@extends('layouts.lay_error')

  <!-- START @ERROR PAGE -->
@section('content')

    <div class="error-wrapper">
        <h1>500</h1>
        <h3>Internal Server Error.</h3>
        <h4>Sorry, something went wrong.</h4>
        <a href="../../frontend/start-page/html/index.html" class="btn btn-sm btn-theme">Return to Home</a>
        <a href="{{url('dashboard/index')}}" class="btn btn-sm btn-theme">Go to Dashboard</a>
    </div>
     
@stop
<!--/ END ERROR PAGE -->
