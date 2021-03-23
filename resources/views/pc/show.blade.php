@extends('layout.main') 
{{-- is cia imamas html atvazidavimas --}}

@section('content')
    <h1>Calculator</h1>
    <form action="{{route('do-math')}}" method="post">
    <div>{{$r}}</div>
       A: <input type="text" name="a"> 
       B: <input type="text" name="b"> 
    <button type="submit">DO MATH</button>
    @csrf
    </form>
@endsection

@section('title') Calculator @endsection

