<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style10.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Pictures</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h1>Dingo</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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

            <li class="page-item"><a class="page-link" href="../welcome.html">Welcome</a></li>
            <li class="page-item"><a class="page-link" href="../menu.html">Menu</a></li>
            <li class="page-item"><a class="page-link" href="../restaurant.html">Restaurant</a></li>
            <li class="page-item"><a class="page-link" href="../index.php">Contact</a></li>
            <li class="page-item"><a class="page-link" href="../pictures.html">Pictures</a></li>

        </ul>  
    </nav>

<?php

if (isset($_POST['search']))
{
$valueToSearch = $_POST['valueToSearch'];

$query = "SELECT * FROM `contact_uss` WHERE CONCAT (`id`, `full_name`, `email`, `phone`, `message`, `datetime`) LIKE '%".$valueToSearch."%' ";
$search_result = filterTable($query);
}
else{
    $query = "SELECT * FROM `contact_uss`";
    $search_result = filterTable($query);
}

function filterTable($query){
    $connect = mysqli_connect("localhost","root","","last_form");
    $filter_Result =mysqli_query($connect,$query);
    return $filter_Result;

}
?>
<!doctype html>
<html>
    <head>
        <title>Collect data from DB</title>
        <style>
            table,th,td,tr{
                border : 1px solid black;
                width:1000px;
            }
            #del{
                justify-content:center;
            }
        </style>
        <body>
        <form action="read_messages.php" method="post">
            <input type="text" name="valueToSearch placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br> 
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>message</th>
                    <th>date/time</th>
                    <th>delete</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)): ?>
                    <tr>
                        <td><?php echo $row[0];?> </td>
                        <td><?php echo $row[1];?> </td>
                        <td><?php echo $row[2];?>  </td>
                        <td><?php echo $row[3];?> </td>
                        <td><?php echo $row[4];?> </td>
                        <td><?php echo $row[5];?> </td>
                        <td><a class="btn btn-danger" style="color:red;" href="delete2.php?delete=<?php echo $row['id'];?>">X</td>
                    </tr>
                
                <?php endwhile;?>
                
            </table>
        </form>
        
        
        </body>

    </head>



</html>
  
<nav aria-label="Page navigation example mt-5">
                        <ul class="pagination justify-content-center mt-2 ">
                          
                          <li class="page-item"><a class="page-link" href="pictures.html">1</a></li>
                          <li class="page-item"><a class="page-link" href="pictures2.html">2</a></li>
                          <li class="page-item"><a class="page-link" href="pictures3.html">3</a></li>
                          
                        </ul>
                    </nav>

                </div>

        </main>
        </div>
    </nav>
    <footer>
        <div class="row footer mt-5">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-parts-h3">About Restaurant</div>
                <div class="footer-parts-p">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it
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
</body>

</html>