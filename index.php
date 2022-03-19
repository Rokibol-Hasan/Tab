<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <title>Tab With Php</title>
</head>

<body>
  <section style="text-align: center;color:black; margin-top:200px;background:dark" class="tab">
    <div class="container">
      <div class="row">
        <div class="col-md-12 card p-3">
          <ul class="list-group list-group-horizontal text-center">
            <li class="list-group-item "><a href="?tabone"><button type="button" class="btn btn-outline-info text-center">Tab 1</button></a></li>
            <li class="list-group-item "><a href="?tabtwo"><button type="button" class="btn btn-outline-warning">Tab 2</button></a></li>
            <li class="list-group-item"><a href="?tabthree"><button type="button" class="btn btn-outline-dark">Tab 3</button></a></li>
          </ul>
          <?php
          if (isset($_GET['tabone'])) { ?>
            <div class="table-text mt-5">
              <img src="images/1.jpg" height="200px" width="300px">
              <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.
              </p>
            </div>
          <?php }
          ?>
          <?php
          if (isset($_GET['tabtwo'])) { ?>
            <div class="table-text mt-5">

              <img src="images/2.jpg" height="200px" width="300px">
              <p style="text-align: justify;">
                orem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.rem ipsum dolLorem ipsum
              </p>
            </div>
          <?php }
          ?>
          <?php
          if (isset($_GET['tabthree'])) { ?>
            <div class="table-text mt-5">
              <img src="images/3.jpg" height="200px" width="300px">
              <p style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.
              </p>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>