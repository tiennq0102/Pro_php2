<?php

use App\Models\Subject;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asm1/app/views/user/css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- gg font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header1">
                <a href="<?=BASE_URL . 'dashboard-user' ?>"><img src="../asm1/app/views/upload/logo.png" alt=""></a>
            </div>
            <div class="header2">
                <a class="btn btn-primary" href="<?= BASE_URL . 'login'?>">Đăng xuất</a>
                <a class="btn btn-primary" href="<?= BASE_URL . 'dang-ky'?>">Đăng ký</a>
            </div>
        </header>
        <hr>
        <main>
            <?php   
                use App\Models\Quiz;
                // echo '<pre>';
                // var_dump($inforQuiz);die;
            ?>
            <article class="">
                <h4 class="ms-3 mt-2">
                    Kết quả Quiz 1
                </h4>
                <form action="<?=BASE_URL.'save_result_test_Sid'.$inforQuiz[0]->subject_id?>" method="post" class="mx-3 my-1 rounded bg-light form1">
                    <div class="infor mx-3 my-3">
                        <h3>Thông tin:</h3>
                        <p>Họ và tên: <?php echo($_SESSION['user']->name)?></p>
                        <?php
                            array_pop($_POST);//bỏ phần thử cuối cùng là input submit
                            $point = 0; 
                            foreach ($_POST as $quiz => $value) {//duyệt mảng, mỗi phần tử là 1 quiz và lấy giá trị của nó
                                if($value === '1'){
                                    $point+=1;
                                }
                            }
                        ?> 
                        <?php foreach ($inforQuiz as $quiz):?>
                            <p>Tên chủ đề: <?= $quiz->subject()->name ?></p>{{-- lấy name subject --}}
                            <p>Tên quiz: <?= $quiz->name ?> </p>
                            <p>Thời gian quiz: <?= $quiz->duration_minutes ?> phút</p>   
                            <p>Thời gian bạn làm: </p>
                            <p>Điểm: <?=$point?></p>
                            <!-- <h1>thông tin submit</h1> -->
                            <input type="hidden" name="student_id" value="<?php echo($_SESSION['user']->id)?>"><br>
                            <input type="hidden" name="quiz_id" value="<?=$quiz->id?>"><br>
                            <input type="hidden" name="start_time"><br>
                            <input type="hidden" name="end_time"><br>
                            <input type="hidden" name="score" value=" <?=$point?>"><br>
                        <?php endforeach?><br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Lưu kết quả">
                    </div>
                    <div class="result my-3">
                        <?php
                            if($point>5){
                                echo '<h1 class="green">Pass</h1>';
                            }else{
                                echo '<h1 class="red">Fail</h1>';
                            }
                        ?>
                        
                    </div>
                </form>
                
                
            </article>
            <aside class="">
                <div class="box_aside">
                    <h3>Xin chào <?=$_SESSION['user']->name?></h3>
                    <h5>Chào mừng đến với QuizQuiz</h5>
                </div>
                <div class="box_aside">
                    <h3>Chào mừng đến với Quiz Quiz</h3>
                    <a class="btn btn-primary" href="<?= BASE_URL . 'dang-ky'?>">Tạo tài khoản</a>
                </div>
                <div>
                    <a class="btn btn-light ms-3" style="width: 87%;"  href="<?=BASE_URL . 'dashboard-user' ?>">Về trang chủ</a>
                </div>
            </aside>
        </main>
    </div>
</body>
</html>
































<?php

?>