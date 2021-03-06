@extends('backend.layouts.app')

@section('content')
    
<div class="container">

  @component('backend.components.breadcrumb')
    @slot('title') Create Product @endslot
    @slot('parent') Dashboard @endslot
    @slot('active') Products @endslot
  @endcomponent

  <br>

  <form method="post" action="{{ route('admin.telegramuser.store') }}" class="form-horizontal">
  
    {{ csrf_field() }}
  
    @include('backend.telusers.partials.form')

  </form>

</div>

@endsection