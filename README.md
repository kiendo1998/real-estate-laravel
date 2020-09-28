## HOALACLAND
HOALACLAND là  trang web mua bán bất động sản trong khu vực khu công nghệ cao Hòa Lạc - Hà Nội, bao gồm đất nền, nhà đất, các dự án chung cư,...

### Frameworks
1. Laravel 5.6
2. Materialize icon
3. Admin BSB Material Design

### Chức năng của admin
1. Quản lý Tag
2. Quản lý Thể loại
3. Quản lý bài Post
4. Quản lý điểm nổi bật
5. Quản lý Bất động sản
6. Quản lý Slide
7. Quản lý đánh giá khách hàng
8. Quản lý Bộ sưu tập ảnh
9. Cài đặt
    1. Thông tin cá nhân
    2. Tin nhắn
    3. Đổi mật khẩu
    4. Cài đặt chung

### Chức năng của nhà môi giới
1. Quản lý bất động sản (CRUD)
2. Cài đặt
    1. Thông tin cá nhân
    2. Tin nhắn
    3. Đổi mật khẩu

### chức năng của User
1. Bình luận bài viết, bất động sản
2. Đánh giá bất động sản
3. Cài đặt
    1. Thông tin cá nhân
    2. Gửi tin nhắn cho nhà môi giới
    3. Đổi mật khẩu


### Các bước cài đặt
01. `git clone https://github.com/se-nuce/bai-tap-lon-pmnm-va-tkweb-kiendonuce`
02. `cd bai-tap-lon-pmnm-va-tkweb-kiendonuce`
03. `composer install`
04. `cp .env.example .env`
05. `php artisan key:generate`
06. Tạo cơ sở dữ liệu hoalacland trong phpMyAdmin
06. `php artisan migrate`
07. `php artisan db:seed`
08. `php artisan storage:link`
09. `php artisan serve`

#### Tài khoản (lần lượt theo quyền admin, nhà môi giới và user)
01. 
    Email: `admin@admin.com` 
    Password: `123456`
02. 
    Email: `agent@agent.com` 
    Password: `123456`
03. 
    Email: `user@user.com` 
    Password: `123456`


### ảnh demo
Home <img src="https://github.com/se-nuce/bai-tap-lon-pmnm-va-tkweb-kiendonuce/blob/master/public/demo/home.png">

Giao diện admin <img src="https://github.com/se-nuce/bai-tap-lon-pmnm-va-tkweb-kiendonuce/blob/master/public/demo/admin.png">

Giao diện agent <img src="https://github.com/se-nuce/bai-tap-lon-pmnm-va-tkweb-kiendonuce/blob/master/public/demo/agent.png">

Giao diện user <img src="https://github.com/se-nuce/bai-tap-lon-pmnm-va-tkweb-kiendonuce/blob/master/public/demo/user.png">
