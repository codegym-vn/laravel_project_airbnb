@extends('collection.userPostHouse.layout.teamplate');
@section('content')

    <div class="col-12">
        <form method="post" action="{{ route('post.store', $user->id)}}" enctype="multipart/form-data">
            @csrf

            @if(Session::has('messenger'))
                <p style="color: red">{{Session::get('messenger')}}</p>
            @endif

            <div class="form-group">
                <label for="exampleFormControlInput1"> Tên</label>
                <input class="form-control" name="name" placeholder="Tên">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Loại nhà đất</label>
                <select name="id_kind_house" class="form-control">
                    <option>Loại nhà đất</option>
                    @foreach($kindHouses as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Địa Chỉ</label>
                <select name="id_address" class="form-control">
                    <option>Tỉnh/Thành</option>
                    @foreach($address as $item)
                        <option value="{{ $item->id }}">{{ $item->address }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Giá </label>
                <input class="form-control" name="price" placeholder="Giá">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Địa chỉ</label>
                <input class="form-control" name="address" placeholder="Địa chỉ">
            </div>

            <div class="form-group">
                <label class="exampleFormControlInput1">
                    Số phòng ngủ
                </label>
                <div class="post-field-option">
                    <input name="number_room" type="text" maxlength="3"
                           class="form-control w-230"/>
                    <label class="mg-left-40 mg-right-77">Số phòng tắm</label>
                    <input name="number_bathroom" type="text" maxlength="3"
                           class="form-control w-230"/>
                </div>
            </div>

            <div class="post-title mg-top-30 pull-left">
                <h4 class="title text-uppercase fweight-bold">Mô tả chi tiết
                </h4>
            </div>
            <div class="post-field mg-bottom-20">
                <label class="first">Tiêu đề (<span class="red-clr">*</span>)</label>
                <div class="post-field-option">
                    <input name="title" type="text" maxlength="150"
                           class="form-control"/>
                </div>
            </div>

            <div class="post-field set-relative mg-top-0">
                <label class="first">
                    <span style="letter-spacing: -0.5px">Nội dung mô tả</span> (<span
                            class="red-clr"></span>)
                    <br/>
                </label>
                <div id="boxarea" class="post-field-option">
                            <textarea name="describe" cols="60" rows="5"
                                      maxlength="3000" class="form-control" style="padding: 8px 15px 25px;"></textarea>
                </div>
            </div>

            <div class="post-field">
                <label for="inputFileName">File Name</label>
                <input type="text"
                       class="form-control"
                       id="inputFileName"
                       name="inputFileName">
                <input type="file"
                       class="form-control-file"
                       id="inputFile"
                       name="inputFile">
            </div>

            <button type="submit" style="background-color: #00a855; color:white"> Gửi</button>
        </form>
    </div>




@endsection