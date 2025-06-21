@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Latihan javascript</h1>
        <button id="alertButton" class="btn btn-primary mt-3">Button</button>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('alertButton').addEventListener('click', function() {
            alert('Hello');
        });
    </script>
@endpush