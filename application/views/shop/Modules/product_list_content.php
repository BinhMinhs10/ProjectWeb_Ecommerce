<section class="section-61" style="background-color:#f3f3f3">
  <div class="container">
    <div id="titleDisplay">
      <div class="title-section">
  Điện thoại (<span>58</span>)
</div>    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 padding-horizontal-5">

  <div id="ul-dropdown-menu-left" class="ul-dropdown-menu-left" style="display: block;">
    <form id="formFilterDevice" action="/ajax/danh-sach-thiet-bi-loc" method="post">
      <div class="panel-group" id="" role="tablist" aria-multiselectable="true">

      
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading1">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="">
              Loại sản phẩm
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>

        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1" aria-expanded="true">
          <div class="panel-body">
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox1" value="1" class="item-checkbox1">
                <label for="checkbox1" class="css-label1">Smartphone chính hãng</label>
              </div>
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox2" value="9" class="item-checkbox1">
                <label for="checkbox2" class="css-label1">Khuyến mại Smartphone</label>
              </div>
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox3" value="13" class="item-checkbox1">
                <label for="checkbox3" class="css-label1">Điện thoại Viettel</label>
              </div>
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox4" value="15" class="item-checkbox1">
                <label for="checkbox4" class="css-label1">Tablet chính hãng</label>
              </div>
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox5" value="18" class="item-checkbox1">
                <label for="checkbox5" class="css-label1">Wifi 4G</label>
              </div>
                          <div class="item-checkbox">
                <input  type="checkbox" name="checkbox_device_type[]" id="checkbox6" value="37" class="item-checkbox1">
                <label for="checkbox6" class="css-label1">Điện thoại cơ bản</label>
              </div>
                      </div>
        </div>

      </div>
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading2">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse2" aria-expanded="true" aria-controls="collapse2" class="">
              Thương hiệu
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading2" aria-expanded="true">
          <div class="panel-body">
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox7" value="2" class="item-checkbox1"><label for="checkbox7" class="css-label1">Samsung</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox8" value="3" class="item-checkbox1"><label for="checkbox8" class="css-label1">HTC</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox9" value="4" class="item-checkbox1"><label for="checkbox9" class="css-label1">Sony</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox10" value="9" class="item-checkbox1"><label for="checkbox10" class="css-label1">Microsoft</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox11" value="13" class="item-checkbox1"><label for="checkbox11" class="css-label1">Apple</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_brand[]" id="checkbox12" value="25" class="item-checkbox1"><label for="checkbox12" class="css-label1">Oppo</label>
              </div>
                      </div>
        </div>
      </div>
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading3">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse3" aria-expanded="true" aria-controls="collapse3" class="">
              Khoảng giá (đồng)
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading3" aria-expanded="true">
          <div class="panel-body">

            <div class="slider-range" id="slider-range"></div>
            <div class="text-range">
              <input type="text" id="amount" name="price-range" readonly style="border:0; color:#f6931f; font-weight:bold;">
              <input type="hidden" id="amount_field" name="price-range-raw">
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading4">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
              Hệ điều hành
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading4">
          <div class="panel-body">
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_os[]" id="checkbox13" value="1" class="item-checkbox1"><label for="checkbox13" class="css-label1">iOS</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_os[]" id="checkbox14" value="2" class="item-checkbox1"><label for="checkbox14" class="css-label1">Android</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_os[]" id="checkbox15" value="5" class="item-checkbox1"><label for="checkbox15" class="css-label1">Window Phone</label>
              </div>
                      </div>
        </div>
      </div>
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading5">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
              Màn hình
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading5">
          <div class="panel-body">
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_screen_type[]" id="checkbox16" value="0-4" class="item-checkbox1"><label for="checkbox16" class="css-label1">Dưới 4 inches</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_screen_type[]" id="checkbox17" value="4-5" class="item-checkbox1"><label for="checkbox17" class="css-label1">Từ 4 tới 5 inches</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_screen_type[]" id="checkbox18" value="5-6" class="item-checkbox1"><label for="checkbox18" class="css-label1">Từ 5 tới 6 inches</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_screen_type[]" id="checkbox19" value="6-9" class="item-checkbox1"><label for="checkbox19" class="css-label1">Từ 6 tới 9 inches</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_screen_type[]" id="checkbox20" value="9" class="item-checkbox1"><label for="checkbox20" class="css-label1">Trên 9 inches</label>
              </div>
                      </div>
        </div>
      </div>
      <div class="panel panel-menu-left">
        <div class="panel-heading" role="tab" id="heading6">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
              Bộ nhớ trong
              <i class="fa pull-right">+</i>
            </a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading6">
          <div class="panel-body">
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_storage_type[]" id="checkbox21" value="0-8" class="item-checkbox1"><label for="checkbox21" class="css-label1">Dưới 8Gb</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_storage_type[]" id="checkbox22" value="8-16" class="item-checkbox1"><label for="checkbox22" class="css-label1">từ 8Gb tới 16Gb</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_storage_type[]" id="checkbox23" value="16-32" class="item-checkbox1"><label for="checkbox23" class="css-label1">từ 16Gb tới 32Gb</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_storage_type[]" id="checkbox24" value="32-64" class="item-checkbox1"><label for="checkbox24" class="css-label1">từ 32Gb tới 64Gb</label>
              </div>
                          <div class="item-checkbox">
                <input type="checkbox" name="checkbox_storage_type[]" id="checkbox25" value="64" class="item-checkbox1"><label for="checkbox25" class="css-label1">trên 64Gb</label>
              </div>
                      </div>
        </div>
      </div>

