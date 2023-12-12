<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/86bc96ac49.js"
      crossorigin="anonymous"
    ></script>

    <style>
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
        background-color: #f6f6f6;
        border: 1px solid #f6f6f6;
      }

      .card-footer {
        border: 0;
      }
    </style>
  </head>
  <body>
    <div class="container py-5">
      <div class="mb-3">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <a href="http://"><strong>todo</strong></a>
          </div>
          <div>
            <i class="fa-solid fa-plus fs-2"></i>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
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
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 3 mins ago</small
                  >
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 3 mins ago</small
                  >
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 3 mins ago</small
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
