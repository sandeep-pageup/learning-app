<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="tab-megamenu container mt-5">
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu1')">London</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu2')">Paris</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu3')">Tokyo</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu4')">Paris</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu5')">Tokyo</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu6')">Paris</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu7')">Tokyo</button>
        <button class="tablinks btn btn-primary btn-sm" onclick="openMegamenu(event, 'megamenu8')">Paris</button>
    </div>

    @component('components.megamenu1') @endcomponent
    @component('components.megamenu2') @endcomponent
    @component('components.megamenu3') @endcomponent
    @component('components.megamenu4') @endcomponent
    @component('components.megamenu5') @endcomponent
    @component('components.megamenu6') @endcomponent
    @component('components.megamenu7') @endcomponent
    @component('components.megamenu8') @endcomponent

    <script>
        function openMegamenu(evt, megamenuId) {
            tabs = document.getElementsByClassName("tab");
            for (i = 0; i < tabs.length; i++) {
                tabs[i].classList.add("d-none");
            }
            document.getElementById(megamenuId).classList.remove("d-none");
        }
        window.onload = function(){
            tabs = document.getElementsByClassName("tab");
            for (i = 0; i < tabs.length; i++) {
                tabs[i].classList.add("d-none");
            }
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
