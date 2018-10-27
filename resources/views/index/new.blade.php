<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">

    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/font-ops.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/basis.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all"
          href="{{asset('Scripts/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/general.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/style.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/post.css')}}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/firefox.css')}}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('Styles/font-rbt.min.css')}}"/>
    <link href="{{asset('Styles/scrollbar.css')}}" rel="stylesheet"/>
    <link href="{{asset('Styles/Responsive.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('Scripts/jquery.selectbox-0.2/css/jquery.selectbox.css')}}" rel="stylesheet"/>
    <link href="{{asset('Styles/jquery-ui.min.css')}}" rel="stylesheet"/>

    <script type="text/javascript" src="{{asset('Scripts/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Scripts/jquery-ui-1.8.24.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Scripts/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('Scripts/Register.js')}}"></script>
    <script src="{{asset('Styles/scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('Scripts/Common.js?v=123')}}"></script>



</head>
<body>

<div class="bg-blue-20 height105">

    <div class="main">

        <div class="row clearfix">
            <div class="col-gr-100per">

                <div class="folder-title clearfix">
                    <div class="pull-left" style="width:57%;">
                        <h4 id="titleName"
                            class="fsize-22 fweight-bold text-uppercase pd-top-35 pd-bottom-35 blue-clr no-mg">Tin Tức</h4>
                    </div>
                    <div class="pull-right mg-top-5">
                        <div class="form-search pd-top-25 pd-bottom-25">
                            <input id="txtSearchArticle" maxlength="50" value="-Tìm tin tức, lời khuyên, tư vấn-"
                                   class="search-project form-control pull-left"/>
                            <a class="pull-right btn-search-project" id="btnSearchArticles"
                               onclick="return searchArticles()">
                                <i class="far fa-search"
                                   style="text-align: center; line-height: 40px; margin-left: 20px; color: white !important;"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<div id="wrapper">

    <div class="main">

        <div class="row clearfix">


            <div class="col-gr-75per">
                <div class="none cateNameNews">
                    <span id="MainContent_ArticleList_lblCateName">Tin tức</span>
                </div>

                <ul class="group-prd group-project group-1cl clearfix">

                    <li>
                        <div class="image">
                            <a href="#"
                               title="Diễn biến cho thuê căn hộ quận 1 vẫn đang ở mức cao trào. Tại sao?">
                                <img src="https://img.tinbatdongsan.com/2018/10/27/IMTCYxsf/mua-ban-nha-dat-tai--6d19.jpg">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="#"
                                   title="Diễn biến cho thuê căn hộ quận 1 vẫn đang ở mức cao trào. Tại sao?">Diễn
                                    biến cho thuê căn hộ quận 1 vẫn đang ở mức cao trào. Tại sao?</a>
                            </h4>
                            <div class="date-create fsize-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;27/10/2018
                            </div>
                            <div class="description">
                                <p>Đúng như tên gọi, quận Nhất năng động tại đất Sài thành vẫn luôn là ‘địa bàn’ dẫn
                                    đầu trên thị trường bất động sản nhộn nhịp. Nhà riêng, nhà mặt phố, shophouse
                                    quận 1,.. chỉ là một vài danh mục đầu tư với mê lực hấp dẫn khủng khiếp đã làm
                                    nên tên tuổi của phân khúc thị ...</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="#"
                               title="Tp.HCM: Kiến nghị hệ số điều chỉnh giá đất năm 2019 tăng 5-8,33%">
                                <img src="https://img.tinbatdongsan.com/2018/10/27/20181027085454895624-9a2e.jpg">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="#"
                                   title="Tp.HCM: Kiến nghị hệ số điều chỉnh giá đất năm 2019 tăng 5-8,33%">Tp.HCM:
                                    Kiến nghị hệ số điều chỉnh giá đất năm 2019 tăng 5-8,33%</a>
                            </h4>
                            <div class="date-create fsize-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;27/10/2018
                            </div>
                            <div class="description">
                                <p>Hiệp hội Bất động sản Tp.HCM (HoREA) cho rằng, so với giá trên thị trường, giá
                                    đất trong Bảng giá đất chỉ đạt khoảng 30-50%. Cơ chế xây dựng "Khung giá đất -
                                    Bảng giá đất" như quy định hiện hành không thể đảm bảo được nguyên tắc giá đất
                                    trong Bảng giá đất phù hợp với ...</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="#"
                               title="Phê duyệt tuyến đường " đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà Nội">
                            <img src="https://img.tinbatdongsan.com/2018/10/26/20181026134357042124-e96e.jpg">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="#"
                                   title="Phê duyệt tuyến đường " đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà
                                Nội">Phê duyệt tuyến đường "đắt nhất hành tinh" hơn 7.200 tỷ đồng tại Hà Nội</a>
                            </h4>
                            <div class="date-create fsize-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;26/10/2018
                            </div>
                            <div class="description">
                                <p>Phó Chủ tịch UBND TP. Hà Nội Nguyễn Thế Hùng vừa phê duyệt Dự án tuyến đường vành
                                    đai 1 đoạn Hoàng Cầu - Voi Phục (giai đoạn 1). Với chiều dài 2,2km, đây được xem
                                    là tuyến đường "đắt kỷ lục" khi chi phí GPMB lên đến hơn 5.800 tỷ đồng trong
                                    tổng kinh phí hơn 7.200 tỷ ...</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="#"
                               title="Đà Nẵng: Các hộ bị giải tỏa đã bố trí nhà chung cư phải trả tiền thuê nhà từ 1/1/2020">
                                <img src="https://img.tinbatdongsan.com/2018/10/26/Z9BcC3fq/chung-cu-dbbc.jpg">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="#"
                                   title="Đà Nẵng: Các hộ bị giải tỏa đã bố trí nhà chung cư phải trả tiền thuê nhà từ 1/1/2020">Đà
                                    Nẵng: Các hộ bị giải tỏa đã bố trí nhà chung cư phải trả tiền thuê nhà từ
                                    1/1/2020</a>
                            </h4>
                            <div class="date-create fsize-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;26/10/2018
                            </div>
                            <div class="description">
                                <p>Với Công văn số 8099/UBND-SXD ngày 22/10/2018, UBND TP. Đà Nẵng vừa có ý kiến về
                                    việc bố trí cho thuê căn hộ chung cư với các hộ giải tỏa.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="image">
                            <a href="#"
                               title="Đề xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô">
                                <img src="https://img.tinbatdongsan.com/2018/10/26/Z9BcC3fq/nha-cao-tang-8e2e.jpg">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title">
                                <a href="#"
                                   title="Đề xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô">Đề
                                    xuất không cho người ngoại tỉnh mua nhà cao tầng tại vùng nội đô</a>
                            </h4>
                            <div class="date-create fsize-12">
                                <i class="fa fa-calendar-o"></i>&nbsp;26/10/2018
                            </div>
                            <div class="description">
                                <p>Đó là đề xuất được đưa ra bởi Chủ tịch Tổng hội Xây dựng Việt Nam trong hội thảo
                                    khoa học Quản lý phát triển công trình cao tầng khu vực nội đô lịch sử mở rộng
                                    TP. Hà Nội tổ chức sáng ngày 25/10.</p>
                            </div>
                        </div>
                    </li>

                </ul>

                <div class="mg-bottom-30 clearfix">

                    <ul class="paging pull-right">
                        <a href='#' title='P1'>
                            <div class='style-pager-row-selected' align='center'>1</div>
                        </a><a href='#' title='P2'>
                            <div class='style-pager-row' align='center'>2</div>
                        </a><a href='#' title='P3'>
                            <div class='style-pager-row' align='center'>3</div>
                        </a><a href='#' title='P4'>
                            <div class='style-pager-row' align='center'>4</div>
                        </a><a href='#' title='P5'>
                            <div class='style-pager-row' align='center'>5</div>
                        </a><a href='#' title='P2'>
                            <div class='style-pager-button-next-first-last' align='center'>Trang sau</div>
                        </a><a href='#' title='P943'>
                            <div class='style-pager-button-next-first-last' align='center'>Trang cuối</div>
                        </a><span id="MainContent_ArticleList_ProductsPager"></span>
                    </ul>


                </div>

            </div>

            <div class="col-gr-25per">
                <div id="MainContent_MostRead_ArticleTop" class="articleTop">
                    <div class="mg-bottom-30 border-gray-100 radius">

                        <div class="mg-left-10 mg-right-10 pd-bottom-15 pd-top-15 border-bottom-gray-100 text-center">
                            <h4 class="current-col-title fsize-18 fweight-700 text-uppercase"
                                style="color:#185785;">tin nhiều người đọc
                            </h4>
                        </div>

                        <div class="pd-left-10 pd-right-10">

                            <ul class="group-prd group-horPrd group-1cl clearfix">

                                <li>
                                    <div class="image">
                                        <a href="#"
                                           title="Đất Xanh thỏa thuận hợp tác bảo lãnh nhà ở với ngân hàng">
                                            <img id="mostReadImg"
                                                 src="http://img.tinbatdongsan.com/2015/07/13/Z9BcC3fq/datxanh-4021.jpg"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="fsize-14 no-mg" style="height:55px;overflow:hidden">
                                            <a class="cut-text-4"
                                               href="#"
                                               title="Đất Xanh thỏa thuận hợp tác bảo lãnh nhà ở với ngân hàng">Đất
                                                Xanh thỏa thuận hợp tác bảo lãnh nhà ở với ngân hàng</a>
                                        </h4>
                                    </div>
                                </li>

                                <li>
                                    <div class="image">
                                        <a href="#"
                                           title="Nha Trang: Đất nền " hút" khách">
                                        <img id="mostReadImg"
                                             src="http://img.tinbatdongsan.com/2015/03/05/0Ln61R5F/ca1970232-bdba.jpg"
                                             alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4 class="fsize-14 no-mg" style="height:55px;overflow:hidden">
                                            <a class="cut-text-4"
                                               href="#"
                                               title="Nha Trang: Đất nền " hút" khách">Nha Trang: Đất nền "hút"
                                            khách</a>
                                        </h4>
                                    </div>
                                </li>

                            </ul>

                        </div>


                    </div>
                </div>


                <div class="block-foot-link pd-top-30 pd-bottom-40">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTin-B%25E1%25BA%25A5t-%25C4%2590%25E1%25BB%2599ng-S%25E1%25BA%25A3n-1350951281594366%2F&tabs=timeline&width=263&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=282156201795763"
                            width="263" height="500" style="border: none; overflow: hidden" scrolling="no"
                            frameborder="0" allowtransparency="true"></iframe>
                </div>

            </div>

        </div>

    </div>

</div>
</body>
</html>
