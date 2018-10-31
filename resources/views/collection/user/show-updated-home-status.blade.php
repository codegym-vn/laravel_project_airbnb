@extends('collection.user.layout.teamplate')
@section('content')

    <div class="col-12">
        <form method="post" action="{{ route('updatedHomeStatus') }}">
            @csrf
            @if(Session::has('messenger1'))
                <p style="color: red; text-align: center">{{Session::get('messenger1')}}</p>
            @endif

            @if(Session::has('messenger2'))
                <p style="color: red;text-align: center">{{Session::get('messenger2')}}</p>
            @endif

            <div class="form-group">
                @if($errors->has('password'))
                    <p style="color: red">{{ $errors->first('password') }}</p>
                @endif
                <label for="exampleFormControlInput1">Chọn nhà bạn muốn thay đổi: </label>
                <select class="form-control" name="nameHouse">
                    <option>Chọn nhà</option>
                    @foreach($houses as $house)
                        <option value="{{ $house->id }}">{{ $house->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                @if($errors->has('password'))
                    <p style="color: red">{{ $errors->first('password') }}</p>
                @endif
                <label for="exampleFormControlInput1">Thay đổi tạng thái: </label>
                <select class="form-control" name="status">
                    <option value="0">Trạng thái </option>
                    <option value="1">Đã cho thuê</option>
                    <option value="0">Chưa cho thuê</option>
                </select>
            </div>
            <button type="submit" style="background-color: #00a855; color:white"> Gửi</button>
        </form>
    </div>

@endsection