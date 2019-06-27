@if (isset($errors)&&count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
            new PNotify({
                title: 'Oh No!',
                text: '{!! $error !!}',
                type: 'error'
            });
        </script>
        <li><strong>{!! $error !!}</strong></li>
    @endforeach
@endif
