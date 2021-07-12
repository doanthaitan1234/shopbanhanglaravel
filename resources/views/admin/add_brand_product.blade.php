@extends('admin_layout')
@section('admin_content')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm thương hiệu sản phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message', Null);
                            }
                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên thương hiệu sản phẩm</label>
                                    <input type="name" class="form-control" name="brand_name" id="exampleInputEmail1" placeholder="Tên thương hiệu sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả thương hiệu sản phẩm</label>
                                    <textarea style="resize: none;" rows="5" class="form-control" id="exampleInputPassword1" name="brand_desc" placeholder="Mô tả thương hiệu sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hiển thị</label>
                                    <select class="form-control input-sm m-bot15" name="brand_status">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                       
                            </select>
                                </div>
                                <button type="submit" name="add_brand_product" class="btn btn-info">Thêm thương hiệu sản phẩm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection
        