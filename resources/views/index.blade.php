<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="row d-flex justify-content-center tambah-aduan">
        <div class="col-sm-8">
            <div class="card p-3" style="width: 65rem">
                <button class="btn btn-info w-2">Tambah Aduan Kendala</button>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-sm-8">
            <div class="card p-5" style="width: 65rem;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Category.</th>
                            <th>Descripsi</th>
                            <th>Solusi</th>
                            <th>Status Penanganan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($problem as $problems)
                            <tr>
                                <td>{{ $problems->id }}</td>
                                <td>{{ $problems->category->category_name }}</td>
                                <td>{{ $problems->descrition }}</td>
                                <td>{{ $problems->solutions }}</td>
                                <td>{{ $problems->status->status_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
