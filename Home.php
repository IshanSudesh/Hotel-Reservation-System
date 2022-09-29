<?php
session_start();
include "connect.php";

?>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js"></script>
    <title>Home</title>

    <header class="header" id="header">
    <div class="head-top">
        <!-- <div class="site-name"><span>AlphaPlace</span></div> -->
        <div class="site-menu">
            <span id="nav-btn"> Menu <i class="fas fa-bars"></i></span></div>
    </div>

    <div class="head-details">
        <h2>Candlewood Suites</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laudantium quisquam eum ab. Commodi sapiente non similique consequatur esse? Voluptates est expedita minus aliquam nostrum, in aliquid beatae quae porro iusto, ex neque cupiditate! Consectetur nostrum inventore eaque, laudantium aliquam facere voluptate expedita at hic. Ut cumque aliquam dolore molestiae!</p>
        <!-- <input type="button" class="btn" value="lets roll"> -->
    </div>
    </header>

<div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>
            <div class="logout-navbar">
            <?php
            $name =  $_SESSION["uname"];
            echo "<h3> $name </h3>";

            ?>
            <a class="logoutlink" href="logout.php" title="Logout">Logout</a>
            </div>
            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#aboutus">About Us</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#comment">comment</a></li>
            </ul>
        </div>
    <section class="aboutus" id="aboutus">
    <div class="aboutus-details">
    <h1>About us</h1>
    <p>
    The Candlewood name is proudly borne by a growing collection of distinguished properties around the world. As Europe’s oldest luxury hotel group, we are committed to providing our guests with memorable journeys inspired by exquisite European flair. We believe life should be lived with style. <br><br>

    Each year, an increasing number of guests come to appreciate these qualities, as Candlewood adds new, exciting destinations in Europe, the Middle East, Africa, Asia and The Americas. While this growth reflects the strength and success of the Candlewood brand, the collection will remain a limited one, where exclusivity can be nurtured and individuality can flourish. <br><br>

    We believe that our prestigious, European heritage puts Candlewood in a unique position to satisfy the expectations of the stylish and discerning traveller. It’s not just to simply provide a hotel bed and a meal, at Candlewood it’s all about bringing a story to life. <br><br>

    Since 1897, our employees have been a part of creating history around the world. From historic buildings to the most avant-garde of modern architecture, our properties are the setting for some of life’s greatest moments. We’ve witnessed historic meetings between world leaders, celebrities taking sanctuary in the world of privacy we create for them, and created incredible memories for guests on a ‘once-in-a-lifetime’ journey. <br><br>

    We are wholeheartedly committed to providing perfection for our guests at every moment and in every way. Perhaps it’s something as life-changing as a wedding celebration, where our attention to detail and perfect service mean that your special day goes without a hitch. Or perhaps it’s as simple as the note left on your pillow at night, which thoughtfully lets you know the weather tomorrow so you know how to dress in the morning. At Candlewood, we are each personally responsible for creating rich and meaningful experiences for our guests. <br><br> </p>
    </div>
    <div class="main-image-div">
    <img src="https://welcome-center-germany.com/wp-content/uploads/2018/08/Luxury-Hotel-Germany.jpg" class="main-image" alt="">
    </div>
    <div class=aboutus-image-div>
        <div ><img src="http://cdn.cnn.com/cnnnext/dam/assets/131007220110-04-hotel-restaurants.jpg" alt="" class="about-image"></div>
        <div><img src="https://i.pinimg.com/originals/1c/af/56/1caf560a114e0622d8c640c0e23d2efa.jpg" alt="" class="about-image"></div>
        <div><img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGhvdGVsfGVufDB8fDB8&w=1000&q=80" alt="" class="about-image"></div>
