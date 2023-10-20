<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>

        .phone-number {
            position: relative;
        }

        .phone-number::before {
            position: absolute;
            top: 50%;
            left: 0.75rem;
            content: "+7";
            transform: translateY(-50%);
        }

        .phone-number input {
            padding-left: 1.9rem;
        }

    </style>
</head>
<body>

    @yield('base.content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#application-form').submit(function(e) {
                
                e.preventDefault();

                $('.error-msg').each((idx, msg) => {
                    $(msg).text('');
                })
                $('.success-message').text('');

                const data = $('#application-form').serialize();

                $.ajax({
                    url: "{{route('application')}}",
                    type: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('.success-message').text(data.message);
                        $('.form-input').each((idx, input) => {
                            $(input).val('');
                        })

                    },
                    error: function(error) {
                        const errors = jQuery.parseJSON(error.responseText);
                        for (key in errors) {
                            $(`.error-${key}`).text(errors[key][0]);
                        }
                    },
                });
            })
        })

    </script>


</body>
</html>