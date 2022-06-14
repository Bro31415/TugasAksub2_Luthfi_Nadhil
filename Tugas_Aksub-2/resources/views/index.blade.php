<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Inventory Manager</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">Inventory Manager</h1>
            </div>
        </div>

        <div class="container mt-5">
            <a href="/inv/add" class="btn btn-primary" type="submit">
                Add New Item
            </a>
            <a href="/" class="btn btn-primary">View All</a>
            <a href="/inv/laptop " class="btn btn-primary">Laptops</a>
            <a href="/inv/phone" class="btn btn-primary">Smartphones</a>
            <a href="/inv/tv" class="btn btn-primary">TVs</a>
            
            <div class="d-flex flex-wrap align-content-start mt-5">
                
                @foreach ($inventories as $inv)
                <div class="card mb-4 me-4" style="width: 18rem">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="h5 card-title">{{$inv->item}} - {{$inv->category->name}}</div>
                        </div>
                        <p class="card-text">{{$inv->qty}}</p>

                        <div class="mt-3 d-flex">
                            <form method="post" action="{{route('item.delete', ['id'=>$inv->id])}}">
                                @csrf
                                @method('delete')
                            <button type="submit" class ="btn btn-primary"> Out of Stock  </button> 
                            </form>
                            <a href="{{route('item.edit', ['id'=>$inv->id])}}"class="btn btn-warning ms-2">Edit</a>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
               
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
