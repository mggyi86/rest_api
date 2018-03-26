@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <passport-authorized-clients></passport-authorized-clients>
        </div>
    </div>
</div>
@endsection
