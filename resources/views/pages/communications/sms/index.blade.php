@extends('layouts.master', ['title' => 'SMS'])

@section('content')


<ul class="collection">
    @foreach ($sms as $sms)
        <li class="collection-item avatar">
            <i class="material-icons circle">person</i>
            <span class="title">{{ $sms->phone }}</span>
            <p>
                {{ $sms->timestamps }} <br>
                {{ $sms->message }}
            </p>
        </li>
    @endforeach
</ul>


@stop
