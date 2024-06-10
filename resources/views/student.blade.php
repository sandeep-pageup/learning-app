<!DOCTYPE html>
<html>
<head>
    <title>Laravel DataTables Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Laravel DataTables Example</h2>
        <table class="table table-bordered table-striped" id="students-table">
            <thead class="thead-dark">
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
        </table>
    </div>

    <script type="text/javascript">
        $(function () {
            $('#students-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url('students-add-column') }}',
                columns: [
                    { data: 'action' },
                    { data: 'id' },
                    { data: 'name' }
                ],
                "language": {
                    "emptyTable": "No data available in table",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "Showing 0 to 0 of 0 entries",
                    "lengthMenu": "Show _MENU_ entries",
                    "loadingRecords": "Loading...",
                    "processing": "Processing...",
                    "search": "Search:",
                    "zeroRecords": "No matching records found"
                },
                "pagingType": "full_numbers",
                "lengthMenu": [10, 25, 50, 75, 100],
                "pageLength": 10
            });
        });
    </script>
</body>
</html>
