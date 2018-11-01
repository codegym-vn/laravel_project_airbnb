@extends('collection.userBockHouse.layout.teamplate')
@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">

            @if(Session::has('messenger'))
                <p style=" color: red">{{Session::get('messenger')}}</p>
            @endif
            <div id="MainContent_ProductDetail1_ProductArea_product_price" class="product_other">
                <div class="title-line-through mg-bottom-20">
                    <h4 class="title"> Nhà bạn vừa chọn </h4>
                </div>
                <ul class="group-prd group-3cl mg-bottom-20 clearfix" style="text-align: center ; padding-top: 40px">
                    <div class="image h155">
                        <a id="MainContent_ProductSearchResult_rpProductList_hplAvatar_3"
                           title="Cho thuê nhà riêng tại Đường Nguyễn Lương Bằng, Đống Đa, Hà Nội diện tích 75m2 giá 27 Tr..."
                           href="{{ route('seeDetails', $house->id) }}"><img
                                    style="width: 440px !important;"
                                    id="MainContent_ProductSearchResult_rpProductList_imgAvatar_3"
                                    class="img-list-product"
                                    src="{{ asset('storage/images/' . $house->image) }}" alt=""
                            ></a>
                    </div>

                    <div class="content" style="padding-top: 30px">
                        <h4 class="title lh-16 h50 mg-bottom-5">
                            <a id="hplTitle"
                               title="Cho thuê nhà riêng tại Đường Nguyễn Lương Bằng, Đống Đa, Hà Nội diện tích 75m2 giá 27 Tr..."
                               href="{{ route('seeDetails', $house->id) }}">{{ $house->name }}
                            </a>
                        </h4>

                        <p class="fsize-13 dblue-clr text-ellipsis mg-bottom-6">
                            <i class="fa fa-map-marker hint fsize-14 mg-right-5"></i>
                            {{ $house->address->address }}
                        </p>
                        <div class="info clearfix">
                            <div class="pull-left w--100 mg-bottom-5"
                                 style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                <i class='fa fa-tag hint mg-right-5'></i><span class="fweight-700 green-clr">
                                    {{ number_format($house->price) }} VNĐ
                                </span>
                            </div>
                            <div class="pull-left w--100">
                                <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                <span class="fweight-700 green-clr">
                                    @if($house->status == 0 )
                                        Chưa cho thuê
                                        <br><button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal">Đặt lịch thuê nhà này</button>
                                    @else
                                        Đã cho thuê
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thông tin của bạn </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </div>
                                <form method="post"
                                      action="{{route('bockhoue', ['idHouses' => $house->id, 'idUser' => $user['id']])}}">
                                    @csrf
                                    <div class="modal-body">
                                        <ul>
                                            <p> Thông tin thêm<input type="text"
                                                                     style="width: 400px; padding-bottom: 10px"
                                                                     name="information"></p>
                                            <p> Tên<input type="text" style="width: 400px; padding-bottom: 10px"
                                                          name="name"></p>
                                            <p> Số điện thoại<input type="text"
                                                                    style="width: 400px; padding-bottom: 10px"
                                                                    name="phone"></p>
                                            <p> Lich<input type="date" style="width: 400px; padding-bottom: 10px"
                                                           name="calender"></p>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Thoát
                                        </button>
                                        <button type="submit" class="btn btn-primary"> Lưu</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection