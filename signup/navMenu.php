<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/5d0d55aa82.js"></script>
 <script src="js/Recruiter signup-1pass.js"></script>
<div class="container">
        <nav class="navigation-bar-signup">
            <a href="/" class="analysed-logo-signup">Analysed</a>
          

            <ul class="analysed-navigation-items">
                <li><a href="">Contact us</a></li>
                <li><a href="">About us</a></li>
            </ul>
</nav>

<script>
    const hamburger = document.querySelector('.navigation-menu-signup');
    const list = document.querySelector('.analysed-navigation-items');
    hamburger.addEventListener('click',()=>{
        list.classList.toggle('active');
        hamburger.classList.toggle('active');
        hamburger.classList.toggle('fa-bars');
        hamburger.classList.toggle('fa-times');

    })
</script>