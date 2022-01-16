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
    <div class="main container">
        <h2 class="title">Haftalık Çalışma Planı</h2>
       <div class="developers">
           <div class="row">
                @foreach ($workProgram as $key => $row)
                <div class="col-12 col-sm-6 col-md-3 col-xl-2 ">
                    <div class="developer-item">
                        <div class="header">
                            <img src="https://brausermaimonides.org/wp-content/uploads/2014/12/default_profile_pic.jpg" class="img-fluid" alt="...">
                            <h5>{{ $row[0]['dev']->name }}</h5> <hr>
                            </div>
                            <div class="body">
                            <ul>
                                @foreach ($row as $job)
                                <li><strong>{{ $job['title'] }} :</strong> <span class="badge rounded-pill bg-warning text-dark">{{ $job['time'] }} saat</span>
</li>

                                @endforeach
                                
                            </ul>
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