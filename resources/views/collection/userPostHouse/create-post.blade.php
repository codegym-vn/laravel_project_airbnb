<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <link href="/Images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="audience" content="general"/>
    <meta name="resource-type" content="document"/>
    <meta name="abstract" content="Thông tin nhà đất Việt Nam"/>
    <meta name="classification" content="Bất động sản Việt Nam"/>
    <meta name="area" content="Nhà đất và bất động sản"/>
    <meta name="placename" content="Việt Nam"/>
    <meta name="author" content="tinbatdongsan.com"/>
    <meta name="copyright" content="©2013 tinbatdongsan.com"/>
    <meta name="owner" content="tinbatdongsan.com"/>
    <meta name="generator" content="tinbatdongsan.com"/>
    <meta name="distribution" content="Global"/>
    <meta name="keywords" content="Nhà, đất, cho, thuê, cho, thuê, nhà, tại, Việt"/>
    <meta name="description"
          content="Nhà đất cho thuê cho thuê nhà tại Việt Nam với các loại diện tích giá cho thuê địa điểm khác nhau Nhà đất cho thuê cho thuê nhà tại Việt Nam thuê và cho thuê nhà đất đầy đủ cập nhật nhất"/>
    <meta name="revisit-after" content="1 days"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="tinbatdongsan.com"/>
    <link rel="canonical" href="https://tinbatdongsan.com/nha-dat-cho-thue.htm"/>
    <link rel="stylesheet" href=" ">
    <title>
        Nhà đất cho thuê, cho thuê nhà Việt Nam | tại Việt Nam
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/reset.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-awesome.min.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-ops.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/basis.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Scripts/Fancybox/source/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/general.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/style.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all" href="https://tinbatdongsan.com/Styles/post.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/firefox.css?v=2018060171"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="https://tinbatdongsan.com/Styles/font-rbt.min.css?v=2018060171"/>
    <link href="https://tinbatdongsan.com/Styles/Scrollbar/scrollbar.css" rel="stylesheet"/>
    <link href="https://tinbatdongsan.com/Styles/Responsive.css?v=2018060171" rel="stylesheet" type="text/css"/>
    <link href="https://tinbatdongsan.comMaster/css/ie8.css" rel="stylesheet" type="text/css"/>
    <link href="https://tinbatdongsan.com/Scripts/jquery.selectbox-0.2/css/jquery.selectbox.css" rel="stylesheet"/>
    <link href="/Styles/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/jquery-ui-1.8.24.min.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/Fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/Register.js"></script>
    <script src="https://tinbatdongsan.com/Styles/Scrollbar/scrollbar.min.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/Common.js?v=123"></script>
<body>
<div class="bg-blue-20 height105">
    <div class="main">
        <div class="row clearfix">
            <div class="col-gr-100per">
                <div class="folder-title clearfix">
                    <div class="pull-left">
                        <h4 class="fsize-24 fweight-bold text-uppercase pd-top-35 pd-bottom-35 blue-clr no-mg">đăng tin
                            rao bán / cho thuê
                        </h4>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
