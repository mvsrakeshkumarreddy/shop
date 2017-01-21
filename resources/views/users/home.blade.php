@extends('layouts.master')

@section('content')
<h3>welcome {{\Auth::user()->name}}</h3>
<h4>your email id is {{\Auth::user()->email}}</h4>
<h5>your mobile no is {{\Auth::user()->mobileno}}</h5>



@endsection