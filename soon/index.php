<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelHabbo</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <H1>
                    cOMO LI?
                </H1>
            </div>
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <?php
                    require_once 'model.php';
                    $model = new Model ();
                    <form action="" nethod="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">WhatsApp</label>
                            <input type="text" name="whatsapp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Endereço</label>
                            <textarea name="adderss" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>