<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mo-App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">-</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?page=berita" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data device
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?page=input">Input Data device</a></li>
                  <li><a class="dropdown-item" href="index.php?page=view">View Data device</a></li>
                  <li><a class="dropdown-item" href="index.php?page=informasi">Search data</a></li>
                  <li><hr class="dropdown-divider"></li>

                  <li><a class="dropdown-item nav-link disabled" href="index.php?page=test_view">test_view(on progress)</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/kenmo08">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container">



      <?php
				if(isset($_GET['page'])){
								$page = $_GET['page'];
								switch ($page) {
					case 'view':
					include "select.php";
					break;
                        case 'input':
                        include "insert.php";
                        break;

                        case 'informasi':
                          include "cek_informasi.php";
                          break;
                          case 'test_view':
                            include "view.php";
                            break;

								}
				}else{
								include "home.php";
				}
				?>
      </div>
      
</body>
</html>