</div>
    </section>

    <div class="booking">
        <form action="Home.php" method="POST" class="booking-form">
            
            <div class="form-details">
                <label for="checkin-date">Check In Date :</label>
                <input type="date" id="checkin-date" name="checkin-date">
            </div>

            <div class="form-details">
                <label for="checkout-date">Check Out Date :</label>
                <input type="date" id="checkout-date" name="checkout-date">
            </div>
            
            <div class="form-details">
                <label for="adult">Adults :</label>
                <input type="number" id="adult" min="1" value="1" name="adult">
            </div>

            <div class="form-details">
                <label for="children">Children :</label>
                <input type="number" id="children" min="0" value="0" name="children">
            </div>

            <div class="form-details">
                <label for="room">Rooms :</label>
                <input type="text" id="room" min="1" value="1" name="room">
            </div>

            <div class="form-details">
                <input type="submit" class="booking-btn" value="Book Now" name="submit">
            </div>

        </form>
    </div>

    <!-- rooms -->

<section class = "rooms sec-width" id = "rooms">

    <div class = "title">
    <h1 class="rooms-h1">rooms</h1>
        </div>
        <div class = "rooms-container">
                <!-- single room -->
        <article class = "room">

        <div class = "room-image">
        <img src = "http://cdn.home-designing.com/wp-content/uploads/2018/11/luxury-grey-living-room.jpg" width="635px" alt = "room image">
        </div>
        <div class = "room-text">
        <h3>Family room</h3>
        <ul>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                With 3 Beds.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Sleeping 4-6 persons.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Lorem ipsum dolor sit amet.
            </li>
        </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p><br>

            <form action="Home.php" method="POST">
            <p class = "rate">
                
                <?php
                $result = mysqli_query($con,"SELECT * FROM roomprices WHERE roomid = 1");

                while($row = mysqli_fetch_array($result)){
                    $R1price = $row['price'];
                    // echo "<h1> $" . $row['price'] . "</h1>";
                    echo "<h1>$$R1price Per Night</h1>";
                }
                ?>
                
            </p><br>
            <button type = "submit" name="roombookingBTN1" class = "btn">book now</button>
            </form>

        </div>

        </article>
                <!-- end of single room -->
                <!-- single room -->
        <article class = "room">
            
        <div class = "room-image">
        <img src = "https://i.pinimg.com/originals/00/da/94/00da942e88dcc9a47d5219e9387106bb.jpg" width="635px" height="375px" alt = "room image">
        </div>
        <div class = "room-text">
        <h3>Doble Room</h3>
        <ul>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                With twin beds.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Max 4 persons.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Lorem ipsum dolor sit amet.
            </li>
        </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p><br>

            <form action="Home.php" method="POST">
            <p class = "rate">
                
                <?php
                $result = mysqli_query($con,"SELECT * FROM roomprices WHERE roomid = 2");

                while($row = mysqli_fetch_array($result)){
                    $R2price = $row['price'];
                    // echo "<h1> $" . $row['price'] . "</h1>";
                    echo "<h1>$$R2price Per Night</h1>";
                }
                ?>
                
            </p><br>
            <button type = "submit" name="roombookingBTN2" class = "btn">book now</button>
            </form>

        </div>

        </article>
                <!-- end of single room -->
                <!-- single room -->
        <article class = "room">
            
        <div class = "room-image">
        <img src = "https://q-xx.bstatic.com/images/hotel/max1024x768/103/103921678.jpg" width="635px" height="375px" alt = "room image">
        </div>
        <div class = "room-text">
        <h3>bouble room</h3>
        <ul>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                With single bed.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Max 2 persons.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Lorem ipsum dolor sit amet.
            </li>
        </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p><br>

            <form action="Home.php" method="POST">
            <p class = "rate">
                
                <?php
                $result = mysqli_query($con,"SELECT * FROM roomprices WHERE roomid = 3");

                while($row = mysqli_fetch_array($result)){
                    $R3price = $row['price'];
                    // echo "<h1> $" . $row['price'] . "</h1>";
                    echo "<h1>$$R3price Per Night</h1>";
                }
                ?>
                
            </p><br>
            <button type = "submit" name="roombookingBTN3" class = "btn">book now</button>
            </form>

        </div>

        </article>
        <article class = "room">
            
        <div class = "room-image">
        <img src = "https://i.pinimg.com/originals/ee/4c/20/ee4c2087d7dc0aa9df1c50874458af16.jpg" width="635px" height="375px" alt = "room image">
        </div>
        <div class = "room-text">
        <h3>Single room</h3>
        <ul>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                With Single Bed.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                For 1 person.
            </li>
            <li>
                <i class = "fas fa-arrow-alt-circle-right"></i>
                Lorem ipsum dolor sit amet.
            </li>
        </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p><br>

            <form action="Home.php" method="POST">
            <p class = "rate">
                
                <?php
                $result = mysqli_query($con,"SELECT * FROM roomprices WHERE roomid = 4");

                while($row = mysqli_fetch_array($result)){
                    $R4price = $row['price'];
                    // echo "<h1> $" . $row['price'] . "</h1>";
                    echo "<h1>$$R4price Per Night</h1>";
                }
                ?>
                
            </p><br>
            <button type = "submit" name="roombookingBTN4" class = "btn">book now</button>
            </form>

        </div>

        </article>
    </div>
    
    </section>

    <div class="comment" id="comment">
        <form action="Home.php" method="POST" class="comment-form">
        
            <div class="comment-form-details">
                <!-- <label for="ideas">ideas :</label> -->
                <input type="text" placeholder="idea" id="ideas" name="ideas">
            </div>

            <div class="comment-form-details">
                <!-- <label for="ideal">ideal :</label> -->
                <input type="text" placeholder="tell us more...." id="ideal" name="ideal">
            </div>

            <div class="comment-form-details">
                <input type="submit" class="comment-btn" value="Connect With Us" name="comment-submit">
            </div>

        </form>
    </div>