<!--      <div class="panel panel-menu-left">-->
<!--        <div class="panel-heading" role="tab" id="heading7">-->
<!--          <h4 class="panel-title">-->
<!--            <a class="collapsed" role="button" data-toggle="collapse" data-parent="" href="#collapse7" aria-expanded="false" aria-controls="collapse7">-->
<!--              Kết nối-->
<!--              <i class="fa pull-right">+</i>-->
<!--            </a>-->
<!--          </h4>-->
<!--        </div>-->
<!--        <div id="collapse7" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading7">-->
<!--          <div class="panel-body">-->
<!--            <div class="panel-body">-->
<!--              --><!--                <div class="item-checkbox">-->
<!--                  <input type="checkbox" name="checkbox_network_type[]" id="checkbox--><!--" value="--><!--" class="item-checkbox1"><label for="checkbox--><!--" class="css-label1">--><!--</label>-->
<!--                </div>-->
<!--              --><!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
    </div>
        </form>
  </div>
  <input id="filterValue" type="hidden" value="">
</div>

<script>
//  $(document).ready(function () {
    $('.item-checkbox1').on('change', function () {
      $('#formFilterDevice').submit();
    });

    $('#amount').on('change', function () {
      $('#formFilterDevice').submit();
    });

    $('#formFilterDevice').on('submit', function (e) {
      e.preventDefault();
      var obj = $(this);
      var countInTitle = $('#titleDisplay span');
      $('#page-num').remove();
      var pageClicked = $('.numb-paging.clicked');
      var listDevice = $('#filterDeviceDisplay');
      var page = pageClicked.attr('page');
      if(page != null) {
        listDevice = pageClicked.parents('.page-container');
        $(this).append('<input type="hidden" id="is-promotion" name="is-promotion" value="' + pageClicked.attr('is-promotion') + '"/>');
        $(this).append('<input type="hidden" id="page-num" name="page-num" value="' + page + '"/>');
      }
      listDevice.css("opacity", "0.7");

      $.ajax({
        url: obj.attr('action'),
        type: obj.attr('method'),
        cache: false,
        data: obj.serialize(),
        success: function (result) {
//          var data = JSON.parse(result);
//          listDevice.html(data.template);
//          title.html(data.title);
          listDevice.html(result);
          countInTitle.html(listDevice.find("#countTotal").html());
          listDevice.css("opacity", "1");
        },
        error: function (request, status, err) {
          listDevice.html('<h4>Không có dữ liệu.</h4>');
          listDevice.css("opacity", "1");
        }
      });
    });
