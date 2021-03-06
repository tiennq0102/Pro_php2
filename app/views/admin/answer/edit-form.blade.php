@extends('layouts.main2')
@section('main-content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cập nhật trả lời</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Cập nhật câu hỏi
            </div>
            <div class="card-body">
                <form action="<?= BASE_URL . 'answer/luu-cap-nhat_QuesId'.$model->id?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nội dung câu trả lời</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="content" value="<?= $model->content?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID question</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="question_id" value="<?=$model->question_id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Is correct</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="is_correct" 
                        value="<?= $model->is_correct ?>">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</main>         
@endsection