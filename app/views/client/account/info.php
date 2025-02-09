<div class="container" style="margin-top: 113px; width: 1200px;">
    <div class="row">
        <div class="col-lg-3">
            <div class="side-2 col-12">
                <style>
                    .router-tag-a {
                      color: #111;
                      font-weight: 400;
                      text-decoration: none;
                    }
                    .router-tag-a:hover {
                        text-decoration: none;
                    }
                </style>
                <div class="user-sidebar">
                    <div class="head-box userinfo">
                        <p>Tài khoản của</p>
                        <p class="username">Nguyễn Thái Sơn</p>
                    </div>
                    <div class="head-body user-sidelink">
                        <ul>
                            <li><a class="router-tag-a acitve" href="/account/info">Thông tin tài khoản</a></li>
                            <li><a class="router-tag-a" href="/account/address">Sổ địa chỉ</a></li>
                            <li><a class="router-tag-a" href="#">Lịch sử mua hàng</a></li>
                            <li><a class="router-tag-a" href="/account/changepw">Đổi mật khẩu</a></li>
                            <li><a class="router-tag-a" href="/account/voucher">Voucher của tôi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="center-2">
                <style>
                    @media only screen and (max-width: 768px) {
                        .grid-report-item {
                            text-align: right !important;
                        }

                        #general-info {
                            padding-right: 0px !important;
                        }

                        .edit-wrapper .td-edit {
                            text-align: right;
                            width: 20% !important;
                        }
                    }

                    #main-title-custom {
                        color: #006a31;
                        font-weight: 700;
                        text-transform: uppercase;
                    }

                    @media only screen and (min-width: 769px) {
                        #general-info {
                            text-align: left;
                            padding-left: 0px;
                        }
                    }
                </style>
                <div class="col-lg-12">
                    <h2 class="main-title">Thông tin chung</h2>
                    <div class="address-table">
                      <div class="row">
                        <p class="col-lg-9" id="main-title-custom">Thông tin tài khoản</p>
                        <a class="col-lg-3 d-flex justify-content-end" href="/account/info?pageView=CustomerInfo">Chỉnh sửa</a>
                    </div>                  
                        <table>
                            <tbody>
                                <tr>
                                    <td class="td-title">Họ và tên</td>
                                    <td colspan="2">Nguyễn Thái Sơn</td>
                                </tr>
                                <tr>
                                    <td class="td-title">Số điện thoại</td>
                                    <td colspan="2">0818280559</td>
                                </tr>
                                <tr>
                                    <td class="td-title">Email</td>
                                    <td colspan="2">tysonzatop2810@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="history-table" style="padding: 15px;">
                      <p id="main-title-custom">ĐƠN HÀNG GẦN ĐÂY NHẤT</p>
                      <table style="margin-top: 15px;">
                          <thead>
                              <tr>
                                  <th class="code">Mã</th>
                                  <th class="code">Sản phẩm</th>
                                  <th class="code">Ngày mua</th>
                                  <th class="code">Tổng tiền</th>
                                  <th class="code">Trạng thái</th>
                              </tr>
                          </thead>
                          <tbody></tbody>
                      </table>
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>    