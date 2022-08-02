@extends('layout.app')
@section('content')
<div>
    <form    method="POST"  action="{{ route('guiters.store')} ">
        @csrf
        <input type="text"  name="guiter_name" placeholder="Enter guiter name">
        <input type="text"  name="brand" placeholder="Enter guiter name">
        <input type="text"  name="year" placeholder="Enter guiter name">
        <input type="submit" name="guiter_name" value="submit">
    </form>
</div>
@endsection

<h3></h3>
 
</div>