
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/plane.png">
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <script src="jquery.js"></script>
    <title>Lets Flight</title>
  </head>
  <body>
   

    <div class="hero-container">
        <nav id="home">
          
          <h1>Let's Flight</h1>
        
          <div class="list">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About me</a></li>
            </ul>
          </div>

          <div class="get-in">
            <div class="login">
                <a href="login.php">Log in</a>
            </div>
            <div class="sign-up">
                <a href="signUp.php">Sign up</a> 
            </div>
          </div>
          
          <div class="toggle">
            
          </div>

          <div class="toggle-dark-mode">
            <img src="./assets/moon.png" alt="" id="toogle-mode" width="40px">

           

          </div>
        </nav>
      

        <div class="describe">
            <h2>Find the Best Airline Ticket Prices - Book Now!</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cum, quasi consequuntur doloremque autem, non aliquam eveniet veniam, possimus quidem id. Quaerat ipsum consectetur obcaecati ab aliquid sequi optio libero.</p>

            <div class="btn" id="btn-book">
                Booking Now
            </div>
        </div>
    </div>
    <div class="navigation">

      <label class="hamburger-menu">
        <input type="checkbox" id="inp" />
      </label>
      <aside class="sidebar">
        <div class="list-sidebar">
          <ul>
            <li><a href="#home">Home</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About Me</a></li>
          </ul>
  
        </div>
          <div class="account">
            <span>
              <ul>
                <li><a href="">Login</a></li>
                <li><a href="">Sign Up</a></li>
              </ul>
            </span>
          </div>
          </div>
  
      </aside>
    </div>
    <?php 

    
     date_default_timezone_set("Asia/Singapore");
    echo date("d/m/Y") . " ".date_default_timezone_get() .'<br>' ;
    echo date("H:i")  ;
    ?>

    <section id="news">
      <div class="section1" >

      
      <h2>LET'S EXPLORE THE WORLD AGAIN</h2>
      <p class="aqw">International destination are ready to welcome you</p>

      <div class="card-parent">

      <div class="card">
        <div class="card-image">
          <img src="https://static.nationalgeographic.co.uk/files/styles/image_3200/public/ngt_we_bistanbul_gettyimages-668990458_hr.jpg?w=1600&h=1600" alt="" srcset="" width="360px" height="331px">
        </div>
        <div class="caption-image">
          <h3>Istanbul, Turkey</h3>
          <p>Istanbul is a major city in Turkey that starddles Europe.</p>
        </div>

      </div>
      <div class="card">
        <div class="card-image">
          <img src="https://media.istockphoto.com/id/509105016/id/foto/cakrawala-kuala-lumpur.jpg?s=612x612&w=0&k=20&c=IoUHv7s0LuQMYThjU6CBZWt8jcquD2aHrHpkwRjZTZY=" alt="" srcset="" width="360px" height="331px">
        </div>
        <div class="caption-image">
          <h3>Kuala Lumpur, Malaysia</h3>
          <p>Step long trek leads you to this century.</p>
        </div>

      </div>
      <div class="card">
        <div class="card-image">
          <img src="https://a.cdn-hotels.com/gdcs/production144/d1960/191730c7-8e21-4540-825c-65954ae4d132.jpg?impolicy=fcrop&w=800&h=533&q=medium" alt="" srcset="" width="360px" height="331px">
        </div>
        <div class="caption-image">
          <h3>Seoul, South Korea</h3>
          <p>South Korea officially the republic of korea is a country in East Asia.</p>
        </div>

      </div>
    </div>
  </div>

    <div class="section2" id="services">

      <div class="services-left">

        <div class="services-head">
          <div class="services-number">
            <h2>01</h2>
          </div>
          <div class="services-contain">
            <h2>Instan Ticket</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis veritatis vitae itaque, aperiam numquam fuga necessitatibus consectetur vero labore harum ex dicta amet cum perferendis voluptatem doloribus est voluptates blanditiis!</p>
          </div>
        </div>
        
        <div class="services-head head2">
          <div class="services-number">
            <h2>02</h2>
          </div>
          <div class="services-contain">
            <h2>Worldwide Flight</h2>
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis veritatis vitae itaque, aperiam numquam fuga necessitatibus consectetur vero labore harum ex dicta amet cum perferendis voluptatem doloribus est voluptates blanditiis!</p>
          </div>
        </div>

        <div class="services-head head3">
          <div class="services-number">
            <h2>03</h2>
          </div>
          <div class="services-contain">
            <h2>Trusted Booking</h2>
            <p id="p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis veritatis vitae itaque, aperiam numquam fuga necessitatibus consectetur vero labore harum ex dicta amet cum perferendis voluptatem doloribus est voluptates blanditiis!</p>
          </div>
        </div>

        <div class="services-right">
          <h2>We Offer Best Services</h2>
          <div class="services-btn">
            Learn More
          </div>
        </div>

      </div>
      <img src="https://s3-alpha-sig.figma.com/img/4dbb/7f30/e3d58a5d034861f16b89bb38a1ad13db?Expires=1696204800&Signature=dfjgY-OyT4MkJlG4nN~0zrEDmioA9PrYVBhgLdFKe2meCmn20iDR4qIi9FFfzCON8KD3o8QJkgG~8~QyQkSWFHp7yRTPhCKpUKRlwMfAZKXgW~jj62MITwaxwLBspRKA0Y7sh6jv6gySU2EUbiC8N8rJbGpKYrKdQZAXJhJgxUo9dLAdxlygtK0xB4HlRynbq2Szz1qKG1I1kqSaEhOx17pG9KNsWh7Eain68hKTdSl11aTojLFwQwCWLLis0KC~solQtPTgydnLM-S0Kabwqwr5gVDcUh80pWS9wsY5xtvJgxgR1NbRZsYZWmwQGcpoh3YQJ-FppraXYbFx4cj-ZA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" srcset="">
      

    </section>
      


    <div class="about-me" id="about">
      <div class="image">

      </div>
      <div class="details">
        <h1>Hey,<br>I'm Ahmad Nur hidayat</h1>
        <p>An information engineering student at Mulawarman University who is interested in web and database development. also interested in game development and network security. <br> I am a 19 year old graduate of Syaichona Cholil Samarinda High School, and now I live in Samarinda</p>
        <p id="dv-mo">An information engineering student at Mulawarman University</p>
        
        <div class="btn-me">
        
          <button class="btn-contact-me" onclick="info()">Contact Me</button>
          <button class="btn-cv">Download CV</button>
          

          </div>
        </div>
      </div>

    </div>
    

      <div class="form-email">
        <div class="isi">
          <input type="text" name="" id="" >
          <span>Email</span>
          
        </div>
        <button type="button" class="btnSubmit btn-outline-success">Submit</button>

        <div class="info">
          <a href=""><img src="./assets/whatsapp.svg" alt=""></a>
          <a href=""><img src="./assets/facebook.svg" alt="" srcset=""></a>
          
          <a href="https://www.instagram.com/_ahmad.hidayat03/"><img src="./assets/instagram.svg" alt="" srcset=""></a>
          
          <a href="https://www.linkedin.com/in/ahmad-nur-hidayat-07bbb5251/"><img src="./assets/linkedin.svg" alt="" srcset=""></a>
          
        </div>
      </div>
      


    <footer>
      <div class="top-bar">

        <h3>Let's Flight</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ratione amet id neque accusantium nostrum et architecto eum at esse in incidunt ullam delectus eligendi rerum, aliquam enim. Ad, autem.</p>
      </div>

      <div class="bottom-bar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About Me</a></li>
        </ul>
      </div>
    </footer>

    

  </body>
</html>
