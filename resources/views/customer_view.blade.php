<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer form</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <style>
      .bg-light {
        background-color: #a4d0fd !important;
      }
    </style>

    <script
      src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container-fluid px-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Demo Project</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link3</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="row my-4">
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="..." class="card-img-top pt-3" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-dark">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="..." class="card-img-top pt-3" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-dark">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem">
            <img src="..." class="card-img-top pt-3" alt="..." />
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-dark">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <br />

      <div class="row">
        <div class="col"></div>
        <div class="col">
          <h3 class="text-center text-primary">{{$title}}</h3>
          <form action="{{$url}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                autocomplete="off"
                value="{{$customer->name}}"
              />
              <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                rows="3"
                autocomplete="off"
                value="{{$customer->address}}"
              />
              <span class="text-danger">
                @error('address')
                    {{$message}}
                @enderror
            </span>
            </div>

            <div class="mb-3">
              <label for="country" class="form-label">Country</label>
              <input
                type="text"
                class="form-control"
                id="country"
                name="country"
                autocomplete="off"
                value="{{$customer->country}}"
              />
              <span class="text-danger">
                @error('country')
                    {{$message}}
                @enderror
            </span>
            </div>
            <div class="mb-3">
              <label for="city" class="form-label">City</label>
              <input
                type="text"
                class="form-control"
                id="city"
                name="city"
                autocomplete="off"
                value="{{$customer->city}}"
              />
              <span class="text-danger">
                @error('city')
                    {{$message}}
                @enderror
            </span>
            </div>

            <div class="mb-3">
              <label for="dob" class="form-label">Date of birth</label>
              <input
                type="dob"
                class="form-control"
                id="dob"
                name="dob"
                autocomplete="off"
                value="{{$customer->dob}}"
              />
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </body>
</html>