<script src="script.js"></script>


<?php


if(isset($_POST['submit'])){


    $name =  $_SESSION['uname'];
    $checkinDate = $_POST['checkin-date'];
    $checkoutDate = $_POST['checkout-date'];
    $adult = $_POST['adult'];
    $children = $_POST['children'];
    $rooms = $_POST['room'];
    
    $sql = "INSERT INTO booking(name,cdate,odate,adult,children,rooms) VALUE ('$name','$checkinDate','$checkoutDate','$adult','$children','$rooms')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }

}

if(isset($_POST['roombookingBTN1'])){

    $id = $_SESSION['id'];
    $name = $_SESSION['uname'];
    $price = $R1price;

    $sql = "INSERT INTO roombooking(id,name,roomprice) VALUE ('$id','$name','$price')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }
}

if(isset($_POST['roombookingBTN2'])){

    $id = $_SESSION['id'];
    $name = $_SESSION['uname'];
    $price = $R2price;

    $sql = "INSERT INTO roombooking(id,name,roomprice) VALUE ('$id','$name','$price')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }
}

if(isset($_POST['roombookingBTN3'])){

    $id = $_SESSION['id'];
    $name = $_SESSION['uname'];
    $price = $R3price;

    $sql = "INSERT INTO roombooking(id,name,roomprice) VALUE ('$id','$name','$price')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }
}

if(isset($_POST['roombookingBTN4'])){

    $id = $_SESSION['id'];
    $name = $_SESSION['uname'];
    $price = $R4price;

    $sql = "INSERT INTO roombooking(id,name,roomprice) VALUE ('$id','$name','$price')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }
}

if(isset($_POST['comment-submit'])){

    $id = $_SESSION['id'];
    $name =  $_SESSION['uname'];
    $email = $_SESSION['email'];
    $ideas = $_POST['ideas'];
    $ideal = $_POST['ideal'];

    $sql = "INSERT INTO comment(id,name,email,ideas,ideal) VALUE ('$id','$name','$email','$ideas','$ideal')";

    if($con->query($sql) === TRUE){
            // echo "New Record added";
            // header('Location: home.php');
        }else{
            echo "Error: " .$sql . "<br>" . $con->error;
        }

}

?>

