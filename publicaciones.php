@extends('fragmentos.menu2')

@section('content')
<section class="home ">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto');




        .title {
            text-align: center;
            font-size: 50px;
            color: orange;
            margin-top: 100px;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }


        .container2 {
            text-align: center;
            width: 100%;
            max-width: 1200px;
            height: 430px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .busca {
            color: red;
            margin: 0 auto;
        }

        .busca:hover {
            background-color: orange;
        }

        .container2 .card {
            background-color: rgb(224, 224, 224, 0.550);
            width: 330px;
            height: 390px;
            border-radius: 8px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            transition: all 0.25s;
        }

        .container2 .card:hover {
            transform: scale(1.2);
            /*transform: translateY(-15px);*/
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
            background-color: white;

        }

        .container2 .card img {
            width: 330px;
            height: 220px;
        }


        .container2 .card h4 {
            font-weight: 600;
        }

        .container2 .card p {
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
        }

        .container2 .card a {
            font-weight: 500;
            text-decoration: none;
            color: #3498db;
        }


        .borde {

            text-align: center;
            width: 70%;
            margin: 0 auto;
        }

        @media screen and (max-width:800px) {
            .container2 .card img {
                width: 230px;
            }

        }
    </style>
                    @if(Session::has('message'))
                    <div class="card-body content">
                    <div class="alert alert-{{ Session::get('color') }} alert-dismissible fade show"
                        role="alert">
                        <strong>{{ Session::get('message') }}</strong>
                        </div>
            </div>

    @endif

    <h1 class="title">Buscando Huellitas</h1>
    <h1>EN PROCESO</h1>


    <div class="borde">

        <div class="container2">

        @foreach($mascotas as $mascota)

            <div class="card">
                <img src="{{url('/pdfsS')}}/{{$mascota->foto}}">
                <h4>{{ $mascota->nombre }}</h4>
                <p>{{ $mascota->estado }}</p>

                <div class="card-footer ">
                    <div class="row ">
                        <button class="btn btn-sm busca" class="tooltip-test" title="add to cart">

                            <h3><i class="bi bi-pencil-square"></i><a href="{{ route('vistas.edit_mascotas', $mascota->id) }}"
                                    >Editar</a></h3>

    </button>
                    </div>
                </div>
            </div>

            @endforeach


            
            

            

        


        </div>
    </div>

</section>


 
 


@endsection