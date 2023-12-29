<?php 
$home = true;
$about = false;
$active = 'active';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./includes/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>My Portfolio</title>
  <link rel="icon" href="./icon/home.svg" type="image/png">
</head>
<body id="body">
    <?php include('./component/header.php');?>
    <section class="intro-section">
      <div class="card card-intro" style="max-width: 800px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="./images/me.png" class="img-fluid rounded-start" alt="...">
            </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Welcome!</h5>
              <p class="card-text">Hello! I'm John Albert A. Dela Cruz, a passionate web developer with a love for crafting digital experiences. With a solid foundation in PHP, SQL, HTML, CSS, JavaScript, and jQuery, I thrive on tackling challenges and creating solutions that not only meet but exceed expectations.</p>
              <p class="card-text text"><small class="text-body-secondary">Have a Great Day!</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="text-white hr mb-5">
    <section>
      <div class="container-lg  mb-5 bg-body-tertiary">
        <div class="mb-4"><h3 class="mx-5 skill-title">Technical Skill</h3></div>
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
          <div class="col">
            <div class="card h-100">
              <img src="icon/php.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text skill-text">I am proficient in PHP, confidently handling its syntax, fundamental constructs, session management for personalized user experiences, and seamless integration with MySQL databases for dynamic web application.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="images/mysql.png" class="card-img-top mt-4" alt="...">
              <div class="card-body">
                <h5 class="card-title">MYSQL</h5>
                <p class="card-text skill-text">MySQL is a powerful open-source relational database management system that I proficiently utilize to efficiently store, retrieve, and manage data in my web development projects.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="icon/html.svg" class="card-img-top mt-3" alt="...">
              <div class="card-body">
                <h5 class="card-title">HTML- Hyper Text Markup Language</h5>
                <p class="card-text skill-text">serves as the backbone of web content, providing a structured and semantic markup that I leverage to create visually appealing and interactive web pages for a seamless user experience.</p>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100">
              <img src="icon/css.svg" class="card-img-top mt-3" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSS - Cascading Style Sheet</h5>
                <p class="card-text skill-text">Enabling me to enhance the presentation and layout of HTML-based web pages by controlling elements' appearance, positioning, and responsiveness, thus ensuring a polished and visually engaging user interface.</p>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100">
              <img src="icon/js.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">JS - JavaScript</h5>
                <p class="card-text skill-text">JavaScript is allowing me to add dynamic and interactive elements to HTML and CSS, facilitate user interactions, manipulate the Document Object Model (DOM), and seamlessly integrate client-side functionality into my web applications.</p>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card h-100">
              <img src="icon/jquery.svg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">JQuery</h5>
                <p class="card-text skill-text">I leverage to streamline and simplify client-side scripting tasks, providing a concise syntax for DOM manipulation, event handling, and AJAX interactions, enhancing the efficiency of my web development projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('./component/footer.php');?>
</body>
<script src="./includes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./includes/node_modules/jquery/dist/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#resume').on('click', function () {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Specify the file URL
            var fileUrl = './includes/John Albert A. Dela Cruz_ Resume.pdf';

            // Open the request to get the file
            xhr.open('GET', fileUrl, true);

            // Set the responseType to 'blob' to handle binary data
            xhr.responseType = 'blob';

            // Set up the onload event handler
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Create a Blob from the binary data
                    var blob = new Blob([xhr.response], { type: 'application/octet-stream' });

                    // Create a link element and trigger a click event to download the file
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'John_Albert_Resume.pdf'; // Set the desired file name
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                } else {
                    console.error('Error downloading file. Status:', xhr.status);
                }
            };

            // Set up the onerror event handler
            xhr.onerror = function () {
                console.error('Network error while trying to download the file.');
            };

            // Send the request
            xhr.send();
        });
    });
</script>

</html>