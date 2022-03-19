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
  <section style="text-align: center; margin-top:200px" class="tab">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <a href="?tabone"><button type="button" class="btn btn-outline-info">Tab 1</button></a>
          <a href="?tabtwo"><button type="button" class="btn btn-outline-warning">Tab 2</button></a>
          <a href="?tabthree"><button type="button" class="btn btn-outline-dark">Tab 3</button></a>
          <?php
          if (isset($_GET['tabone'])) { ?>
            <div class="tabone-text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.
              </p>
            </div>
          <?php }
          ?>
          <?php
          if (isset($_GET['tabtwo'])) { ?>
            <div class="tabtwo-text">
              <p>
                orem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.rem ipsum dolLorem ipsum 
              </p>
            </div>
          <?php }
          ?>
          <?php
          if (isset($_GET['tabthree'])) { ?>
            <div class="tabthree-text">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat quam repudiandae porro iste accusamus eum, aperiam molestias. Magni, mollitia.
              </p>
            </div>
          <?php }
          ?>
        </div>
        <div class="col-md-3"></div>
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