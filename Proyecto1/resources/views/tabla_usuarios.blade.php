<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilo-Form.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
    <title>Seguimiento Estudiantil</title>

    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include("layouts.header")
</head>

<body class="antialiased">

<div class="container py-5">
    <div class="row">
        <div class="col-lg-7 mx-auto bg-white rounded shadow">
            <div class="table-responsive">
                <table class="table table-fixed">
                    <thead>
                        <tr>
                            <th scope="col" class="col-3">#</th>
                            <th scope="col" class="col-3">First</th>
                            <th scope="col" class="col-3">Last</th>
                            <th scope="col" class="col-3">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="col-3">1</th>
                            <td class="col-3">Mark</td>
                            <td class="col-3">Otto</td>
                            <td class="col-3">@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">2</th>
                            <td class="col-3">Jacob</td>
                            <td class="col-3">Thornton</td>
                            <td class="col-3">@fat</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">3</th>
                            <td colspan="2" class="col-6">Larry the Bird</td>
                            <td class="col-3">@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">4</th>
                            <td class="col-3">Martin</td>
                            <td class="col-3">Williams</td>
                            <td class="col-3">@Marty</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">5</th>
                            <td colspan="2" class="col-3">Sam</td>
                            <td colspan="2" class="col-3">Pascal</td>
                            <td class="col-3">@sam</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">6</th>
                            <td class="col-3">John</td>
                            <td class="col-3">Green</td>
                            <td class="col-3">@john</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">7</th>
                            <td colspan="2" class="col-3">David</td>
                            <td colspan="2" class="col-3">Bowie</td>
                            <td class="col-3">@david</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">8</th>
                            <td class="col-3">Pedro</td>
                            <td class="col-3">Rodriguez</td>
                            <td class="col-3">@rod</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">5</th>
                            <td colspan="2" class="col-3">Sam</td>
                            <td colspan="2" class="col-3">Pascal</td>
                            <td class="col-3">@sam</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">10</th>
                            <td class="col-3">Jacob</td>
                            <td class="col-3">Thornton</td>
                            <td class="col-3">@fat</td>
                        </tr>
                        <tr>
                            <th scope="row" class="col-3">11</th>
                            <td colspan="2" class="col-6">Larry the Bird</td>
                            <td class="col-3">@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

