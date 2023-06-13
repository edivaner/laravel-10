<h1>Create Suporte</h1>

<x-alert></x-alert>

<form action="{{route('support.store')}}" method="POST">
    @include('admin.supports.partials.form')
</form>
