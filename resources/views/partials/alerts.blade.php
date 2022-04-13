@if (session('success'))
    <script>
        iziToast.success({
            title: '',
            message: '{{ session('success') }}'
        });
    </script>
@endif

@if (session('error'))
    <script>
        iziToast.error({
            title: 'Error',
            message: '{{ session('error') }}'
        })
    </script>
@endif

@if (session('status'))
    <script>
        iziToast.info({
           title: 'Info',
           message: '{{ session('status') }}'
        });
    </script>
@endif
@if(session('warning'))
    <script>
        iziToast.warning({
            title: 'Advertencia',
            message: '{{ session('warning') }}'
        });
    </script>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: 'Error',
                message: '{{ $error }}'
            })
        </script>
    @endforeach
@endif
