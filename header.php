<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Empresys Jr.</title>
  </head>
  <header class="bg-dark">
    <br><br>
  </header>
  <body style="background: #E2E6FF;">
    <br>
    <div class="container">
    
    <form method="post" target="iframe" align="center">
      <div class="row">
        <div class="col-sm-4"><button class="btn btn-primary" style="width: 200px;" name="update">Update</button></div>
        <div class="col-sm-4"><button class="btn btn-primary" style="width: 200px;" name="download">Download XML</button></div>
        <!-- Modal para guardar un dato en la tabla -->
        <div class="col-sm-4"><button type="button" class="btn btn-primary" style="width: 200px;" data-toggle="modal" data-target="#dialogo1" name="modal">Modal</button></div>
      </div>

        <div class="modal fade" id="dialogo1">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- cabecera del diálogo -->
              <div class="modal-header">
                <h4 class="modal-title">Save new values</h4>
              </div>
        
              <!-- cuerpo del diálogo -->
              <div class="modal-body">
                <div class="container">
            <div class="row">
              <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">*Name</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="name" placeholder="Your name...">
            </div>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Address:</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="address" placeholder="Your address...">
            </div>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Phone Number:</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="phone" placeholder="XXX XXX XX XX">
            </div>
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Email:</span>
              <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" placeholder="example@example.com">
            </div>
            <input class="btn btn-secondary" type="reset" value="Borrar campos">
            
            </div>
          </div>
              </div>
              <!-- pie del diálogo -->
              <div class="modal-footer">
                <div><p class="text-muted fst-italic" align="left"><small>*The field must contain a value.</small></p></div>
                <div></div>
                <div><button class="btn btn-primary" data-toggle="modal" data-target="#dialogo1" name="modal">Save</button>
                <button class="btn btn-secondary" data-dismiss="modal">Close</button></div>
                

              </div>
        
            </div>
          </div>
        </div> 
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Modal para guardar un dato en la tabla -->

    </form>
  </div>