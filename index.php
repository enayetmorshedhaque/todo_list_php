<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/86bc96ac49.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    html,
    body {
      background-color: #fdfeff;
    }

    * {
      font-family: 'Open Sans', sans-serif;
    }

    a {
      text-decoration: none;
      color: black;
      font-size: 24px;
      font-weight: 700;
      text-transform: uppercase
    }

    .circle {
      height: 15px;
      width: 15px;
      border: none;
      border-radius: 50%;
    }

    .category-title {
      font-weight: 700;
    }

    .work {
      background-color: #d2ceff;
    }

    .study {
      background-color: #d1e5f7;
    }

    .entertainment {
      background-color: #ffcece;
    }

    .family {
      background-color: #daf2d6;
    }

    .card {
      border-radius: 0;
      background-color: #fff;
      border: 1px solid #f6f6f6;
    }

    .card-title {
      font-weight: bold;
    }

    .dropdown-item {
      font-size: 12px !important;
    }

    .card-footer {
      background-color: #fff;
      border: 0;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="mb-3">
      <div class="d-flex align-items-center justify-content-between">
        <div>
          <a href="index.php"><strong>todo</strong></a>
        </div>
        <div>
          <i class="fa-solid fa-plus fs-2"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <div class="mt-2">
          <div class="d-flex align-items-center mb-2">
            <div>
              <div class="circle work"></div>
            </div>
            <div>
              <div class="category-title">&nbsp;Work</div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div>
              <div class="circle study"></div>
            </div>
            <div>
              <div class="category-title">&nbsp;Study</div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div>
              <div class="circle entertainment"></div>
            </div>
            <div>
              <div class="category-title">&nbsp;Entertainment</div>
            </div>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div>
              <div class="circle family"></div>
            </div>
            <div>
              <div class="category-title">&nbsp;Family</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div>
                    <h5 class="card-title mb-0">The first task title</h5>
                  </div>
                  <div class="action">
                    <div class="dropdown">
                      <i class="fa-solid fa-ellipsis ropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"></i>
                      <ul class=" dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit...</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to
                  additional content.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to
                  additional content.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to
                  additional content.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>