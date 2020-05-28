@extends('frontend.layout.layout')
@section('title','Danh sách sản phẩm')
@section('main')
@include('frontend.layout.include.block-title-image')
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate fadeInUp ftco-animated">
                <h2 class="mb-3">Những trái hoa quả tốt cho sức khỏe</h2>
                <p>

                </p>
                <div class="full-description"><strong>


                    </strong>
                    <p></p>
                    <p><strong>Mô tả chi tiết:</strong></p>
                    <p>Chà là tên khoa học là Phoenix Dactylifera, một giống cây thân cọ ưa nước, cho quả chín già màu
                        đỏ nhạt, có nơi có quả đen kết thành từng chùm.</p>
                    <p>Chà là khô được sản xuất bằng công nghệ sấy …. Chà là tươi được cắt nguyên cành , làm sạch sau đó
                        cho vào hệ thống sấy khô bằng điện, đóng gói bằng dây chuyền tự động đảm bảo vệ sinh.<br></p>
                    <p>Trong chà là khô có chứa chất xơ, giúp hỗ trợ tiêu hóa, điều trị các bệnh đường ruột. <br> Ngoài
                        ra trong chà là cũng chứa vitamin và khoáng chất, giúp tăng sức đề kháng cho cơ thể. Trong chà
                        là khô cũng chứa nhiều chất chống oxy hóa giúp ngăn ngừa lão hóa, giảm nếp nhăn. Đây cũng là
                        thực phẩm được các bác sĩ khuyên dùng cho mẹ bầu.</p>
                    <p><strong>Hướng dẫn bảo quản:</strong> Bảo quản trong túi hoặc hộp, cách ly với không khí, để nơi
                        khô ráo thoáng mát, tránh ánh nắng mặt trời.</p>
                    <p>Món salad trái cây đầy màu sắc này là lựa chọn lý tưởng khi bạn thèm một món vừa ngọt vừa thanh
                        mát. Những quả chà là thái nhỏ thêm một chút vị ngọt cho món ăn, hạnh nhân thì sẽ giúp món salad
                        thêm giòn. Bạn dùng công thức sau có thể nấu phần ăn cho 4 người.</p>
                    <p><img src="https://file.hstatic.net/1000384235/file/tac-dung-cua-qua-cha-la-2-e1550735303188_0e595c36cdcb489b862df63dedcf56d3_grande.jpeg"
                            data-mce-src="https://file.hstatic.net/1000384235/file/tac-dung-cua-qua-cha-la-2-e1550735303188_0e595c36cdcb489b862df63dedcf56d3_grande.jpeg"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            data-mce-style="display: block; margin-left: auto; margin-right: auto;"></p>
                    <p><strong>Nguyên liệu</strong></p>
                    <ul>
                        <li>Khoảng 5mg dầu dừa đã làm chảy</li>
                        <li>5ml mật cây thùa (si rô agave)</li>
                        <li>1,25g quế</li>
                        <li>Muối</li>
                        <li>25g hạnh nhân chưa qua chế biến</li>
                        <li>4 – 6 quả cam tùy theo kích cỡ quả</li>
                        <li>4 quả chà là tươi thái lát mỏng</li>
                        <li>5mg bạc hà thái sợi</li>
                    </ul>
                    <p><strong>Cách thực hiện</strong></p>
                    <p>– Làm nóng lò ở nhiệt độ khoảng 160°C.</p>
                    <p>– Bạn hãy trộn dầu dừa, mật cây thùa, quế và một ít muối trong một chén nhỏ.</p>
                    <p>– Bỏ hạnh nhân vào bát và trộn để hỗn hợp trên bao đều hạnh nhân.</p>
                    <p>– Trải hạnh nhân lên tấm lót nướng rồi bỏ vào lò nướng. Bạn nhớ đảo hạnh nhân một hoặc hai lần
                        cho đến khi nướng được 10 phút. Bạn để hạnh nhân nguội bớt sau khi nướng.</p>
                    <p>– Cắt hai đầu quả cam rồi lọc bỏ vỏ. Sau đó, bạn tiếp tục cắt lát quả cam và bỏ hạt.</p>
                    <p>– Sắp xếp các lát cam trên đĩa rồi xếp chà là, hạnh nhân và bạc hà lên trên.</p>
                    <p>– Thưởng thức món ăn.</p>

                </div>

                <p></p>


                @include('frontend.layout.include.blog.block-comment-blog')
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate fadeInUp ftco-animated">
                @include('frontend.layout.include.blog.block-search-blog')
                @include('frontend.layout.include.blog.block-category-blog')
                @include('frontend.layout.include.blog.block-post-new-blog')
                @include('frontend.layout.include.blog.block-tag-blog')


                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Giới thiệu</h3>
                    <p>Trong thực vật học, quả (phương ngữ miền Bắc) hoặc trái (phương ngữ miền Nam) là một phần của
                        những loại thực vật có hoa, chuyển hóa từ những mô riêng biệt của hoa, có thể có một hoặc nhiều
                        bầu nhụy và trong một số trường hợp thì là mô phụ</p>
                </div>
            </div>

        </div>
    </div>
</section>
@stop
