@extends('layouts.master')

@push('head')
    <link href='/css/billsplitter.css' rel='stylesheet'>
@endpush

@section('title')
    Bill Details
@endsection


@section('content')
    <h2 class="subheader">Bill Details</h2>

    <form class="billsplitter-form" method='POST' action='/submit'>

        {{ csrf_field() }} 

        <ul>
            <li>
                *Required
            </li>
            <li>
                <label for='split'>* Split How Many Ways?</label>
                <input id='split' name='split' type='number' min="1" step="1" value='{{ old('split') }}' required>
                <span>Enter the Number of People</span>
            </li>
            <li>
                <label for='tab'>* How Much Was the Tab?</label>
                <input id='tab' name='tab' type='number' min="0.00" step="0.01" value='{{ old('tab') }}' required>
                <span>Enter the Amount of the Bill</span>
            </li>
            <li>
                <label for='tip'>How Was The Service?</label>
                <select id="tip" name='tip'>
                    <option value='0.1'>Poor (10% Tip)</option>
                    <option value='0.15' selected>Good (15% Tip)</option>
                    <option value='0.2'>Great! (20% Tip)</option>
                </select>
                <span>Enter the Tip Amount</span>
            </li>
            <li>
                <label for='round'>Round Up?</label>
                <input id='round'  name='round' type='checkbox' value='1'>
                <span>Would You Like to Round Out the Total Amount</span>
            </li>
            <li>
                <input type='submit' value='Calculate'>
            </li>
        </ul>
    </form> 
@endsection