<div id="wrapper" class="">
    <div class="main set-relative">
        <div class="row clearfix ">
            <div class="col-gr-100per">
                <div id="MainContent_PostNews1_pnDangtin">
                    <form method="post" action="{{ route('post.store')}}" enctype="multipart/form-data"
                          class="contact_form" id="contact_form">
                        {{ csrf_field() }}
                        <div class="post-title">
                            <h4 class="title text-uppercase fweight-bold">Thông tin
                            </h4>
                        </div>
                        <div class="post-field">
                            <label class="first">Loại tin</label>
                            <div id="nhaban" class="post-tab active">
                                <p><a onclick="ChangeTypePost(38);">Nhà đất bán</a></p>
                            </div>
                        </div>
                        <div class="post-field">
                            <label class="first">Tên Căn Nhà</label>
                            <input name="name" type="text" id="txtGia"
                                   class="form-control w-258 mg-right-30 pull-left" onchange="ChangeMucgia(this)"
                                   placeholder="Tên Căn Nhà"/>
                        </div>
                        <div class="post-field">
                            <label class="first">Loại nhà đất (<span class="red-clr">*</span>)</label>
                            <div class="post-field-option set-relative">
                                <input type="hidden" name="room" id="hddCatePost"
                                       value="-1"/>
                                <select id="cboCatePost" name="id_kind_house" class="form-control"
                                        onchange="ChangeCatePost($(this).val())">
                                    <option value="-1">Loại nhà đất</option>
                                    @foreach($kindHouses as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red; position: absolute; line-height: 40px; left: 0; top: 30px; display: none;"
                                      id="spanLoainhadat">Bạn cần nhập loại nhà đất</span>
                            </div>
                        </div>
                        <div class="post-field vitri">
                            <label class="first">Địa Chỉ(<span class="red-clr">*</span>)</label>
                            <div class="post-field-option set-relative">
                                <input type="hidden" name="address" id="hddCityPost"
                                       value="-1"/>
                                <select id="cboCityPost" onchange="ChangeCityPost($(this).val())"
                                        class="form-control mg-bottom-20" name="id_address">
                                    <option value="-1">Tỉnh/Thành</option>
                                    @foreach($address as $item)
                                        <option value="{{ $item->id }}">{{ $item->address }}</option>
                                    @endforeach
                                </select>
                                <span style="color: Red; top: 40px; float: left; position: absolute; z-index: 1; left: 0px; display: none;"
                                      id="spanCityPost">Bạn cần nhập Tỉnh thành phố</span>

                            </div>
                        </div>
                        <div class="post-field mg-top-0">
                            <label class="first">Giá</label>
                            <div class="post-field-option-price">
                                <input name="price" type="text" id="txtGia"
                                       class="form-control w-258 mg-right-30 pull-left" onchange="ChangeMucgia(this)"/>
                            </div>
                        </div>
                        <div class="post-field">
                            <label class="first">Địa điểm</label>
                            <div class="post-field-option">
                                <input name="ctl00$MainContent$PostNews1$txtDiadiem" type="text" id="txtDiadiem"
                                       class="form-control" onchange="ChangeDiadiem(this)"/>
                            </div>

                        </div>

                        <div class="post-field">
                            <label class="first">
                                Số phòng ngủ
                            </label>
                            <div class="post-field-option">
                                <input name="number_room" type="text" maxlength="3" id="txtSotang"
                                       class="form-control w-230"/>
                                <label class="mg-left-40 mg-right-77">Số phòng tắm</label>
                                <input name="number_bathroom" type="text" maxlength="3"
                                       id="txtSophong" class="form-control w-230"/>
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
                                       id="txtTieude" class="form-control"/>
                                <span style="color: Red; display: none; margin-top: 2px; float: left;" id="spanTieude">Bạn cần nhập tiêu đề</span>
                                <span style="color: Red; display: none; margin-top: 2px; float: left;" id="spanLimit">Tiêu đề phải nhập ít nhất 5 chữ!</span>
                                <span style="color: Red; display: none; margin-top: 2px; float: left;"
                                      id="spanMaxCharacter">Tiêu đề không được nhập quá 150 kí tự!</span>
                            </div>

                        </div>
                        <div class="post-field set-relative mg-top-0">
                            <label class="first">
                                <span style="letter-spacing: -0.5px">Nội dung mô tả</span> (<span
                                        class="red-clr">*</span>)
                                <br/>
                                <span class="note">Lưu ý: tối đa chỉ 3000 kí tự</span>
                            </label>
                            <div id="boxarea" class="post-field-option">
                            <textarea name="describe" id="tarNoidung" cols="60" rows="5"
                                      maxlength="3000" class="form-control" style="padding: 8px 15px 25px;"></textarea>
                                <span style="color: Red; display: none;"
                                      id="spanNoidungmota">Nội dung không được bỏ trống!</span>
                                <span style="color: Red; display: none;"
                                      id="spanLimited">Nội dung phải lớn hơn 100 kí tự!</span>
                                <div id="tarNoidung_counter" class="counter-noidung">
                                    1/3000 kí tự
                                </div>
                            </div>
                        </div>
                        <div class="post-field">
                            <label style="letter-spacing: -0.5px" class="first">Thời gian đăng (<span
                                        class="red-clr">*</span>)</label>
                            <div class="post-field-option">
                                <label class="mg-left-60 mg-right-5">Từ</label>
                                <input name="ctl00$MainContent$PostNews1$txtTungay" type="date" value="28/10/2018"
                                       id="txtTungay" class="form-control w-135 pointer" onkeypress="return false;"/>
                                <label class="mg-left-60 mg-right-5">Đến</label>
                                <input name="ctl00$MainContent$PostNews1$txtDenngay" type="date" value="28/01/2019"
                                       id="txtDenngay" class="form-control  w-135 pointer" onkeypress="return false;"/>
                                <input type="hidden" name="ctl00$MainContent$PostNews1$hdDenNgayBan" id="hdDenNgayBan"
                                       value="28/01/2019"/>
                                <input type="hidden" name="ctl00$MainContent$PostNews1$hdDenNgayThue" id="hdDenNgayThue"
                                       value="13/12/2018"/>
                                <span id="spanThoigianCheck"
                                      style="line-height: 40px; margin-left: 15px; color: red;display:none;">Từ ngày phải nhỏ hơn đến ngày</span>
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
                        <div class="post-field">
                            <script src="/Styles/CommonUpload/wvtupload.js"></script>
                            <link href="/Styles/CommonUpload/css.css?v=" rel="stylesheet" type="text/css"/>
                        </div>
                        <div class="post-title mg-top-30 pull-left w--100">
                            <h4 class="title text-uppercase fweight-bold">Thông tin liên hệ
                            </h4>
                        </div>
                        <div class="post-field mg-bottom-20">
                            <label class="first">Họ tên (<span class="red-clr">*</span>)</label>
                            <div class="post-field-option">
                                <input name="ctl00$MainContent$PostNews1$txtHovaten" type="text" id="txtHovaten"
                                       class="form-control w-390"/>
                                <label class="mg-left-120 mg-right-60">Địa chỉ</label>
                                <input name="ctl00$MainContent$PostNews1$txtDiachi" type="text" id="txtDiachi"
                                       class="form-control w-390"/>
                                <span style="color: Red; display: none; width: 50%; float: left;" id="spanHovaten">Bạn cần nhập họ và tên</span>
                            </div>
                        </div>
                        <div class="post-field mg-top-0 mg-bottom-20">
                            <label class="first">Điện thoại</label>
                            <div class="post-field-option">
                                <input name="ctl00$MainContent$PostNews1$txtDienthoai" type="text" id="txtDienthoai"
                                       class="form-control w-390"/>
                            </div>
                        </div>
                        <div class="post-field mg-top-0">
                            <label class="first">Email</label>
                            <div class="post-field-option">
                                <input name="ctl00$MainContent$PostNews1$txtEmail" type="text" id="txtEmail"
                                       class="form-control w-390 pull-left"/>
                                <span style="color: Red; display: none; width: 50%; float: left;" id="spanEmailempty">Bạn cần nhập email</span>
                                <span style="color: Red; display: none; width: 50%; float: left;" id="spanEmail">Email sai định dạng, bạn hãy nhập lại!</span>
                            </div>
                        </div>
                        <div class="post-field-btn">
                            <div class="post-field-btn-input" style="margin-left: 410px">
                                <input type="submit" name="ctl00$MainContent$PostNews1$btnSave" value="Đăng tin"
                                       onclick="return ValidateData();" id="MainContent_PostNews1_btnSave"
                                       class="form-control w-280 postnew  fweight-bold"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>