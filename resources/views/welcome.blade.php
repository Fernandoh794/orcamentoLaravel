<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>



    <div class="container-lg m-sm-12 m-0 bg-dark" style="width: 100vw; height: 100vh">
        <div class="header bg-dark">
            <div class="row d-flex justify-content-around ">

                <div class="card border-primary mb-3 mt-3" style="max-width: 18rem;">
                    <div class="card-header">Entradas</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title h1">R$:  5000</h5>
                        <
                    </div>
                </div>
                <div class="card border-primary mb-3 mt-3" style="max-width: 18rem;">
                    <div class="card-header">Saidas</div>
                    <div class="card-body text-primary">
                        <h5 class="card-title h1">R$:  -1000</h5>

                    </div>
                </div>

                <div class="card border-success mb-3 mt-3" style="max-width: 18rem;">
                    <div class="card-header">Total</div>
                    <div class="card-body text-success">
                        <h5 class="card-title h1">R$:  4000</h5>

                    </div>



            </div>


        </div>

        <div style="" class="bg-dark" >

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Gastos</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Date</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Coca</td>
                    <td>10R$</td>
                    <td>22/10/2019</td>
                    <td>
                        <a> <button type="button" class="btn btn-light">Editar</button>  </a>
                        <a><button type="button" class="btn btn-danger">Deletar</button></a>


                    </td>
                </tr>

                </tbody>
            </table>

        </div>

            <div class="d-flex justify-content-center">
            <form style="width: 50%">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-light ">Gastos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Seu gasto aqui...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label  text-light">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword3" placeholder="Preço...">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Cadastrar Gasto</button>
                    </div>
                </div>
            </form>
            </div>

    </div>


</body>
</html>