//  }
</script>    <div id="filterDeviceDisplay">
      <!--<div class="page-container">-->
<!--  --><!--</div>-->
<div class="page-container">
    <div id="countTotal"  style="display: none">58</div>
  <div class="col-xs-12 col-sm-9 col-md-9 padding-horizontal-5">
    <div class="row">
<!--      <div class="col-xs-12 col-sm-12 col-md-12 col-xs-12">-->
<!--        <div id="titleDisplay">-->
<!--          --><!--          <hr/>-->
<!--        </div>-->
<!--      </div>-->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro-khuyen-mai-hoa-mang-tra-sau">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2018/05/03/04cdc7c99bd64fa4fe0fba4dda7395a728201743.jpg" alt="Samsung Galaxy J2 Pro (KM Hòa Mạng Trả Sau)">
                <div class="des">
                                      Cấu hình:<br />
                                                                                  • Màn hình 5 inches. Super AMOLED<br />
                                                              • Hệ điều hành: Android 7.1<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Samsung Galaxy J2 Pro (KM Hòa Mạng Trả Sau)                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>1.990.000 đồng</div>
                                      <div><span style="text-decoration:line-through">3.300.000 đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro-khuyen-mai-hoa-mang-tra-sau" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh1"
              id="checkbox_sosanh1" class="css-checkbox">
            <label for="checkbox_sosanh1" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android 7.1" front_camera="8MP" main_camera="5MP" resolution="Chưa cập nhật" screen_size="5 inches. Super AMOLED" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="2600mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro-khuyen-mai">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2018/05/03/df3abdb1f47c291b37e6d06723e4abcbca4c7538.jpg" alt="Samsung Galaxy J2 Pro (Khuyến mại)">
                <div class="des">
                                      Cấu hình:<br />
                                                                                  • Màn hình 5 inches. Super AMOLED<br />
                                                              • Hệ điều hành: Android 7.1<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Samsung Galaxy J2 Pro (Khuyến mại)                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>2.810.000 đồng</div>
                                      <div><span style="text-decoration:line-through">3.300.000 đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro-khuyen-mai" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh2"
              id="checkbox_sosanh2" class="css-checkbox">
            <label for="checkbox_sosanh2" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android 7.1" front_camera="8MP" main_camera="5MP" resolution="Chưa cập nhật" screen_size="5 inches. Super AMOLED" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="2600mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2018/05/03/1e98b36f3c9674aba44b0be8b7a50cf916b90655.jpg" alt="Samsung Galaxy J2 Pro">
                <div class="des">
                                      Cấu hình:<br />
                                                                                  • Màn hình 5 inches. Super AMOLED<br />
                                                              • Hệ điều hành: Android 7.1<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Samsung Galaxy J2 Pro                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>3.300.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/samsung-galaxy-j2-pro" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh3"
              id="checkbox_sosanh3" class="css-checkbox">
            <label for="checkbox_sosanh3" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android 7.1" front_camera="8MP" main_camera="5MP" resolution="Chưa cập nhật" screen_size="5 inches. Super AMOLED" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="2600mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/v6216">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2018/01/12/68b9033259df938521f3a2601bbb06b1ef540826.png" alt="Điện thoại người già V6216">
                <div class="des">
                                      Cấu hình:<br />
                                                                                  • Màn hình 1.77<br />
                                                                          </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Điện thoại người già V6216                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>470.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/v6216" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh4"
              id="checkbox_sosanh4" class="css-checkbox">
            <label for="checkbox_sosanh4" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Chưa cập nhật" front_camera="Chưa cập nhật" main_camera="VGA (0.3 MP)" resolution="128 x 160 pixels" screen_size="1.77" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="Li-Ion, 800 mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/wifi-router-4g-d6608">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2017/12/21/2cf2188a88f8912db6c86900fa7d507ce27256c0.jpg" alt="Wifi Router 4G D6608">
                <div class="des">
                                      Cấu hình:<br />
                      • Đang cập nhật
                                  </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Wifi Router 4G D6608                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>950.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/wifi-router-4g-d6608" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh5"
              id="checkbox_sosanh5" class="css-checkbox">
            <label for="checkbox_sosanh5" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Chưa cập nhật" front_camera="Chưa cập nhật" main_camera="Chưa cập nhật" resolution="Chưa cập nhật" screen_size="Chưa cập nhật" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="Không có pin" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/samsung-galaxy-s8">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/partner/device/2017/11/18/7e963c56cc51c7df75d8138645ef3a41.jpg" alt="Samsung Galaxy S8 (Supper combo 4G)">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Exynos 8895 8 nhân 64-bit<br />
                                                              • Bộ nhớ trong: 64GB + RAM 4GB LPDDR4<br />
                                                              • Màn hình 5.8&amp;quot;, Super AMOLED, 2K (1440 x 2960 Pixels)<br />
                                                              • Hệ điều hành: Android<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Samsung Galaxy S8 (Supper combo 4G)                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>15.990.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/samsung-galaxy-s8" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh6"
              id="checkbox_sosanh6" class="css-checkbox">
            <label for="checkbox_sosanh6" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android" front_camera="8MP AF (F1.7)" main_camera="Công nghệ Dual Pixel 12MP (F1.7)" resolution="Chưa cập nhật" screen_size="5.8&amp;quot;, Super AMOLED, 2K (1440 x 2960 Pixels)" system_chip="Exynos 8895 8 nhân 64-bit" system_memory="4GB LPDDR4" battery="Li-Ion, 3000 mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/samsung-galaxy-note-8">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/partner/device/2017/11/18/257abbd848b08f1429336864cc2ec05b.jpg" alt="Samsung Galaxy Note 8">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Exynos 8895 8 nhân 64-bit (4 nhân 2.3 GHz và 4 nhân 1.7 GHz)<br />
                                                              • Bộ nhớ trong: 64 Gb + RAM 6 GB<br />
                                                              • Màn hình Super AMOLED, 6.3&amp;quot;, 2K (1440 x 2960 Pixels)<br />
                                                              • Hệ điều hành: Android<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Samsung Galaxy Note 8                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>22.490.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/samsung-galaxy-note-8" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh7"
              id="checkbox_sosanh7" class="css-checkbox">
            <label for="checkbox_sosanh7" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android" front_camera="2 camera 12 MP" main_camera="8 MP" resolution="Chưa cập nhật" screen_size="Super AMOLED, 6.3&amp;quot;, 2K (1440 x 2960 Pixels)" system_chip="Exynos 8895 8 nhân 64-bit (4 nhân 2.3 GHz và 4 nhân 1.7 GHz)" system_memory="6 GB" battery="Li-Ion 3300 mAh, Sạc pin nhanh, Sạc pin không dây, Siêu tiết kiệm pin" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/iphone-8-64-gb">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2017/11/18/ff45bf7e318d341c6f1ae7b686f01dbb63552d7a.jpg" alt="iPhone 8 64 GB">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11<br />
                                                              • Bộ nhớ trong: 64 GB + RAM 2 GB<br />
                                                              • Màn hình 4.7&amp;quot; LED-backlit IPS LCD HD, 1334 x 750 pixel<br />
                                                              • Hệ điều hành: iOS<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  iPhone 8 64 GB                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>19.990.000 đồng</div>
                                      <div><span style="text-decoration:line-through">20.990.000 đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/iphone-8-64-gb" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh8"
              id="checkbox_sosanh8" class="css-checkbox">
            <label for="checkbox_sosanh8" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="iOS" front_camera="7 MP, khẩu độ F/2.2" main_camera="12.0 MP, khẩu độ F/1.8, chống rung quang học" resolution="Chưa cập nhật" screen_size="4.7&amp;quot; LED-backlit IPS LCD HD, 1334 x 750 pixel" system_chip="Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11" system_memory="2 GB" battery="14h thoại, 12h dùng mạng, 13h Video, 40h nghe nhạc." ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/iphone-8-plus-64gb">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2017/11/18/58269bd048d583f131e1554f9896683cb9e2d638.jpg" alt="iPhone 8 Plus 64GB">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11<br />
                                                              • Bộ nhớ trong: 64 GB + RAM 3 GB<br />
                                                              • Màn hình 5.5&amp;quot; LED-backlit IPS LCD Full HD 1920 x 1080 pixel<br />
                                                              • Hệ điều hành: Android<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  iPhone 8 Plus 64GB                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>22.990.000 đồng</div>
                                      <div><span style="text-decoration:line-through">23.990.000 đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/iphone-8-plus-64gb" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh9"
              id="checkbox_sosanh9" class="css-checkbox">
            <label for="checkbox_sosanh9" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android" front_camera="7 MP, khẩu độ F/2.2" main_camera="Camera kép góc rộng 12.0 MP, có thể zoom quang học 2 lần, chống rung quang học" resolution="Chưa cập nhật" screen_size="5.5&amp;quot; LED-backlit IPS LCD Full HD 1920 x 1080 pixel" system_chip="Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11" system_memory="3 GB" battery="21h thoại, 13h dùng mạng, 14h Video, 60h nghe nhạc." ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/viettel-v6216i">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2018/01/12/a2fc279ba7fd9c3e78cf5a9d9eedfed0cf5c8085.png" alt="Viettel V6216i">
                <div class="des">
                                      Cấu hình:<br />
                                                                                  • Màn hình 1.77 inches<br />
                                                                          </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Viettel V6216i                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>470.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/viettel-v6216i" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh10"
              id="checkbox_sosanh10" class="css-checkbox">
            <label for="checkbox_sosanh10" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Chưa cập nhật" front_camera="Không" main_camera="0.3 MP" resolution="128x160 pixels" screen_size="1.77 inches" system_chip="Chưa cập nhật" system_memory="Chưa cập nhật" battery="1000 mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/dien-thoai-v8801">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2017/04/20/f5b02c03f2b5c34c2a090e44ad3cdb450c338d30.png" alt="Điện thoại V8801">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Quad core 1.0Ghz<br />
                                                                                  • Màn hình 5 Inches LCD FWVGA IPS<br />
                                                              • Hệ điều hành: Android 6.0<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  Điện thoại V8801                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>1.350.000 đồng</div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/dien-thoai-v8801" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh11"
              id="checkbox_sosanh11" class="css-checkbox">
            <label for="checkbox_sosanh11" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="Android 6.0" front_camera="2 MP" main_camera="5 MP" resolution="Chưa cập nhật" screen_size="5 Inches LCD FWVGA IPS" system_chip="Quad core 1.0Ghz" system_memory="Chưa cập nhật" battery="2000 mAh" ></div>
          </div>
        </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-xs-4 mobile_half_width">
          <a href="/chi-tiet-thiet-bi/iphone-8-256-gb">
            <div class="item-01">
              <div class="images">
                <img src="https://shop.viettel.vn/uploads/images/device/2017/11/18/7a8d569f172c4316ff29b0e9a59c8904c44b45a9.jpg" alt="iPhone 8 256 GB">
                <div class="des">
                                      Cấu hình:<br />
                                          • Vi xử lý: Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11<br />
                                                              • Bộ nhớ trong: 256 GB + RAM 2 GB<br />
                                                              • Màn hình 4.7&amp;quot; LED-backlit IPS LCD HD, 1334 x 750 pixel<br />
                                                              • Hệ điều hành: iOS<br />
                                                      </div>
              </div>
              <div class="content-item">
                <div class="dienthoai_title center-text">
                  iPhone 8 256 GB                </div>
                <div class="dienthoai_price text2 center-text">
                                    <div>22.790.000 đồng</div>
                                      <div><span style="text-decoration:line-through">25.790.000 đồng</span></div>
                                  </div>
                <div class="text-center">
                  <a href="/chi-tiet-thiet-bi/iphone-8-256-gb" class="xem_button">Xem</a>
                </div>
              </div>
            </div>
          </a>
          <div class="check-item-1">
            <input type="checkbox" name="checkbox_sosanh12"
              id="checkbox_sosanh12" class="css-checkbox">
            <label for="checkbox_sosanh12" class="css-label-right2">chọn để so sánh</label>
            <div class="compare-att"
              os_name="iOS" front_camera="7 MP, khẩu độ F/2.2" main_camera="12.0 MP, khẩu độ F/1.8, chống rung quang học" resolution="Chưa cập nhật" screen_size="4.7&amp;quot; LED-backlit IPS LCD HD, 1334 x 750 pixel" system_chip="Chip A11 Bionic 64, 6 nhân cùng bộ xử lý chuyển động M11" system_memory="2 GB" battery="14h thoại, 12h dùng mạng, 13h Video, 40h nghe nhạc" ></div>
          </div>
        </div>
      
      <div class="clearfix"></div>
        <div class="paging-bottom">
    
                  <a href="javascript:void(0)" class="numb-paging active" page="1">1</a>
                        <a href="javascript:void(0)" class="numb-paging" page="2">2</a>
                        <a href="javascript:void(0)" class="numb-paging" page="3">3</a>
                        <a href="javascript:void(0)" class="numb-paging" page="4">4</a>
                        <a href="javascript:void(0)" class="numb-paging" page="5">5</a>
          
          <a href="javascript:void(0)" class="numb-paging" page="2">Trang sau ></a>
      </div>

