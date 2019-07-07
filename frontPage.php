<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style1.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>


    <title>Home Page</title>
</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-lg-7">
                <div class="">
                    <div>
                        <?php
						include_once('kartinki.php');
					?>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="logo">
                    <img src="logo.jpg" class="logo">
                </div>
                <div class="">
                    <p>Доказала се на пазара Contact with US Inc. има много спечелени проекти по програма “Развитие на малкия и среден бизнес.“ Един от най-големите ни клиенти е министерството на Отбраната. Също така имаме и много други клиенти.</p>
                    <a class="btn btn-primary btn-lg" href="index.php?page=addemployee">Запазете контактите си !</a>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Call to Action Well -->
        <div class="card text-white bg-secondary my-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">Никога повече не губете контактите си и не забравяите важни номера които ви трябват</p>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Кои сме ние ?</h2>
                        <p class="card-text">Contact with us е водеща в сферата в администрирането на потребители и служителите на най-големите корпорации в света. Фирмата е създадена преди повече от 20г. със множество офиси в страната и чужбина. Сайта представлява проста и изчистена форма на въвеждане на потребители за по-лесното
                            им администрирана. Също така всеки един наш клиент може да се свърже с нас благодарение на нашата контактна форма.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Имате проблеми или запитвания ?</h2>
                        <p class="card-text">Ползваите нашата контактна форма за да се свържете бързо и лесно с нас. Нашият екип винаги е отворен за външен фийдбек върху продукта. А ако изпитвате проблеми моля опишете детаилно как можем да пресъздадем проблема. Ние ще се заемем веднага с поправянето му !</p>
                    </div>
                    <div class="card-footer mb-6">
                        <a href="/index.php?page=contact" class="btn btn-primary mb-6">Свържете се !</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</body>

</html>