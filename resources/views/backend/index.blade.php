@extends('backend/layout')
@section('title', 'Home')
@section('content')
    <h1 class="mt-4">Welcome to Dashboard for Administrator</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar mr-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>

    <h2 class="text-center">Coronavirus Disease (COVID-19) Situation Reports</h2>
    <div class="container text-center">
        <button class="btn btn-primary" id="btn1">Covid 19 - Global</button>
    </div>
    </br>
    <div class="container text-center">
        <button class="btn btn-primary" id="btn1-vn">Covid 19 - Viet Nam</button>
    </div>
    <div class="container text-center" id="results"></div>

    <script>
        var btn1 = document.getElementById("btn1");
        var btn1_vn = document.getElementById("btn1-vn");
        btn1_vn.addEventListener('click', () => {

            // fetch request to api
            fetch('https://corona.lmao.ninja/v2/countries/vn')
                .then((response) => {
                    return (response.json());
                })
                .then((data) => {
                    results.innerHTML = `
                        <ul class="list-group mb-4">
                        <li class="list-group-item"><strong>Country: ${data.country}</strong></li>
                        <li class="list-group-item"><strong>Cases: </strong> ${data.cases}</li>
                        <li class="list-group-item"><strong>Deaths: </strong> ${data.deaths}</li>
                        </ul>
                        `;
                })
        })
        btn1.addEventListener('click', () => {

            // fetch request to api
            fetch('https://corona.lmao.ninja/v2/countries')
                .then((response) => {
                    return (response.json());
                })
                .then((data) => {

                    var results = document.getElementById('results');

                    var template = `
                        <h4 class="mt-4">Covid Cases</h4>
                        `
                    data.forEach((element) => {
                        template += `
                            <ul class="list-group mb-4">
                            <li class="list-group-item"><strong>Country: ${element.country}</strong></li>
                            <li class="list-group-item"><strong>Cases: </strong> ${element.cases}</li>
                            <li class="list-group-item"><strong>Deaths: </strong> ${element.deaths}</li>
                            </ul>
                            `
                    })

                    results.innerHTML = template;
                })
        })
    </script>

@endsection