<script>
  $('.numb-paging').not('.active').on('click', function () {
    $(this).toggleClass('clicked');
    if($('#mobileFilter').is(":visible")) {
      $('#formMobileFilterDevice').submit();
    } else {
      $('#formFilterDevice').submit();
    }
  });
</script>

<!--<div class="paging-bottom">-->
<!--  <a href="#" class="numb-paging active">1</a>-->
<!--  <a href="#" class="numb-paging">2</a>-->
<!--  <a href="#" class="numb-paging">3</a>-->
<!--  <a href="#" class="numb-paging">4</a>-->
<!--  <a href="#" class="numb-paging">5</a>-->
<!--</div>-->
          </div>
  </div>


<!--<span id="remaining-items---><!--" data-value="--><!--"></span>-->
<!--<div id="load-more-here" class="center-text margin-vertical-30">-->
<!--  --><!--      <div id="load-more-item" data-last-page="--><!--"-->
<!--           data-per-page="--><!--" data-form-id="search-device-form" class="btn-secsimso">-->
<!--        Xem thêm <span id="remaining-counter">(--><!--)</span> <i class="fa fa-chevron-circle-down"></i></div>-->
<!--    --><!--</div>--></div>    </div>
    
<section id="compare2" class="section-25 wa-compare2-destop">
  <div id="close-compare" class="close-small"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"/></div>
  <div class="line-section"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="col-md-6 item-compare">

          <div id="btn-sosanh2" class="btn-sosanh">So sánh sản phẩm  <i class="fa fa-chevron-circle-right"></i></div>
          <div class="text4">Tính năng</div>
                      <div class="text3">Hệ điều hành</div>
                      <div class="text3">Camera trước</div>
                      <div class="text3">Camera sau</div>
                      <div class="text3">Độ phân giải</div>
                      <div class="text3">Màn hình</div>
                      <div class="text3">Vi xử lý</div>
                      <div class="text3">Bộ nhớ trong</div>
                      <div class="text3">PIN</div>
                  </div>

        <div class="col-md-3 item-compare item-compare-1">
          <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 1"/></div>
          <div class="text1"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
          
        </div>
        <div class="col-md-3 item-compare item-compare-2">
          <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 2"/></div>
          <div class="text1"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
                      <div class="text2"></div>
          
        </div>
    </div>


  </div>
