<?php
use Carbon\Carbon;
?>
@extends('layout')

@section('content')
    <h2 class="p-2">Pratiques</h2>
    <livewire:practices-home :nbDays="$nbDays" />
@endsection
