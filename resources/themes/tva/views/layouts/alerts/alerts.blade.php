<script type="text/javascript">
    window.flashMessages = [];
    @if ($success = session('success'))
        window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
    @elseif ($addToCart = session('addToCart'))
        const currentlyAdded  = document.getElementById('currentlyAdded');
         currentlyAdded.style.opacity='1';
         currentlyAdded.style.left='0';
         setTimeout(function() {
            currentlyAdded.style.opacity='0';
        }, 4000);
        setTimeout(function() {
            currentlyAdded.style.display='none';
        }, 9000);
    @elseif ($warning = session('warning'))
        window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
    @elseif ($error = session('error'))
        window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
        ];
    @elseif ($info = session('info'))
        window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
        ];
    @endif
    window.serverErrors = [];
    @if(isset($errors))
        @if (count($errors))
            window.serverErrors = @json($errors->getMessages());
        @endif
    @endif
</script>