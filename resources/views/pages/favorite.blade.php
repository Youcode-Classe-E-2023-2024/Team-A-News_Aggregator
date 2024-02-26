@extends('layouts.main')

@section('content')
    <x-link_home />

    <x-navbar_home />
    <x-favorite :favorites="$favorites"/>
    <x-footer_home />
@endsection