</section>    <div class="wa-compare2-mobile">
  <section class="section-25" id="compare2-mobile">
    <div class="close-small" id="close-compare-mobile"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"></div>
    <div class="line-section"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 item-compare-mobile">
          <a class="btn-sosanh" id="btn-sosanh2-mobile" href="#modalCompareDevice" data-toggle="modal">So sánh <i class="fa fa-chevron-circle-right"></i></a>
          <a class="text-compare-mobile" href="#"><span id="compare-counter">1</span> thiết bị được thêm <br>(Tối đa <span>2</span> thiết bị)</a>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
</div>

<div class="wa-compare2-destop">
  <section id="compare2" class="section-25">
    <div id="close-compare" class="close-small"><img src="https://shop.viettel.vn/img/close_small.png" alt="close"></div>
    <div class="line-section"></div>
    <div class="container">

      <div class="row">

        <div class="col-md-12">
          <div class="col-md-6 item-compare">

            <div id="btn-sosanh2" class="btn-sosanh">So sánh sản phẩm  <i class="fa fa-chevron-circle-right"></i></div>
            <div class="text4">Tính năng</div>
                          <div class="text3">Hệ điều hành</div>
                          <div class="text3">Camera trước</div>
                          <div class="text3">Camera sau</div>
                          <div class="text3">Độ phân giải</div>
                          <div class="text3">Màn hình</div>
                          <div class="text3">Vi xử lý</div>
                          <div class="text3">Bộ nhớ trong</div>
                          <div class="text3">PIN</div>
                      </div>

          <div class="col-md-3 item-compare item-compare-first">
            <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 1"></div>
            <div class="text1"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                      </div>
          <div class="col-md-3 item-compare item-compare-second">
            <div class="images"><img src="https://shop.viettel.vn/img/sec25_img_1.png" alt="ảnh 2"></div>
            <div class="text1"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                          <div class="text2"></div>
                      </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
