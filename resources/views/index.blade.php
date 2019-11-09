@extends('layouts.app')

@section('content')
{{ $pulses }}

<div>
    {!! $chart->container() !!}
</div>
@endsection
