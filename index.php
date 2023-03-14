<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Project 2 Nindya</title>
</head>
<body>
    <nav class="fixed-top navbar navbar-expand-lg pb-2">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="link-secondary">GirlsLove</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Catalog</a>
              <a class="nav-link" href="#">FAQs</a>
              <a class="nav-link" href="#">Data</a>
            </div>
          </div>
        </div>
      </nav>

      <section class="hero">
        <div class="container">
            <div class="row">
                <!--Text-->
                <div class="col-md-6 mt-5 welcome">
                    <div class="text">
                        Hey beauties, everything you need is here
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
                <!--Image-->
                <div class="col-md-6">
                    <img src="assets/skincare.jpg" alt="hero-img" class="w-100">
                </div>
            </div>
        </div>
      </section>

      <section class="form">
        <form id="form-data-user" action="" method="POST">
            <div class="form-element">
                <label for="namaDepan">Nama Depan:</label><br>
                <input id="namaDepan" type="text" name="namaDepan" placeholder="Nama depan" value=""><br>
            </div>
            <div class="form-element">
                <label for="namaBelakang">Nama Belakang:</label><br>
                <input id="namaBelakang" type="text" name="namaBelakang" placeholder="Nama belakang" value=""><br>
            </div>
            <div class="form-element">
                <label for="email">Email:</label><br>
                <input id="email" type="text" name="email" placeholder="Email" value=""><br>
            </div>
            <div class="form-element">
                <input type="submit" name="submit">
            </div>
        </form>
      </section>

      <?php 
        if(isset($_POST['submit'])) {
            $namaDepan = $_POST['namaDepan'];
            $namaBelakang = $_POST['namaBelakang'];
            $email = $_POST['email'];
            
            include("config.php");     
            // Insert user data into table
            mysqli_query($konek, "INSERT INTO user (namaDepan, namaBelakang, email) VALUES ('$namaDepan','$namaBelakang','$email')");
        }
      ?>
    <div class="child-content" id="user-list">
        <h2>User List</h2>
        <hr>
        <table id=user-list-table>
        <thead>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            </tr>
        </thead>
        <tbody id="user-list-detail" align="center">
        <?php
            $konek = mysqli_connect("localhost", "root", "", "database_tcc" );
            $SQL = mysqli_query($konek, "SELECT * FROM user");
            while($data=mysqli_fetch_array($SQL)){
        ?>
            <tr>
            <td><?php echo $data['namaDepan'];?></td>
            <td><?php echo $data['namaBelakang'];?></td>
            <td><?php echo $data['email'];?></td>
            <?php }?>
            </tr>
        </tbody>
        </table>
    </div>

      <footer class="text-black pt-5 pb-4">

        <div class="container text-md-left">

            <div class="row text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-black">GirlsLove</h5>
                    <p>
                        Girls!!! this is where your needs will be met. Starting from Skincare, Makeup, 
                        and also complete outfits available here, of course at a price that is worth it.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-black">Product</h5>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Skincare</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">MakeUp</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Outfit</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Other</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-black">Useful links</h5>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Your Account</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Become an Affialiates</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Shiping</a>
                    </p>
                    <p>
                        <a href="#" class="text-black" style="text-decoration: none;">Help</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-black">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>  Sleman, Yogyakarta ID
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>  girlslove@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>  +62 85687965567
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i>  +62 677788888
                    </p>
                </div>

            </div>

            <hr class="mb-4">

            <div class="row align-items-center">

                <div class="col-md-7 col-lg-8">
                    <p>
                        Copyright &copy2023 All right reserved by:
                            <a href="#" style="text-decoration: none;">
                            <strong class="text-primary">GirlsLove</strong></a>
                    </p>
                </div>

                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/nindya.putri.319?mibextid=ZbWKwL" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/nindya.pm/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/nindyapm/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://youtube.com/@nindyapm8361" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </footer>
</body>
</html>