</div>

<div class="modal fade" id="modalCompareDevice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header popup_header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:#ffffff">&times;</span>
        </button>
        <div class="fontclass_regular">So sánh sản phẩm</div>
      </div>
      <div class="modal-body" style="padding-left:30px;padding-right:30px">
        <div class="row">
          <div class="col-xs-12">
            <table class="table-striped col-xs-12 table-compare">
              <tr>
                <td style="width: 50%"><h6><span id="title-compare-first"></span></h6></td>
                <td style="width: 50%"><h6><span id="title-compare-second"></span></h6></td>
              </tr>
                              <tr>
                  <td style="width: 50%"><b>Hệ điều hành</b><br/><span id="attr-device1-os_name"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-os_name"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Camera trước</b><br/><span id="attr-device1-front_camera"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-front_camera"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Camera sau</b><br/><span id="attr-device1-main_camera"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-main_camera"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Độ phân giải</b><br/><span id="attr-device1-resolution"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-resolution"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Màn hình</b><br/><span id="attr-device1-screen_size"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-screen_size"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Vi xử lý</b><br/><span id="attr-device1-system_chip"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-system_chip"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>Bộ nhớ trong</b><br/><span id="attr-device1-system_memory"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-system_memory"></span></td>
                </tr>
                              <tr>
                  <td style="width: 50%"><b>PIN</b><br/><span id="attr-device1-battery"></span></td>
                  <td style="width: 50%"><br/><span id="attr-device2-battery"></span></td>
                </tr>
                          </table>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>  </div>
</section>