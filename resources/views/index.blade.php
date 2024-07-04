<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .list-group .list-group-item {
            border-radius: 0;
            cursor: move;
        }

        .list-group .list-group-item:hover {
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-xl-10 order-2 order-sm-1 mt-3">
                <h2 class="h6"><strong>Sortable List</strong></h2>
                <form action="{{ url('store') }}" method="get">
                    @csrf
                    <div id="sortablelist" class="list-group mb-4 mt-3" data-id="1">
                        @foreach ($sortable_item_masters as $sortable_item_master)
                            <input id="class-{{ $sortable_item_master->id }}" name="classes[]" type="text" class="form-control" value="{{ $sortable_item_master->class }}"
                                            readonly>
                            @foreach ($sortable_item_master->sortable_items as $sortable_item)
                                <div class="list-group-item d-flex align-items-center justify-content-between"
                                    data-id="{{ $sortable_item->id }}">
                                    <div>
                                        <input id="subject-{{ $sortable_item->id }}" name="subjects[{{ $sortable_item_master->id }}][]" type="text" class="form-control" value="{{ $sortable_item->Subject }}"
                                            readonly>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
</body>
<script>
    new Sortable(document.getElementById('sortablelist'), {
        animation: 150,
        ghostClass: 'sortable-ghost'
    });
</script>

</html>
