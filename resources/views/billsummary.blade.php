@extends('layouts.master')

@push('head')
    <link href='/css/billsplitter.css' rel='stylesheet'>
@endpush

@section('title')
    Bill Summary
@endsection

@section('content')
    <h2 class="subheader">Bill Summary</h2>

    <div class="result-container">
        <p class="result-text">Each persion should pay <span class="result-amount">${{ $rounded }}</span></p>
    </div>
@endsection