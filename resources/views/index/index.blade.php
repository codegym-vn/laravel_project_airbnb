<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <link href="https://tinbatdongsan.com/Images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="audience" content="general"/>
    <meta name="resource-type" content="document"/>
    <meta name="abstract" content="Thông tin nhà đất Việt Nam"/>
    <meta name="classification" content="Bất động sản Việt Nam"/>
    <meta name="area" content="Nhà đất và bất động sản"/>
    <meta name="placename" content="Việt Nam"/>
    <meta name="author" content="#"/>
    <meta name="copyright" content="#"/>
    <meta name="owner" content="#"/>
    <meta name="generator" content="#"/>
    <meta name="distribution" content="Global"/>
    <meta name="keywords" content="Nhà, đất, cho, thuê, cho, thuê, nhà, tại, Việt"/>
    <meta name="description"
          content="Nhà đất cho thuê cho thuê nhà tại Việt Nam với các loại diện tích giá cho thuê địa điểm khác nhau Nhà đất cho thuê cho thuê nhà tại Việt Nam thuê và cho thuê nhà đất đầy đủ cập nhật nhất"/>
    <meta name="revisit-after" content="1 days"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="#"/>
    <link rel="canonical" href="#"/>
    <title>Nhà đất cho thuê, cho thuê nhà Việt Nam | tại Việt Nam</title>
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
    <link href="https://tinbatdongsan.com/Styles/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/jquery-ui-1.8.24.min.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/Fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" href="https://tinbatdongsan.com/Scripts/Register.js"></script>
    <script href="https://tinbatdongsan.com/Styles/Scrollbar/scrollbar.min.js"></script>
    <script type="text/javascript" src="https://tinbatdongsan.com/Scripts/Common.js?v=123"></script>
<body>
@include('index.layout.header')


