<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haftalık Çalışma Planı</title>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
    <div class="main container-fluid">
        <h2 class="title">Haftalık Çalışma Planı</h2>
        <h6 class="sub-title"><strong>Eldeki işlerin tahmini bitiş süresi : </strong> {{ round($averageFinish / 45 ,2) }} Hafta</h6>
       <div class="developers">
           <div class="row">
                @foreach ($workProgramData as $key => $row)
                <div class="col-12 col-sm-6 col-md-3 col-xl-2 ">
                    <div class="developer-item">
                        <div class="header">
                            <h5>{{ $row[0]['dev']->name }}</h5> <hr>
                            </div>
                            <div class="body">
                            
                                @foreach ($row->groupBy('week') as $key => $week)
                                    <div class="week-item">
                                        <div class="week-title">{{ $key }}. Hafta</div>
                                        <ul>
                                        @foreach ($week as $job)
                                            <li><strong>{{ $job['title'] }} :</strong> <span class="badge rounded-pill bg-warning text-dark">{{ $job['time'] }} saat</span></li>
                                        @endforeach
                                    </ul>
                                    </div>
                                @endforeach
                                <hr>
                                <strong>Toplam :</strong> {{ $row->sum('time') }}  Saat
                            
                            </div>
                            
                    </div>
                  
                </div>
            @endforeach
           </div>
       </div>
     </div>
    
    <script src="{{ asset('assets/vendor/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>