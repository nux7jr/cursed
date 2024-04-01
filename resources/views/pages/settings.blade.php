@extends('auth.guest')
@section('content')
<div>
guest layout
<a href='/login'>login</a>
<livewire:create-post />
</div>
@stop