<div class="head-search">
    <h4 class="title">Tìm kiếm bất động sản</h4>
    <div class="form-search">
        <input name="ctl00$SearchContent$HomeSearch$ProductTextSearch$txtTextSearch" type="text" maxlength="100"
               id="txtTextSearch" class="form-control ui-autocomplete-input" autocomplete="off"
               onfocus="if (this.value == &#39;Nhập từ khóa&#39;) (this.value=&#39;&#39;)"
               onblur="if (this.value == &#39;&#39;) (this.value=&#39;Nhập từ khóa&#39;)" role="textbox"
               aria-autocomplete="list" aria-haspopup="true"/>
        <input type="hidden" name="ctl00$SearchContent$HomeSearch$ProductTextSearch$hddCateSearch" id="hddCateSearch"
               value="38"/>
        <a id="lbtSearchTop" class="submit" onclick="searchClick()"><i class="fafa-search"
                                                                       style="top: 10px; position: absolute;"></i></a>
    </div>
    <div class="group-advance-search">
        <ul class="tabs-search home-search clearfix">
            <li class="active" id="ban"><a onclick="ChangeType(38);">Bất động sản bán nhà</a></li>
        </ul>
        <div class="search-content">
            <ul class="filter clearfix">
                <li>
                    <div class="custom-select">
                        <input type="hidden" name="ctl00$SearchContent$HomeSearch$hddCity" id="hddCity" value="-1"/>
                        <select class="form-control" id="cboCity" onchange="ChangeCity($(this).val())">
                            <option value="-1">Tỉnh/Thành Phố</option>
                        </select>

                    </div>
                </li>
                <li>
                    <div class="custom-select">
                        <input type="hidden" name="ctl00$SearchContent$HomeSearch$hddPrice" id="hddPrice" value="-1"/>
                        <select id="cboPrice" class="form-control" onchange="ChangeValue('Price', $(this).val());">
                            <option value="-1">Mức giá</option>
                            <option value="-1">Dưới 2 triệu</option>
                            <option value="-1">Từ 2 - 4 triệu</option>
                            <option value="-1">Từ 4 - 7 triệu</option>
                            <option value="-1">Từ 7 - 13 triệu</option>
                            <option value="-1">Trên 13 triệu</option>
                        </select>

                    </div>
                </li>
                <li>
                    <div class="custom-select">
                        <input type="hidden" name="ctl00$SearchContent$HomeSearch$hddProject" id="hddProject"
                               value="-1"/>
                        <select id="cboProject" class="form-control" onchange="ChangeValue('Project', $(this).val());">
                            <option value="-1">Thời gian</option>
                            <option value="-1">Dưới 2 tháng</option>
                            <option value="-1">Từ 2 - 4 tháng</option>
                            <option value="-1">Từ 4 - 7 tháng</option>
                            <option value="-1">Từ 7 - 12 tháng</option>
                            <option value="-1">Trên 1 năm</option>
                        </select>
                    </div>
                </li>
                <li>
                    <div class="custom-select">
                        <input type="hidden" name="ctl00$SearchContent$HomeSearch$hddRoom" id="hddRoom" value="-1"/>
                        <select id="cboRoom" class="form-control" onchange="ChangeValue('Room', $(this).val());">
                            <option value="-1">Phòng ngủ</option>
                            @for($i = 1; $i <= 10; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>

                    </div>
                </li>
                <li>
                    <div class="custom-select">
                        <input type="hidden" name="ctl00$SearchContent$HomeSearch$hddDirection" id="hddDirection"
                               value="-1"/>
                        <select id="cboDirection" class="form-control"
                                onchange="ChangeValue('Direction', $(this).val());">
                            <option value="-1">Phòng tắm</option>
                            @for($i = 1; $i <= 10; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>

                    </div>
                </li>
                <li class="dbwidth">
                    <a id="btnSearch" class="btn bg-green full-width"
                       href="javascript:__doPostBack(&#39;ctl00$SearchContent$HomeSearch$btnSearch&#39;,&#39;&#39;)">
                        Tìm kiếm
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="block-news pd-top-30 pd-bottom-30">
    <div class="main">
        <ul class="title-tabs clearfix mg-bottom-20">
            <li class="active" id="pr_hot"><a onclick="ChangeProduct(38);">Tin rao dành cho bạn</a></li>
            <li class="space"></li>
            <li id="pr_top" class=""><a onclick="ChangeProduct(49);">Tin mới nhất</a></li>
        </ul>
        <div id="MainContent_ProductHot_pnProduct">
            <div id="prHost">
                <div class="row sm-space clearfix">
                    <div class="col-gr-100per">
                        <ul class="group-prd sm-space group-5cl clearfix">
                            <li class="first">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_0"
                                       title="Dự án King Bay đón đầu thị trường BĐS khu Đông, LH 0933781007"
                                       href="/ban-dat-nen-du-an-king-bay/du-an-king-bay-don-dau-thi-truong-bds-khu-dong-pr12388457.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_0"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/09/14/20180914144405-18c8.jpg"/></a>
                                </div>
                                <div class="content">
                                    <h4 class="title cut-text-3"><a id="hplTitle"
                                                                    title="Dự án King Bay đón đầu thị trường BĐS khu Đông, LH 0933781007"
                                                                    href="{{route('information-house')}}">Dự án King Bay
                                            đón đầu thị trường BĐS khu Đông, LH 0933781007</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd ">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            17 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="pull-right">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            --
                                        </span>
                                        </div>
                                    </div>
                                    <p class="">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_1"
                                       title="Quỹ đất vàng cho nhà đầu tư ngay mặt tiền đường Vành Đai 3, LH 0984038817"
                                       href="/ban-dat-nen-du-an-king-bay/quy-dat-vang-cho-nha-dau-tu-ngay-mat-tien-duong-vanh-dai-3-pr12382210.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_1"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/09/13/20180913160238-899d.jpg"/></a>
                                </div>
                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle"
                                           title="Quỹ đất vàng cho nhà đầu tư ngay mặt tiền đường Vành Đai 3, LH 0984038817"
                                           href="/ban-dat-nen-du-an-king-bay/quy-dat-vang-cho-nha-dau-tu-ngay-mat-tien-duong-vanh-dai-3-pr12382210.htm">Quỹ
                                            đất vàng cho nhà đầu tư ngay mặt tiền đường Vành Đai 3, LH 0984038817</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            19 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            125&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_2"
                                       title="MỞ BÁN ĐẤT VÀNG VEN SÔNG ĐẸP NHẤT NHƠN TRẠCH - ĐÓN ĐẦU QUY HOẠCH VÀNH ĐAI 3, CẦU Q9, CAM KẾT LN 10%"
                                       href="/ban-dat-nen-du-an-king-bay/mo-ban-dat-vang-ven-song-dep-nhat-nhon-trach-don-dau-quy-hoach-vanh-dai-3-cau-q9-cam-ket-ln-10-pr12304005.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_2"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/08/28/20180828115503-503d.jpg"/></a>
                                </div>
                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle"
                                           title="MỞ BÁN ĐẤT VÀNG VEN SÔNG ĐẸP NHẤT NHƠN TRẠCH - ĐÓN ĐẦU QUY HOẠCH VÀNH ĐAI 3, CẦU Q9, CAM KẾT LN 10%"
                                           href="/ban-dat-nen-du-an-king-bay/mo-ban-dat-vang-ven-song-dep-nhat-nhon-trach-don-dau-quy-hoach-vanh-dai-3-cau-q9-cam-ket-ln-10-pr12304005.htm">MỞ
                                            BÁN ĐẤT VÀNG VEN SÔNG ĐẸP NHẤT NHƠN TRẠCH - ĐÓN ĐẦU QUY HOẠCH VÀNH ĐAI 3,
                                            CẦU Q9, CAM KẾT LN 10%</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            19 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            125&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_3"
                                       title="Khu đô thị sinh thái ven sông đẳng cấp, hiện đại vị trí đẹp, giá rẻ"
                                       href="/ban-dat-nen-du-an-king-bay/khu-do-thi-sinh-thai-ven-song-dang-cap-hien-dai-vi-tri-dep-gia-re-pr12243739.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_3"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/08/14/20180814093458-4691.png"/></a>
                                </div>
                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle"
                                           title="Khu đô thị sinh thái ven sông đẳng cấp, hiện đại vị trí đẹp, giá rẻ"
                                           href="/ban-dat-nen-du-an-king-bay/khu-do-thi-sinh-thai-ven-song-dang-cap-hien-dai-vi-tri-dep-gia-re-pr12243739.htm">Khu
                                            đô thị sinh thái ven sông đẳng cấp, hiện đại vị trí đẹp, giá rẻ</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            19 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            156&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_4"
                                       title="DỰ ÁN KING BAY LÀ CON GÀ ĐẺ TRỨNG VÀNG CHO NHÀ ĐẦU TƯ"
                                       href="/ban-dat-nen-du-an-king-bay/du-an-king-bay-la-con-ga-de-trung-vang-cho-nha-dau-tu-pr12215218.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_4"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/08/07/20180807110116-80d0.jpg"/></a>
                                </div>

                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle" title="DỰ ÁN KING BAY LÀ CON GÀ ĐẺ TRỨNG VÀNG CHO NHÀ ĐẦU TƯ"
                                           href="/ban-dat-nen-du-an-king-bay/du-an-king-bay-la-con-ga-de-trung-vang-cho-nha-dau-tu-pr12215218.htm">DỰ
                                            ÁN KING BAY LÀ CON GÀ ĐẺ TRỨNG VÀNG CHO NHÀ ĐẦU TƯ</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            03 Tỷ
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            125&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_5"
                                       title="Cơ Hội Để Sở Hữu Nền Đất Khu Phức Hợp King Bay Ven Sông, Mặt Tiền Vành Đai 3, Gía Chỉ 19Tr-m2"
                                       href="/ban-dat-nen-du-an-duong-ly-tu-trong-xa-long-tan-3/co-hoi-de-so-huu-nen-dat-khu-phuc-hop-king-bay-ven-song-mat-tien-vanh-dai-3-gia-chi-19trm2-pr12451632.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_5"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/09/26/20180926111601-683f.jpeg"/></a>
                                </div>

                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle"
                                           title="Cơ Hội Để Sở Hữu Nền Đất Khu Phức Hợp King Bay Ven Sông, Mặt Tiền Vành Đai 3, Gía Chỉ 19Tr-m2"
                                           href="/ban-dat-nen-du-an-duong-ly-tu-trong-xa-long-tan-3/co-hoi-de-so-huu-nen-dat-khu-phuc-hop-king-bay-ven-song-mat-tien-vanh-dai-3-gia-chi-19trm2-pr12451632.htm">Cơ
                                            Hội Để Sở Hữu Nền Đất Khu Phức Hợp King Bay Ven Sông, Mặt Tiền Vành Đai 3,
                                            Gía Chỉ 19Tr-m2</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            19 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            168&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                            <li class="">
                                <div class="image border-6d">
                                    <a id="MainContent_ProductHot_ctl00_rptProductHome_hplAvatar_6"
                                       title="Dự Án - Cơ Hội Đầu Tư Không Nên Bỏ Lỡ"
                                       href="/ban-dat-nen-du-an-khu-do-thi-mega-city-2/du-an-co-hoi-dau-tu-khong-nen-bo-lo-pr12214794.htm"><img
                                                id="MainContent_ProductHot_ctl00_rptProductHome_imgAvatar_6"
                                                src="https://img.tinbatdongsan.com/crop/212x169/2018/08/07/20180807100757-fb7f.jpg"/></a>
                                </div>

                                <div class="content">
                                    <h4 class="title h40 cut-text-2">
                                        <a id="hplTitle" title="Dự Án - Cơ Hội Đầu Tư Không Nên Bỏ Lỡ"
                                           href="/ban-dat-nen-du-an-khu-do-thi-mega-city-2/du-an-co-hoi-dau-tu-khong-nen-bo-lo-pr12214794.htm">Dự
                                            Án - Cơ Hội Đầu Tư Không Nên Bỏ Lỡ</a>
                                    </h4>
                                    <div class="info clearfix">
                                        <div style="white-space: nowrap; text-overflow: ellipsis;"
                                             class="pull-left h20 ovf-hd w--100">
                                            <i class='fa fa-tag hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr fsize-15">
                                            69 Triệu/m²
                                        </span>
                                        </div>
                                        <div class="w--100 pull-left">
                                            <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                            <span class="fweight-700 green-clr  fsize-15">
                                            100&nbsp;m&#178;
                                        </span>
                                        </div>
                                    </div>
                                    <p class="none">
                                        <i class="fa fa-map-marker hint mg-right-5"></i>
                                        Nhơn Trạch - Đồng Nai
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="text-right">
                    <a href="/nha-dat-ban.htm">
                        <span class="dark-clr text-underline">Xem thêm</span>
                        <i class="fa fa-chevron-circle-right mg-left-5 blue-clr"></i>
                    </a>
                </div>
            </div>

        </div>

        <div id="prTop" style="display: none;">
            <div class="row sm-space clearfix">
                <div class="col-gr-100per">
                    <ul class="group-prd sm-space group-5cl clearfix">

                        <li class="first">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_0"
                                   title="Bán nhà  1 trệt 1 lầu hẻm liên tổ 3-4 đường nguyễn văn cừ p. an khánh q. ninh kiều"
                                   href="/ban-nha-rieng-duong-nguyen-van-cu-1-phuong-an-khanh-1/ban-nha-1-tret-1-lau-hem-lien-to-34-duong-nguyen-van-cu-p-an-khanh-q-ninh-kieu-pr12659621.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_0"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/10/27/20181027202602-cd42.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title cut-text-3">
                                    <a id="hplTitle"
                                       title="Bán nhà  1 trệt 1 lầu hẻm liên tổ 3-4 đường nguyễn văn cừ p. an khánh q. ninh kiều"
                                       href="/ban-nha-rieng-duong-nguyen-van-cu-1-phuong-an-khanh-1/ban-nha-1-tret-1-lau-hem-lien-to-34-duong-nguyen-van-cu-p-an-khanh-q-ninh-kieu-pr12659621.htm">Bán
                                        nhà 1 trệt 1 lầu hẻm liên tổ 3-4 đường nguyễn văn cừ p. an khánh q.
                                        ninh kiều</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left ">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    2.2 Tỷ
                                                </span>
                                    </div>
                                    <div class="pull-right">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    67&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Ninh Kiều - Cần Thơ
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_1"
                                   title="Cần tiền bán gấp biệt thự Hưng Thái, PMH, Q7 cam kết giá rẻ nhất thị trường. LH: 0917300798"
                                   href="/ban-nha-biet-thu-lien-ke-hung-thai/can-tien-ban-gap-biet-thu-hung-thai-pmh-q7-cam-ket-gia-re-nhat-thi-truong-lh-0917300798-pr12632221.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_1"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/10/24/20181024143914-8d1b.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Cần tiền bán gấp biệt thự Hưng Thái, PMH, Q7 cam kết giá rẻ nhất thị trường. LH: 0917300798"
                                       href="/ban-nha-biet-thu-lien-ke-hung-thai/can-tien-ban-gap-biet-thu-hung-thai-pmh-q7-cam-ket-gia-re-nhat-thi-truong-lh-0917300798-pr12632221.htm">Cần
                                        tiền bán gấp biệt thự Hưng Thái, PMH, Q7 cam kết giá rẻ nhất thị trường. LH:
                                        0917300798</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    15.5 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    126&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Quận 7 - Hồ Chí Minh
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_2"
                                   title="Chính chủ bán 1592m2 mặt tiền 834 gần vòng xoay tượng đài ngã 5 tân An "
                                   href="/ban-dat-xa-huong-tho-phu/chinh-chu-ban-1592m2-mat-tien-834-gan-vong-xoay-tuong-dai-nga-5-tan-an-pr12659613.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_2"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/10/27/20181027203501-3466.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Chính chủ bán 1592m2 mặt tiền 834 gần vòng xoay tượng đài ngã 5 tân An "
                                       href="/ban-dat-xa-huong-tho-phu/chinh-chu-ban-1592m2-mat-tien-834-gan-vong-xoay-tuong-dai-nga-5-tan-an-pr12659613.htm">Chính
                                        chủ bán 1592m2 mặt tiền 834 gần vòng xoay tượng đài ngã 5 tân An </a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    5.2 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    1,592&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Tân An - Long An
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_3"
                                   title="Bán Nhà mới xây, BẢO HÀNH5NĂM,tại hẽm 479,QL.13,QThủ Đức,giá 2tỷ8"
                                   href="/ban-nha-biet-thu-lien-ke-duong-479-phuong-hiep-binh-phuoc/ban-nha-moi-xay-bao-hanh5namtai-hem-479ql13qthu-ducgia-2ty8-pr11590986.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_3"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/03/30/20180330205444-c661.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Bán Nhà mới xây, BẢO HÀNH5NĂM,tại hẽm 479,QL.13,QThủ Đức,giá 2tỷ8"
                                       href="/ban-nha-biet-thu-lien-ke-duong-479-phuong-hiep-binh-phuoc/ban-nha-moi-xay-bao-hanh5namtai-hem-479ql13qthu-ducgia-2ty8-pr11590986.htm">Bán
                                        Nhà mới xây, BẢO HÀNH5NĂM,tại hẽm 479,QL.13,QThủ Đức,giá 2tỷ8</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    2.8 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    56&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Thủ Đức - Hồ Chí Minh
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_4"
                                   title="Bán Nhà mới xây, BẢO HÀNH5NĂM,tại Đường Số 8 Xuân Phước,QThủ Đức,giá 2tỷ9"
                                   href="/ban-nha-biet-thu-lien-ke-duong-8-2-phuong-hiep-binh-phuoc/ban-nha-moi-xay-bao-hanh5namtai-duong-so-8-xuan-phuocqthu-ducgia-2ty9-pr11590995.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_4"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/03/30/20180330205907-2a86.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Bán Nhà mới xây, BẢO HÀNH5NĂM,tại Đường Số 8 Xuân Phước,QThủ Đức,giá 2tỷ9"
                                       href="/ban-nha-biet-thu-lien-ke-duong-8-2-phuong-hiep-binh-phuoc/ban-nha-moi-xay-bao-hanh5namtai-duong-so-8-xuan-phuocqthu-ducgia-2ty9-pr11590995.htm">Bán
                                        Nhà mới xây, BẢO HÀNH5NĂM,tại Đường Số 8 Xuân Phước,QThủ Đức,giá 2tỷ9</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    2.9 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    56&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Thủ Đức - Hồ Chí Minh
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_5"
                                   title="Bán nhà mới xây, tại Hiệp Bình Chánh, Q. Thủ Đức, đường Số 36, giá 2,9 tỷ"
                                   href="/ban-nha-rieng-duong-so-36-phuong-hiep-binh-chanh/ban-nha-moi-xaytai-hiep-binh-chanhqthu-ducduong-so-36gia-29ty-pr11594543.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_5"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/04/01/20180401100718-55c2.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Bán nhà mới xây, tại Hiệp Bình Chánh, Q. Thủ Đức, đường Số 36, giá 2,9 tỷ"
                                       href="/ban-nha-rieng-duong-so-36-phuong-hiep-binh-chanh/ban-nha-moi-xaytai-hiep-binh-chanhqthu-ducduong-so-36gia-29ty-pr11594543.htm">Bán
                                        nhà mới xây, tại Hiệp Bình Chánh, Q. Thủ Đức, đường Số 36, giá 2,9 tỷ</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    2.9 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    56&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Thủ Đức - Hồ Chí Minh
                                </p>
                            </div>
                        </li>

                        <li class="">
                            <div class="image border-6d">
                                <a id="MainContent_ProductHot_rptNewProducts_hplAvatar_6"
                                   title="Bán gấp nhà 1 trệt 3 lầu, tại đường Số 4 Cầu Ông Dầu,Q Thủ Đức, giá 3tỷ2"
                                   href="/ban-nha-rieng-phuong-hiep-binh-phuoc/ban-gap-nha-1-tret-3-lau-tai-duong-so-4-cau-ong-dauq-thu-duc-gia-3ty2-pr10599084.htm"><img
                                            id="MainContent_ProductHot_rptNewProducts_imgAvatar_6"
                                            src="https://img.tinbatdongsan.com/crop/212x169/2018/04/08/20180408215306-1eb3.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title h40 cut-text-2">
                                    <a id="hplTitle"
                                       title="Bán gấp nhà 1 trệt 3 lầu, tại đường Số 4 Cầu Ông Dầu,Q Thủ Đức, giá 3tỷ2"
                                       href="/ban-nha-rieng-phuong-hiep-binh-phuoc/ban-gap-nha-1-tret-3-lau-tai-duong-so-4-cau-ong-dauq-thu-duc-gia-3ty2-pr10599084.htm">Bán
                                        gấp nhà 1 trệt 3 lầu, tại đường Số 4 Cầu Ông Dầu,Q Thủ Đức, giá 3tỷ2</a>
                                </h4>
                                <div class="info clearfix">
                                    <div style="white-space: nowrap; text-overflow: ellipsis;"
                                         class="h20 ovf-hd pull-left w--100">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr fsize-15">
                                                    3.2 Tỷ
                                                </span>
                                    </div>
                                    <div class="w--100 pull-left">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr  fsize-15">
                                                    76&nbsp;m&#178;
                                                </span>
                                    </div>
                                </div>
                                <p class="none">
                                    <i class="fa fa-map-marker hint mg-right-5"></i>
                                    Thủ Đức - Hồ Chí Minh
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

            <div class="text-right">
                <a href="/nha-dat-ban.htm">
                    <span class="dark-clr text-underline">Xem thêm</span>
                    <i class="fa fa-chevron-circle-right mg-left-5 blue-clr"></i>
                </a>
            </div>
        </div>
    </div>

</div>
<input type="hidden" name="ctl00$MainContent$ProductCount$areaCount" id="areaCount"/>
<input type="hidden" name="ctl00$MainContent$ProductCount$priceCount" id="priceCount"/>
<input type="hidden" name="ctl00$MainContent$ProductCount$roomCount" id="roomCount"/>
<div class="block-estate pd-top-30 pd-bottom-15">

    <div class="main">
        <h4 class="title-txt mg-bottom-20">nhà đất bán theo khu vực
        </h4>
        <div class="row clearfix">

            <div class="col-gr-50per">

                <ul class="group-prd group-2cl list-estate">

                    <li>
                        <div class="image">
                            <a href="/nha-dat-ban-tp-hcm.htm">
                                <img style="height:210px;" src="Images/hcm.png" alt="">
                            </a>
                        </div>
                        <div class="title-estate">
                            <h4>
                                <a href="/nha-dat-ban-tp-hcm.htm">Hồ Chí Minh (363,652)</a>
                            </h4>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="/nha-dat-ban-ha-noi.htm">
                                <img style="height:210px;" src="Images/hn.png" alt="">
                            </a>
                        </div>
                        <div class="title-estate">
                            <h4>
                                <a href="/nha-dat-ban-ha-noi.htm">Hà Nội (168,861)</a>
                            </h4>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="/nha-dat-ban-binh-duong.htm">
                                <img style="height:210px;" src="Images/binhduong.png" alt="">
                            </a>
                        </div>
                        <div class="title-estate">
                            <h4>
                                <a href="/nha-dat-ban-binh-duong.htm">Bình Dương (18,766)</a>
                            </h4>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="/nha-dat-ban-da-nang.htm">
                                <img style="height:210px;" src="Images/danang.png" alt="">
                            </a>
                        </div>
                        <div class="title-estate">
                            <h4>
                                <a href="/nha-dat-ban-da-nang.htm">Đà Nẵng (26,874)</a>
                            </h4>
                        </div>
                    </li>

                </ul>

            </div>

            <div class="col-gr-50per" style="padding:0 25px 0 15px;">

                <ul id="area-scroll" class="list-dot-link list-3cl row clearfix scrollbar-inner">

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-hai-phong.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hải Phòng
                            <span class="blue-clr">(4,178)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-long-an.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Long An
                            <span class="blue-clr">(5,693)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ba-ria-vung-tau.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bà Rịa Vũng Tàu
                            <span class="blue-clr">(4,556)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-an-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            An Giang
                            <span class="blue-clr">(274)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-bac-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bắc Giang
                            <span class="blue-clr">(317)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-bac-kan.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bắc Kạn
                            <span class="blue-clr">(19)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-bac-lieu.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bạc Liêu
                            <span class="blue-clr">(65)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-bac-ninh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bắc Ninh
                            <span class="blue-clr">(2,037)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ben-tre.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bến Tre
                            <span class="blue-clr">(241)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-binh-dinh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bình Định
                            <span class="blue-clr">(348)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-binh-phuoc.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bình Phước
                            <span class="blue-clr">(399)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-binh-thuan.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Bình Thuận
                            <span class="blue-clr">(1,643)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ca-mau.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Cà Mau
                            <span class="blue-clr">(163)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-can-tho.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Cần Thơ
                            <span class="blue-clr">(1,643)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-cao-bang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Cao Bằng
                            <span class="blue-clr">(11)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-dak-lak.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Đắk Lắk
                            <span class="blue-clr">(1,658)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-dak-nong.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Đắk Nông
                            <span class="blue-clr">(186)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-dien-bien.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Điện Biên
                            <span class="blue-clr">(52)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-dong-nai.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Đồng Nai
                            <span class="blue-clr">(10,175)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-dong-thap.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Đồng Tháp
                            <span class="blue-clr">(146)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-gia-lai.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Gia Lai
                            <span class="blue-clr">(365)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ha-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hà Giang
                            <span class="blue-clr">(33)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ha-nam.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hà Nam
                            <span class="blue-clr">(215)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ha-tinh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hà Tĩnh
                            <span class="blue-clr">(138)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-hai-duong.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hải Dương
                            <span class="blue-clr">(1,389)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-hau-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hậu Giang
                            <span class="blue-clr">(106)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-hoa-binh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hòa Bình
                            <span class="blue-clr">(358)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-hung-yen.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Hưng Yên
                            <span class="blue-clr">(418)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-khanh-hoa.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Khánh Hòa
                            <span class="blue-clr">(5,841)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-kien-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Kiên Giang
                            <span class="blue-clr">(822)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-kon-tum.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Kon Tum
                            <span class="blue-clr">(122)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-lai-chau.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Lai Châu
                            <span class="blue-clr">(61)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-lam-dong.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Lâm Đồng
                            <span class="blue-clr">(3,948)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-lang-son.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Lạng Sơn
                            <span class="blue-clr">(40)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-lao-cai.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Lào Cai
                            <span class="blue-clr">(321)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-nam-dinh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Nam Định
                            <span class="blue-clr">(790)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-nghe-an.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Nghệ An
                            <span class="blue-clr">(595)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ninh-binh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Ninh Bình
                            <span class="blue-clr">(218)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-ninh-thuan.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Ninh Thuận
                            <span class="blue-clr">(167)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-phu-tho.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Phú Thọ
                            <span class="blue-clr">(199)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-phu-yen.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Phú Yên
                            <span class="blue-clr">(140)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-quang-binh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Quảng Bình
                            <span class="blue-clr">(102)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-quang-nam.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Quảng Nam
                            <span class="blue-clr">(5,816)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-quang-ngai.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Quảng Ngãi
                            <span class="blue-clr">(240)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-quang-ninh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Quảng Ninh
                            <span class="blue-clr">(2,095)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-quang-tri.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Quảng Trị
                            <span class="blue-clr">(80)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-soc-trang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Sóc Trăng
                            <span class="blue-clr">(106)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-son-la.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Sơn La
                            <span class="blue-clr">(66)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-tay-ninh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Tây Ninh
                            <span class="blue-clr">(230)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-thai-binh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Thái Bình
                            <span class="blue-clr">(440)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-thai-nguyen.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Thái Nguyên
                            <span class="blue-clr">(315)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-thanh-hoa.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Thanh Hóa
                            <span class="blue-clr">(580)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-thua-thien-hue.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Thừa Thiên Huế
                            <span class="blue-clr">(949)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-tien-giang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Tiền Giang
                            <span class="blue-clr">(372)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-tra-vinh.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Trà Vinh
                            <span class="blue-clr">(88)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-tuyen-quang.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Tuyên Quang
                            <span class="blue-clr">(58)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-vinh-long.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Vĩnh Long
                            <span class="blue-clr">(260)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-vinh-phuc.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Vĩnh Phúc
                            <span class="blue-clr">(1,041)</span>
                        </a>
                    </li>

                    <li>
                        <a class="fsize-13" href="/nha-dat-ban-yen-bai.htm">
                            <i class="fa fa-circle green-clr"></i>
                            Yên Bái
                            <span class="blue-clr">(61)</span>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</div>
<div class="block-project-news pd-top-30 pd-bottom-30">
    <div class="main">
        <ul class="title-tabs news-home clearfix mg-bottom-20">
            <li id="pr_consult"><a onclick="ChangeNews(49)">Tin xem nhiều</a></li>

            <li class="space"></li>
            <li id="pr_project" class="active"><a onclick="ChangeNews(38)">Tin tức dự án</a></li>
        </ul>
        <div id="prConsult">
            <ul class="group-prd group-4cl group-1row clearfix">
                <li>
                    <div class="image border-6d">
                        <a href="#">
                            <img src="https://img.tinbatdongsan.com/2018/10/27/20181027121940978424-f64a.jpg"
                                 alt="Những tuyến đường " đắt nhất hành tinh" tại Hà Nội">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="#" title="Những tuyến đường " đắt nhất hành tinh" tại Hà Nội">
                            Những tuyến đường "đắt nhất hành tinh" tại Hà Nội
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            27/10/2018
                        </p>
                        <p class="introduce">
                            Những dự án đường hàng nghìn tỷ đồng được mệnh danh là những tuyến đường "đắt nhất hành
                            tinh" tại Hà Nội liên tục được thiết lập với số vốn đầu tư tăng dần.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tu-van/phe-duyet-tuyen-duong-dat-nhat-hanh-tinh-hon-7200-ty-dong-tai-ha-noi-ar18234.htm">
                            <img src="https://img.tinbatdongsan.com/2018/10/26/20181026134357042124-e96e.jpg"
                                 alt="Phê duyệt tuyến đường " đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà Nội">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tu-van/phe-duyet-tuyen-duong-dat-nhat-hanh-tinh-hon-7200-ty-dong-tai-ha-noi-ar18234.htm"
                               title="Phê duyệt tuyến đường " đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà Nội">
                            Phê duyệt tuyến đường "đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà Nội
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            26/10/2018
                        </p>
                        <p class="introduce">
                            Phó Chủ tịch UBND TP. Hà Nội Nguyễn Thế Hùng vừa phê duyệt Dự án tuyến đường vành đai 1 đoạn
                            Hoàng Cầu - Voi Phục (giai đoạn 1). Với chiều dài 2,2km, đây được xem ...
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tu-van/de-xuat-khong-cho-nguoi-ngoai-tinh-mua-nha-cao-tang-tai-vung-noi-do-ar18232.htm">
                            <img src="https://img.tinbatdongsan.com/2018/10/26/Z9BcC3fq/nha-cao-tang-8e2e.jpg"
                                 alt="Đề xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tu-van/de-xuat-khong-cho-nguoi-ngoai-tinh-mua-nha-cao-tang-tai-vung-noi-do-ar18232.htm"
                               title="Đề xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô">
                                Đề xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            26/10/2018
                        </p>
                        <p class="introduce">
                            Đó là đề xuất được đưa ra bởi Chủ tịch Tổng hội Xây dựng Việt Nam trong hội thảo khoa học
                            Quản lý phát triển công trình cao tầng khu vực nội đô lịch sử mở rộng TP. ...
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tu-van/no-ro-xu-huong-cho-thue-mat-bang-theo-ngay-gio-tai-sai-gon-ar18230.htm">
                            <img src="https://img.tinbatdongsan.com/2018/10/26/Z9BcC3fq/thue-mat-bang-994f.jpg"
                                 alt="Nở rộ xu hướng cho thuê mặt bằng theo ngày, giờ tại Sài Gòn">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tu-van/no-ro-xu-huong-cho-thue-mat-bang-theo-ngay-gio-tai-sai-gon-ar18230.htm"
                               title="Nở rộ xu hướng cho thuê mặt bằng theo ngày, giờ tại Sài Gòn">
                                Nở rộ xu hướng cho thuê mặt bằng theo ngày, giờ tại Sài Gòn
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            26/10/2018
                        </p>
                        <p class="introduce">
                            Xu hướng cho thuê mặt bằng dôi dư tại nhiều nhà mặt tiền, hàng quán, văn phòng với giá bạc
                            triệu đang ngày càng nở rộ tại quận 1, 3, Bình Thạnh (Tp.HCM).
                        </p>
                    </div>
                </li>


            </ul>


        </div>
        <div id="prProject" style="display: none;">


            <ul class="group-prd group-4cl group-1row clearfix">

                <li>
                    <div class="image border-6d">
                        <a href="/tin-du-an/cung-nhau-dich-muc-so-thi-nha-mau-2-phong-ngu-tien-nghi-cua-khu-do-thi-vincity-quan-9-ar18227.htm">
                            <img src="https://img.tinbatdongsan.com/2018/10/25/IMTCYxsf/thiet-ke-can-ho-vinc-068c.jpg"
                                 alt="Cùng nhau ‘đích mục sở thị’ nhà mẫu 2 phòng ngủ tiện nghi của khu đô thị vincity quận 9">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tin-du-an/cung-nhau-dich-muc-so-thi-nha-mau-2-phong-ngu-tien-nghi-cua-khu-do-thi-vincity-quan-9-ar18227.htm"
                               title="Cùng nhau ‘đích mục sở thị’ nhà mẫu 2 phòng ngủ tiện nghi của khu đô thị vincity quận 9">
                                Cùng nhau ‘đích mục sở thị’ nhà mẫu 2 phòng ngủ tiện nghi của khu đô thị vincity quận 9
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            25/10/2018
                        </p>
                        <p class="introduce">
                            Vốn là dự án bất động sản đình đám được tập đoàn Vingroup ra mắt vào cuối năm 2016, khu đô
                            thị Vincity quận 9 cùng với vị trí đắc địa, tiện ích bậc nhất,.. đã ‘đốn ...
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tin-du-an/gia-ban-biet-thu-the-k-park-qua-xung-tam-voi-triet-ly-tien-nao-cua-nay-ar18186.htm">
                            <img src="https://img.tinbatdongsan.com/2018/10/20/IMTCYxsf/chung-cu-the-k-park--1fb4.jpeg"
                                 alt="Giá bán biệt thự The K Park quả xứng tầm với triết lý ‘tiền nào của nấy’">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tin-du-an/gia-ban-biet-thu-the-k-park-qua-xung-tam-voi-triet-ly-tien-nao-cua-nay-ar18186.htm"
                               title="Giá bán biệt thự The K Park quả xứng tầm với triết lý ‘tiền nào của nấy’">
                                Giá bán biệt thự The K Park quả xứng tầm với triết lý ‘tiền nào của nấy’
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            20/10/2018
                        </p>
                        <p class="introduce">
                            Nhắc đến hình thức nhà ở villa chắc chắn ai cũng hình dung ra một mức giá ‘trên trời’. Tuy
                            nhiên, những tiện ích mà nó mang lại chắc chắn sẽ khiến bạn thỏa mãn, hài ...
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tin-du-an/trai-nghiem-cuoc-song-tien-ich-dang-cap-3-sao-tai-vincity-quan-9-ar17775.htm">
                            <img src="https://img.tinbatdongsan.com/2018/08/10/IMTCYxsf/vi-tri-du-an-vincity-678d.jpg"
                                 alt="Trải nghiệm cuộc sống tiện ích đẳng cấp 3 sao tại Vincity quận 9">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tin-du-an/trai-nghiem-cuoc-song-tien-ich-dang-cap-3-sao-tai-vincity-quan-9-ar17775.htm"
                               title="Trải nghiệm cuộc sống tiện ích đẳng cấp 3 sao tại Vincity quận 9">
                                Trải nghiệm cuộc sống tiện ích đẳng cấp 3 sao tại Vincity quận 9
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            10/08/2018
                        </p>
                        <p class="introduce">
                            Vincity quận 9 được xây dựng theo tiêu chuẩn căn hộ 3 sao cao cấp, hứa hẹn sẽ đem đến những
                            giây phút hưởng thụ cuộc sống một cách trọn vẹn nhất cho cư dân. Cùng ...
                        </p>
                    </div>
                </li>

                <li>
                    <div class="image border-6d">
                        <a href="/tin-du-an/co-nen-dau-tu-vao-bat-dong-san-quan-9-trong-nam-2019-ar17774.htm">
                            <img src="https://img.tinbatdongsan.com/2018/08/10/IMTCYxsf/toan-canh-vincity-qu-4a51.jpg"
                                 alt="Có nên đầu tư vào bất động sản quận 9 trong năm 2019?">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title fsize-15">
                            <a href="/tin-du-an/co-nen-dau-tu-vao-bat-dong-san-quan-9-trong-nam-2019-ar17774.htm"
                               title="Có nên đầu tư vào bất động sản quận 9 trong năm 2019?">
                                Có nên đầu tư vào bất động sản quận 9 trong năm 2019?
                            </a>
                        </h4>
                        <p class="hint fsize-12">
                            <i class="fa fa-calendar mg-right-5"></i>
                            10/08/2018
                        </p>
                        <p class="introduce">
                            ​Quận 9 là quận sở hữu diện tích lớn nhất ở khu vực phía đông Sài Gòn, cùng với vị trí cửa
                            ngõ của thành phố, nên quận được kỳ vọng rất lớn trở thành trung tâm kinh ...
                        </p>
                    </div>
                </li>


            </ul>

            <div class="text-right mg-top-10">
                <a href="tin-tuc-du-an.htm">
                    <span class="dark-clr text-underline">Xem thêm</span>
                    <i class="fa fa-chevron-circle-right mg-left-5 blue-clr"></i>
                </a>
            </div>

        </div>

    </div>
</div>


@include('index.layout.footer')
</body>
</html>
