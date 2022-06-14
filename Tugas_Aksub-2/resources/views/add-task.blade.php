<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Add Task</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form method="post" action="/inv/create">
                        <h3 class="mb-3">Create New Task</h3>
                        @csrf
                        <div class="mb-3">
                            <label for="item" class="form-label">Product Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="item"
                                name="item"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="qty" class="form-label"
                                >Quantity</label
                            >
                            <textarea
                                name="qty"
                                id="qty"
                                cols="15"
                                rows="1"
                                class="form-control"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">
                                Category
                            </label>
                            <select
                                name="category_id"
                                id="category"
                                class="form-select"
                            >
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
