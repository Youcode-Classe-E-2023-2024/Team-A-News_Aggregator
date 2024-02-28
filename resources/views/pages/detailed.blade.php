@extends('layouts.main')

@section('content')
    {{-- You only need to use the component directly --}}
    <x-detailed :news="$news" :likes="$likes" :comments="$comments" />
@endsection
