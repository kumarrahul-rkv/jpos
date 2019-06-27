@if (session()->has('success'))
    <script>
        new PNotify({
            title: 'Success',
            text: '{!! session()->get('success') !!}',
            type: 'success'
        });
    </script>
@endif
