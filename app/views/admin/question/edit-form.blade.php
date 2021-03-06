@extends('layouts.main2')
@section('main-content')
                <main>
                    <div class="container-fluid px-4">
                        @section('title_page')
                            <h1 class="m-0">Cập nhật câu hỏi</h1>
                        @endsection
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Cập nhật câu hỏi
                            </div>
                            <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="floatingTextarea" class="form-label">Nội dung câu hỏi</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" id="floatingTextarea" name="name" cols="30" rows="10"><?=$model->name?></textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="">Tên danh mục</label>
                                        <select name="quiz_id" class="form-select mb-3" aria-label="Default select example">
                                            @php foreach($allQuiz as $quiz){
                                                if($model->quiz_id == $quiz->id){
                                                    echo '<option value="'.$quiz->id.'" selected>'.$quiz->name.'</option>';
                                                }else{
                                                    echo '<option value="'.$quiz->id.'" >'.$quiz->name.'</option>';
                                                }
                                            }
                                            @endphp   
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Image</label>
                                        @php 
                                            // $hinhpath = __DIR__."/../app/views/upload/".$model->img;
                                            //is_file chỉ check đường dẫn tuyệt đối, k thể check đường dẫn http://localhost/php2...
                                            $hinhpath = "./app/views/upload/".$model->img;
                                            // echo $hinhpath;
                                            // var_dump(is_file($hinhpath));
                                            if(is_file($hinhpath)){
                                                $img="<img src='".$hinhpath."' height='80px'>";
                                            }
                                            else{
                                                $img="no photo";
                                            }
                                        @endphp
                                        
                                        {!!$img!!} <br>
                                        <input type="file" name="img" value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection