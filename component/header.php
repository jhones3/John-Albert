<nav class="navbar  navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand myName" href="index.php"><img src="./icon/keyboard.svg" alt="">JOHN ALBERT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="menu-toggler-icon"><img src="./icon/menu.svg" alt=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a id="navLink" class="nav-link <?php if($home){echo $active;}?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a id="navLink" class="nav-link <?php if($about){echo $active;}?>" href="about.php">About</a>
        </li>
        <li>
          <button id="resume" class="btn btn-warning"><img src="./icon/download.png" class="download" alt="resume"></img>&nbsp;Resume</button>
        </li>
      </ul>
    </div>
  </div>
</nav>
