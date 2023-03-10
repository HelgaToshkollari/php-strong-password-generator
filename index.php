<?php
    include __DIR__ . '/functions.php';
    /*$charachters = [
        "letters" => "abcdefghijklmnopqrstuvwyzABCDEFGHIJKLMNOPQRSTUVWYZ",
        "numbers" => "0123456789",
        "symbols" => "!#$^&*"
    ];
    */
    $charachters = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","y","z","A","B","C","D","E","U","V","W","Y","Z","0","1","2","3","4",
    "Z","5","6","7","8","9","!","#","$","^","&","*"];

    $password_len = $_GET["passwordLenght"] ?? "";
    //$preference = $_GET["preference"] ?? "";
    //$repetition = $_GET["rep"] ?? "";
    /*function getPsw ($charachters) {
        $pass = "";
        for($i = 0;  $i < $_GET["passwordLenght"]; $i++){
          
            $pass .=  $charachters[rand(0, count ($charachters) -1)];
        }
        echo $pass;

    };*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<header class="text-center">
        <h1>Strong Password Generator </h1>

        <h4>Genera una password sicura</h4>
    </header>
    <main class="container p-4 ">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-6">         
                <form action="index.php" method="GET">
                    <div class="form-group row d-flex justify-content-between ">
                        <label class="col-sm-2 col-form-label">Lunghezza password </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="" name="passwordLenght" >
                        </div>
                    </div>
                    
                    <fieldset class="form-group">
                    <div class="row ">
                        <legend class="col-form-label col-sm-6 pt-0 ">Consenti ripetizioni di uno o pi?? caratteri:</legend>
                        <div class="col-sm-6 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rep" value="1" checked >
                                <label class="form-check-label">
                                    yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"  name="rep" value="0" checked >
                                <label class="form-check-label" >
                                    no
                                </label>
                            </div>                      
                        </div>
                    </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-6">Scegli caratteri :</div>
                        <div class="col-sm-6">
                            <div class="form-check">

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="preference">
                                    <label class="form-check-label">Lettere</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input"   name="preference">
                                    <label class="form-check-label" >Numeri</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input"   name="preference">
                                    <label class="form-check-label" >Simboli</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 py-3"> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-dark">reset</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="d-flex justify-content-center p-4">
                <h1>password:</h1>

                <div>
                    <?php  if(!empty($_GET["passwordLenght"])) : ?>
                        <h1>
                            <?php getPsw($charachters); ?>
                        </h1>
                    <?php  endif; ?>
                        
                </div>
            </div>

    </main>
    
</body>
</html>