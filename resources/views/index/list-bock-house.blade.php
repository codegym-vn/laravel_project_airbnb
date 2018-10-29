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
        <input name="ctl00$SearchContent$ProductTextSearch$txtTextSearch" type="text" maxlength="100" id="txtTextSearch"
               class="form-control ui-autocomplete-input" autocomplete="off"
               onfocus="if (this.value == &#39;Nhập từ khóa&#39;) (this.value=&#39;&#39;)"
               onblur="if (this.value == &#39;&#39;) (this.value=&#39;Nhập từ khóa&#39;)" role="textbox"
               aria-autocomplete="list" aria-haspopup="true"/>
        <input type="hidden" name="ctl00$SearchContent$ProductTextSearch$hddCateSearch" id="hddCateSearch" value="49"/>
        <a id="lbtSearchTop" class="submit" onclick="searchClick()"><i class="fa fa-search"
                                                                       style="top: 10px; position: absolute;"></i></a>
    </div>
    <div class="bg-blue-20 pd-top-20 pd-bottom-20 h90 body-title-list">
    </div>
</div>
<div id="wrapper">
    <div class="main">
        <div class="row clearfix">
            <div class="bg-blue-20 pd-top-20 pd-bottom-20 filter-productlist">
                <div class="main">
                    <div class="row clearfix">
                        <div class="col-gr-75per">
                                <div class="pull-left title-search-product" style="">
                                    <h1 class="fsize-22 fweight-700 text-uppercase blue-clr no-mg"
                                        style="white-space: nowrap; text-overflow: ellipsis; width: 560px; overflow: hidden;">
                                        Nhà đất cho thuê tại Việt Nam
                                    </h1>
                                    <div class="none">

                                    </div>
                                    <p class="no-mg">
                                        Có <span class='blue-clr'>{{ count($houses) }}</span> bất động sản.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-gr-75per">

                <ul class="group-prd group-3cl clearfix">
                    @foreach($houses as $house)
                        <li>
                            <div class="image h155">
                                <a id="MainContent_ProductSearchResult_rpProductList_hplAvatar_3"
                                   title="Cho thuê nhà riêng tại Đường Nguyễn Lương Bằng, Đống Đa, Hà Nội diện tích 75m2 giá 27 Tr..."
                                   href="/cho-thue-nha-rieng-duong-nguyen-luong-bang-1-phuong-hang-bot/cho-thue-nha-rieng-tai-duong-nguyen-luong-bang-dong-da-ha-noi-dien-tich-75m2-gia-27-trieuthang-pr12662917.htm"><img
                                            id="MainContent_ProductSearchResult_rpProductList_imgAvatar_3"
                                            class="img-list-product"
                                            src="https://img.tinbatdongsan.com/crop/263x173/2018/10/29/20181029110417-8576.jpg"/></a>
                            </div>

                            <div class="content">
                                <h4 class="title lh-16 h50 mg-bottom-5">
                                    <a id="hplTitle"
                                       title="Cho thuê nhà riêng tại Đường Nguyễn Lương Bằng, Đống Đa, Hà Nội diện tích 75m2 giá 27 Tr..."
                                       href="/cho-thue-nha-rieng-duong-nguyen-luong-bang-1-phuong-hang-bot/cho-thue-nha-rieng-tai-duong-nguyen-luong-bang-dong-da-ha-noi-dien-tich-75m2-gia-27-trieuthang-pr12662917.htm">
                                        {{ $house->name }}
                                    </a>
                                </h4>

                                <p class="fsize-13 dblue-clr text-ellipsis mg-bottom-6">
                                    <i class="fa fa-map-marker hint fsize-14 mg-right-5"></i>
                                    {{ $house->address->address }}
                                </p>
                                <div class="info clearfix">
                                    <div class="pull-left w--100 mg-bottom-5"
                                         style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                        <i class='fa fa-tag hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr">
                                    {{ number_format($house->price) }} Triệu
                                </span>
                                    </div>
                                    <div class="pull-left w--100">
                                        <i class='fa fa-arrows-alt hint mg-right-5'></i>
                                        <span class="fweight-700 green-clr">
                                            @if($house->status == 0 )
                                                Chưa cho thuê
                                            @else
                                                Dã cho thuê
                                            @endif
                                        </span>
                                    </div>
                                    <a id="hplView" title="Cần cho thuê căn hộ chung cư Sunrise City khu North, Quận 7"
                                       class="none"
                                       href="/cho-thue-can-ho-chung-cu-duong-nguyen-huu-tho-phuong-tan-hung-14/can-cho-thue-can-ho-chung-cu-sunrise-city-khu-north-quan-7-pr12659076.htm">Xem
                                        thêm</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mg-bottom-30 clearfix">
                    {{ $houses->links() }}
                </div>

            </div>
            <div class="col-gr-25per">
                <div class="group-advance-search style-col-search mg-bottom-30">

                    <ul class="tabs-search home-search clearfix">
                        <li id="ban"><a onclick="ChangeType(38);">Bán</a></li>
                        <li id="chothue"><a onclick="ChangeType(49);">Cho thuê</a></li>
                    </ul>

                    <div class="search-content listProductSearch">
                        <ul class="filter clearfix" style="height: 300px;">
                            <li class="none">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddType" id="hddType"
                                       value="49"/>
                                <select id="cboType" onchange="ChangeLoaigiaodich($(this).val());">
                                    <option value="-1">Chọn BĐS</option>
                                    <option value="38">BĐS Bán</option>
                                    <option value="49">BĐS Cho Thuê</option>
                                </select>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <input type="hidden" name="ctl00$MainContent$BoxSearch$hddCate" id="hddCate"
                                           value="-1"/>
                                    <select id="cboCate" onchange="ChangeValue('Cate', $(this).val());"
                                            class="form-control">
                                        <option value="-1">Loại nhà đất</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <input type="hidden" name="ctl00$MainContent$BoxSearch$hddCity" id="hddCity"
                                           value="-1"/>
                                    <select class="form-control" id="cboCity" onchange="ChangeCity($(this).val())">
                                        <option value="-1">Tỉnh/Thành Phố</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <input type="hidden" name="ctl00$MainContent$BoxSearch$hddDistrict" id="hddDistrict"
                                           value="-1"/>
                                    <select id="cboDistrict" class="form-control"
                                            onchange="ChangeQuanhuyen($(this).val())">
                                        <option value="-1">Quận/Huyện</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <input type="hidden" name="ctl00$MainContent$BoxSearch$hddArea" id="hddArea"
                                           value="-1"/>
                                    <select id="cboArea" class="form-control"
                                            onchange="ChangeValue('Area', $(this).val());">
                                        <option value="-1">Diện tích</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="custom-select">
                                    <input type="hidden" name="ctl00$MainContent$BoxSearch$hddPrice" id="hddPrice"
                                           value="-1"/>
                                    <select id="cboPrice" class="form-control"
                                            onchange="ChangeValue('Price', $(this).val());">
                                        <option value="-1">Mức giá</option>
                                    </select>
                                </div>
                            </li>
                            <li class="none advance-search">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddProject" id="hddProject"
                                       value="-1"/>
                                <select id="cboProject" onchange="ChangeValue('Project', $(this).val());">
                                    <option value="-1">Dự án</option>
                                </select>
                            </li>
                            <li class="none advance-search">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddWard" id="hddWard"
                                       value="-1"/>
                                <select id="cboWard" onchange="ChangeValue('Ward', $(this).val());">
                                    <option value="-1">Phường/Xã</option>
                                </select>
                            </li>
                            <li class="none advance-search">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddStreet" id="hddStreet"
                                       value="-1"/>
                                <select id="cboStreet" onchange="ChangeValue('Street', $(this).val());">
                                    <option value="-1">Đường/Phố</option>
                                </select>
                            </li>
                            <li class="none advance-search">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddRoom" id="hddRoom"
                                       value="-1"/>
                                <select id="cboRoom" onchange="ChangeValue('Room', $(this).val());">
                                    <option value="-1">Phòng ngủ</option>
                                </select>
                            </li>
                            <li class="none advance-search">
                                <input type="hidden" name="ctl00$MainContent$BoxSearch$hddDirection" id="hddDirection"
                                       value="-1"/>
                                <select id="cboDirection" onchange="ChangeValue('Direction', $(this).val());">
                                    <option value="-1">Hướng nhà</option>
                                </select>
                            </li>

                            <li>
                                <a id="btnSearch" class="btn bg-green full-width fweight-bold"
                                   href="javascript:__doPostBack(&#39;ctl00$MainContent$BoxSearch$btnSearch&#39;,&#39;&#39;)">
                                    Tìm kiếm
                                </a>
                            </li>
                        </ul>
                        <div class="text-center">
                            <a id="searchAdvance" class="white-clr text-underline fsize-13 ">Tìm nâng cao</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@include('index.layout.footer')
</body>
</html>
