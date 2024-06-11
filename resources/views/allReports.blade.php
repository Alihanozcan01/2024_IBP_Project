<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <title>Document</title>
</head>
<body>

    <div class="card-header">
        <h3 class="card-title">Duyurular Listesi</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>İçerik</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports->sortBy('role') as $report)
                    <tr>
                        <td>{{ $report->tittle }}</td>
                        <td>{{ $report->description }}</td>
                        <td>{{ Str::substr($report->content, 0, 150) }}...</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
