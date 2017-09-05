@extends('layout')

@section('body')
    <h1 class="spacing-bottom-large">Create earning</h1>
    <div class="box spacing-small">
        <form method="POST" action="/earnings">
            {{ csrf_field() }}
            <label>Date</label>
            <input type="text" name="date" />
            <label>Description</label>
            <input type="text" name="description" />
            <label>Amount</label>
            <input type="text" name="amount" />
            <input type="submit" value="Create earning" />
        </form>
    </div>
@endsection