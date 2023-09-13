<!DOCTYPE html>
<html>

<head>
    
    <meta charset="UTF-8">
    <title>Generar Factura en PDF</title>
    <!-- Agregar enlaces a los archivos de Bootstrap CSS y JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Mobile Metas -->
    
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Factura
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="content">Descripcion:</label>
                                <textarea id="content" class="form-control" rows="4"></textarea>
                            </div>
                            
                        </form>
                        <button id="downloadButton" class="btn btn-primary">Generar Factura PDF</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
    <div class="col text-center">
      &nbsp; <!-- Espacio en blanco -->
    </div>
    <div class="col-12 text-center">
        <a href="indexAdmin.php" class="btn btn-outline-success ml-2">Regresar</a>
    </div>
    </div>
    
    <script src="script.js"></script>

</div>
<br>
<br> 
<br> 
<br> 
<br>
   <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                vetClinic@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
    </section>


</body>

</html>

