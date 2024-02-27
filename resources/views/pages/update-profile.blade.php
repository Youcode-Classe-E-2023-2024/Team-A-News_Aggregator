<!DOCTYPE html>
<html lang="en">

<head>
    <x-navbar_home/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @include('components.link_profile')
</head>

<x-update-profile :user="$user"/>

</html>
