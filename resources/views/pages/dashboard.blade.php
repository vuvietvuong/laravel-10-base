@extends('layouts.app')

@section('title',"Home")

@section('css')
    
@endsection

@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <!-- Layout Demo -->
    <div class="layout-demo-wrapper">
      <div class="layout-demo-placeholder">
      </div>
      <div class="layout-demo-info">
        <h4>Layout fluid</h4>
        <p>Fluid layout sets a <code>100% width</code> at each responsive breakpoint.</p>
      </div>
    </div>
</div>    
@endsection

@push('scripts')
   
@endpush
