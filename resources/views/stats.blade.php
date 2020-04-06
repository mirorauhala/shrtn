@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3><b>Statistics for</b>: {{ $url->url }}</h3>
            <div class="card mt-4">
                <div class="card-header">Link statistics</div>
                <div class="card-body">
                    <h5>Total visits: {{ $url->follows->count() }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
