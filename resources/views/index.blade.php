<!-- resources/views/search.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Live Search</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Live Search</h2>
        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
        <div id="search-results" class="mt-3"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                $('#search-results').html('');
                var query = $(this).val();
                $.ajax({
                    url: "{{ url('search-data') }}" + "/" + query,
                    type: "GET",
                    data: {
                        'query': query
                    },
                    success: function(res) {
                        let options = "";
                        for(i = 0 ; i < res.length ; i++) {
                            options += `<option class="form-control mb-2" value="${res[i].parameter}">${res[i].route}</option>`;
                        }
                        $('#search-results').html(options);
                    }
                });
            });
        });
    </script>
</body>

</html>
