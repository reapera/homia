<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homia | Your Home Partner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .mediumtext{
            color:#636363;
            font-size:24px;
        }
        .ageemail{
            display:flex;flex-direction:row;justify-content:space-between;
        }
        .emailaddress{
            border-radius: 100px;margin-left:10px;flex:4;padding-left:25px;padding-right:25px;
        }
        @media screen and (max-width: 600px) {
            .mediumtext{
                color:#636363;
                font-size:18px;
            }
            .btn{
                width:100%;
            }
            input{
                width:100% !important;
            }
            
            .ageemail{
                display:block;
            }
            
            .emailaddress{
                border-radius: 100px;margin-top:10px;margin-left:0px;flex:4;padding-left:25px;padding-right:25px;
            }
            .age{
                padding-left:20px;
            }
        }
    </style>
    </head>
    <body>
        
    <div style="display:flex;flex-direction:row;justify-content:center;margin-top:10vh;">
                <img src="logo_text.png">
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center;height:80vh;">
            <div style="display:flex;flex-direction:row;justify-content:center;">
                <form action="getdata.php" method="post" enctype="multipart/form-data" style="width: 50vw;">
                <div class="form-group tab1" style="display:flex;flex-direction:row;justify-content:center;">
               <label class="text-center mediumtext" style="">We try our best <br> to give solution to your home problem<br> <br></label>
                </div>
                <div class="form-group tab1">
                <button type="button" class="btn btn-default imagebtn" style="background-color:#8c8c8c;border-radius: 100px;color: white;padding-left:35px;padding-right:35px;">Browse</button>
                
                <input type="text" class="form-control imagenamedis" style="border-radius: 100px;width:20vw;display:inline;background-color:white;padding-left:25px;padding-right:25px;border:none;" value="Image Reference" disabled/>   
                </div>
                    <div class="form-group tab1">
                    <input type="file" name="image" style="display:none;" id="imagehidden"/>
                   
                    <textarea name="desc" id="desc" class="form-control" style="border-radius: 100px;padding-left:25px;padding-right:25px;" placeholder="Your question"></textarea>
                    </div>
                    
                <div class="form-group tab2" style="display:flex;flex-direction:row;justify-content:center;">
               <label class="text-center tab2 mediumtext" style="display:none;">Our team <br> will answer your question as soon as possible.<br> <br></label>
                </div>
                    <div class="form-group tab2" style="display:none;">
                    <div class="ageemail">
                        <select name="age" class="form-control age" style="border-radius: 100px;flex:1;">
                        <option value="Age">Age</option>
                        <?php
                            for($i = 10; $i < 100; $i++){
                                echo "<option value='".$i."'>".$i."</option>";
                            }
                        ?>
                        </select>
                        <input name="email" class="form-control emailaddress" placeholder="Your email address">
                    </div>
                    </div>
                    <button type="button" class="btn btn-default float-right nexttab tab1" style="background-color:#ffa600;border-radius: 100px;color: white;padding-left:35px;padding-right:35px;">Next</button>
                    <button type="button" class="btn btn-default float-right tab2" id="askbtn" style="background-color:#ffa600;border-radius: 100px;color: white;display:none;margin-left:10px;padding-left:35px;padding-right:35px;margin-top:10px;">Ask</button>
                    <button type="button" class="btn btn-default float-right prevtab tab2" style="background-color:lightgrey;border-radius: 100px;color: white;display:none;padding-left:35px;padding-right:35px;margin-top:10px;">Back</button>
                </form>
            </div>
        </div>
    </body>
    <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.nexttab').on('click', function(){
        if($('#imagehidden').val() == null || $('#imagehidden').val() == ""){
            swal("Oops!", "Please insert image", "error");
            return false;
        }
        if($('#desc').val() == null || $('#desc').val() == ""){
            swal("Oops!", "Please ask a question", "error");
            return false;
        }
        $('.tab1').hide();
        $('.tab2').show();
    });
    $('.prevtab').on('click', function(){
        $('.tab2').hide();
        $('.tab1').show();
    });
    $('.imagebtn').on('click', function(){
        $('#imagehidden').click();
    })
    $('#askbtn').on('click', function(){
        if($('#imagehidden').val() == null || $('#imagehidden').val() == ""){
            swal("Oops!", "Please insert image", "error");
            return false;
        }
        if($('#desc').val() == null || $('#desc').val() == ""){
            swal("Oops!", "Please ask a question", "error");
            return false;
        }
        if($('.emailaddress').val() == null || $('.emailaddress').val() == ""){
            swal("Oops!", "Please put email", "error");
            return false;
        }
        $('form').submit();
    });
    document.getElementById('imagehidden').onchange = function () {
        $('.imagenamedis').val(this.value.replace(/.*[\/\\]/, ''));
    };
</script>
<?php
    if(!empty($_GET['submitted'])){
        ?>
        <script>
        swal("Thank you!", "Your question has been submitted", "success");
        </script>
        <?php
    }
?>
</html>
