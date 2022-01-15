

    <div class="container my-5">
      <h1 class="mb-3">Customers details</h1>

    <?php
      require_once "conexion.php";
      //llamar a todos los artículos
      $sql = 'SELECT * FROM customer';
      $sen = $pdo->prepare($sql);
      $sen->execute();

      $res = $sen->fetchAll();
      //var_dump($res);

      $dato_x_pag = 5;
      $total_datos = $sen->rowCount();
      $paginas =  $total_datos/$dato_x_pag;
      $paginas = ceil($paginas);

        
        if(!$_GET){
          header('Location:index.php?pagina=1');
        }

        if($_GET['pagina']>$paginas || $_GET['pagina']<=0){
          header('Location:index.php?pagina=1');
        }


        $iniciar = ($_GET['pagina']-1)*$dato_x_pag;
        //echo $iniciar;

        $sql_datos = 'SELECT * FROM customer LIMIT :iniciar,:narticulos';
        $sen_datos = $pdo->prepare($sql_datos);
        $sen_datos->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
        $sen_datos->bindParam(':narticulos',$dato_x_pag,PDO::PARAM_INT);
        $sen_datos->execute();

        $res_datos = $sen_datos->fetchAll();
    ?>

      <?php
        foreach($res_datos as $dato):
      ?>

      <div class="alert alert-primary" role="alert">
        <?php
          echo $dato['idcustomer'].' -- '.$dato['name'].' -- '.$dato['address'].' -- '.$dato['phonenum'].' -- '.$dato['email'];
        ?>
      </div>

      <?php
        endforeach
      ?>

      <nav aria-label="Page navigation example">
        <ul class="pagination">

          <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
            <a class="page-link" href="index.php?pagina=
              <?php echo $_GET['pagina']-1 ?>
            ">
            Previous</a>
          </li>
          <!-- Previous -->

          <!-- Numeros -->
          <?php
            for($i=0; $i<$paginas; $i++):
          ?>

          <li class="page-item 
            <?php echo $_GET['pagina']==$i+1 ? 'active':'' ?>">
            <a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a>
          </li>

          <?php
            endfor
          ?>
          <!-- Numeros -->

          <!-- Next -->
          <li class="page-item
            <?php echo $_GET['pagina']>=$paginas? 'disabled' : '' ?>
          ">
            <a class="page-link" href="index.php?pagina=
              <?php echo $_GET['pagina']+1 ?>
            ">Next</a>
          </li>
        </ul>
      </nav>
  </div>


  </body>