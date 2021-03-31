<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style3.css">
  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script>
function SubForm (){
    $.ajax({
        url:'https://api.apispreadsheets.com/data/10082/',
        headers: {"accessKey": "YOUR_ACCESS_KEY", "secretKey": "YOUR_ACCESS_KEY"}
        type:'post',
        data:$("#myForm").serializeArray(),
        success: function(){
          alert("Form Data Submitted :)")
        },
        error: function(){
          alert("There was an error :(")
        }
    });
}
</script>
  <title>Contact</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h1>Dingo</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">News</a></li>
              <li><a class="dropdown-item" href="#">Promos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Socials networks</a></li>
            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Reservation</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>

  </nav>
  <!--Pagination-->
  <nav class="justify-content-center" aria-label="Page navigation example">
    <ul class="pagination justify-content-center ">

      <li class="page-item"><a class="page-link" href="welcome.html">Welcome</a></li>
      <li class="page-item"><a class="page-link" href="menu.html">Menu</a></li>
      <li class="page-item"><a class="page-link" href="restaurant.html">Restaurant</a></li>
      <li class="page-item"><a class="page-link" href="contact.html">Contact</a></li>
      <li class="page-item"><a class="page-link" href="pictures.html">Pictures</a></li>

    </ul>
  </nav>
  <main>
    <div class="container-fluid">
      <div class="row">
        <h1>Contact</h1>
        <p>
          <h4><strong>Addres:</strong></h4>
          <h4>Rue de Trèves 3, 1050 Bruxelles</h4>
          <h4>Phone:
            +32 2 777 888 333
          </h4>

        </p>
        <p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.560890523268!2d4.3712802160260535!3d50.839296979530936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c49a66b1aa63%3A0x5f8bcf0cfc3ee49e!2sRue%20de%20Tr%C3%A8ves%203%2C%201050%20Ixelles!5e0!3m2!1sfr!2sbe!4v1612205991677!5m2!1sfr!2sbe"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </p>
        <div class="container contact-form mt-5 mb-5">
          <div class="contact-image">
              <img class="position-relative " src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
          </div>
          <form id="myForm" action="user_procces.php" method="post">
              <h3 class="text-center" >Drop Us a Message</h3>
             <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="name"  placeholder="Your Name *" value="" />
                      </div>
                      <div class="form-group">
                          <input type="text" name="email"  placeholder="Your Email *" value="" />
                      </div>
                      <div class="form-group">
                          <input type="text" name="phone"  placeholder="Your Phone Number *" value="" />
                      </div>
                      <div class="form-group">
                          <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                      </div>
                  </div>
              </div>
          </form>
          <?php
           if(isset($_Post['btnSubmit'])){
             include_once'dbconnect.php';
             $obj=new Contact();
             $res=$obj->contact_us($_POST);
             if($res==true){
               echo"<script>alert('Query succesfully Submitted.Thank you.')</script>";
             }else{
               echo"<script>alert('Something went wrong!!')</script>";
             }
           }
          ?>
</div>
      </div>
    </div>
  </main>
  <footer>
    <div class="row footer mt-5">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="footer-parts-h3">About Restaurant</div>
        <div class="footer-parts-p">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
          to
          make a type specimen book.</div>
      </div>
      <div class="col-md-1 col-sm-1"></div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="footer-parts-h3">Opening Hours</div>
        <div class="footer-parts-p">
          Mon - Thu : 7:00 AM - 10:00 PM <br />
          Friday : 7:00 AM - 11:00 PM <br />
          Sat - Sun : 7:00 AM - 11:45 PM
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="footer-parts-h3">Our Location</div>
        <div class="footer-parts-p">
          Lorem ipsum dolor sit amet.<br />
          Pl Name - Dingo Restaurant<br />
          Groondig 154;Jupiter - 524002
        </div>
        <div class="footer-icons">
          <ul>
            <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#!"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#!"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="footer-bottom">
        <div class="white">&copy; <script language="javascript" type="text/javascript">
            document.write(new Date().getFullYear());
          </script>. All rights reserved by Sagingali.</div>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <button onclick="SubForm()">Submit</button>
</body>

</html>