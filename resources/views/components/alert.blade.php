<div class="alert alert-danger">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
</div>
