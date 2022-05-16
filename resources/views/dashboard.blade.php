<?php $page = 'home'; ?>
@extends('layouts.seller')
@section('title','Dashboard')
@section('content')
<h1>Dashboard</h1>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>

@endsection
@endsection

