<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Đại học Bạc Liêu - Quản lý nhân sự</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f4f8; color: #333; min-height: 100vh; display: flex; flex-direction: column; animation: fadeIn 1s ease-out; }
        /* Header */
        header { 
            position: sticky; 
            top: 0; 
            z-index: 1000; 
            display: flex; 
            align-items: center; 
            background: #b3e7ba; 
            color: white; 
            padding: 10px 20px; 
            height: 90px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-out;
        }
        header img { height: 70px; margin-right: 20px; }
        .header-info { flex-grow: 1; }
        .td1 { font-size: 36px; margin-bottom: 5px; color: #386e4d; }
        .header-info p { font-size: 16px; }
        .header-title { font-weight: bold; font-size: 20px; }
        /* Layout chính */
        .main { display: flex; flex: 1; }
        /* Sidebar */
        .sidebar { 
            position: fixed; 
            top: 90px; 
            left: 0; 
            width: 260px; 
            height: calc(100vh - 90px); 
            background: #adf3b8; 
            padding: 20px; 
            border-right: 2px solid #5bff92; 
            overflow-y: auto; 
            box-shadow: 3px 0 5px rgba(0, 0, 0, 0.05);
            animation: fadeInLeft 1s ease-out;
        }
        .sidebar h3 { font-size: 18px; margin-bottom: 10px; color: #386e4d; border-bottom: 2px solid #3e4d46; padding-bottom: 5px; }
        .sidebar a { 
            display: block; 
            padding: 10px 15px; 
            margin: 8px 0; 
            text-decoration: none; 
            color: #000000; 
            background-color: #edf4ff; 
            border-radius: 8px; 
            transition: all 0.3s ease; 
            font-weight: 500; 
            transform: translateX(-20px);
            opacity: 0;
        }
        .sidebar a:hover { 
            background: #c0f3cd; 
            color: #256d37; 
            transform: translateX(5px); 
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            animation: slideInRight 0.3s ease-out forwards;
        }
        .sidebar a.show { opacity: 1; transform: translateX(0); animation: fadeInUp 0.5s ease-out forwards; }
        /* Nội dung */
        .content { 
            flex: 1; 
            padding: 30px; 
            background: white; 
            margin-left: 260px;
            animation: fadeIn 1s ease-out;
        }
        .content h2 { font-size: 26px; margin-bottom: 15px; color: #0f331a; }
        .content h3 { font-size: 22px; margin-top: 20px; color: #0f331a; }
        .content p { margin: 10px 0; line-height: 1.7; }
        .content ul { margin: 15px 0 15px 20px; list-style: disc; }
        .content img { width: 100%; max-width: 600px; margin: 20px auto; display: block; border-radius: 8px; }
        /* Footer */
        footer { background: #afe0c5; color: white; text-align: center; padding: 12px; font-size: 14px; }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-100%); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        /* CSS cho hiệu ứng fadeInUp */
        .content {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }

        /* CSS cho Sidebar khi thu gọn */
        .sidebar.collapsed {
            width: 50px;
            transition: width 0.3s ease;
        }

        .sidebar.collapsed a {
            display: none;
        }
    </style>
</head>

<body>

<header>
    <img style="width: 200px;" src="https://dean1665.vn/uploads/school/dh-bac-lieu.jpg" alt="Logo Trường">
    <div style="display: flex;padding-left: 50px;" class="header-info">
        <img src="https://blu.edu.vn/Content/themes/101/images/logo.png?v=2025.04.23" alt="logo mới">
        <h1 class="td1">TRƯỜNG ĐẠI HỌC BẠC LIÊU</h1>
    </div>
    <div style="font-size: 20px;" class="td1">
        <B>QUẢN LÝ NHÂN SỰ</B>
    </div>
</header>

<div class="main">
    <nav class="sidebar">
        <a href="https://blu.edu.vn/" target="_blank" class="home-button">🏠 Trang chủ</a>

        <h3>Đơn vị trực thuộc</h3>
        <a href="?page=khoa_ketcntt">Khoa KT&CN</a>
        <a href="?page=khoa_supham">Khoa Sư phạm</a>
        <a href="?page=khoa_nnns">Khoa NN&NS</a>
        <a href="?page=khoa_kinhte">Khoa Kinh tế và Luật</a>

        <h3>Hồ sơ nhân viên</h3>
        <a href="?page=danhsach_nv">Danh sách</a>
        <a href="?page=xemhoso_nv">Xem hồ sơ</a>
        <a href="?page=themhoso_nv">Thêm hồ sơ</a>
        <a href="?page=suahoso_nv">Sửa hồ sơ</a>
        <a href="?page=xoahoso_nv">Xóa hồ sơ</a>

        <h3>Quản lý tiền lương</h3>
        <a href="?page=bangluong">Bảng lương</a>
        <a href="?page=capnhat_hoso">Cập nhật hồ sơ</a>
        <a href="?page=timkiem_luong">Tìm kiếm</a>
        <a href="?page=tinhluong">Tính lương</a>
        <a href="?page=tinhthuong">Tính thưởng</a>
    </nav>

    <section class="content">
        <h2>Giới thiệu Trường Đại học Bạc Liêu</h2>
        <h3>Tên tiếng Anh: BAC LIEU UNIVERSITY</h3>
        <h3>Tên viết tắt: ĐHBL - BLU</h3>

        <p>Trường Đại học Bạc Liêu (ĐHBL) được thành lập theo Quyết định số 1558/QĐ-TTg ngày 24/11/2006 của Thủ tướng Chính phủ, là cơ sở giáo dục đại học công lập trực thuộc UBND tỉnh Bạc Liêu và chịu sự quản lý Nhà nước về giáo dục của Bộ Giáo dục và Đào tạo.</p>

        <img src="https://media-cdn-v2.laodong.vn/storage/newsportal/2023/3/7/1155109/Dai-Hoc-Bac-Lieu.jpg" alt="Hình ảnh Trường Đại học Bạc Liêu">

        <h3>II. Sứ mệnh và Tầm nhìn</h3>
        <p><strong>Sứ mệnh:</strong> Đào tạo nguồn nhân lực chất lượng cao, nghiên cứu khoa học, ứng dụng và chuyển giao công nghệ phục vụ sự nghiệp phát triển kinh tế - xã hội của tỉnh Bạc Liêu và khu vực đồng bằng sông Cửu Long.</p>

        <p><strong>Tầm nhìn:</strong> Trở thành một trong những cơ sở giáo dục đại học có uy tín và chất lượng cao ở khu vực đồng bằng sông Cửu Long vào năm 2030.</p>
    </section>
</div>

<footer>
    <p>Trường Đại học Bạc Liêu - Tổ chức giáo dục với sứ mệnh phát triển cộng đồng và hội nhập quốc tế.</p>
</footer>

<script>
    // Đoạn mã để thêm hiệu ứng cho các liên kết trong sidebar
    document.addEventListener("DOMContentLoaded", function() {
        const links = document.querySelectorAll('.sidebar a');
        links.forEach((link, index) => {
            setTimeout(() => {
                link.classList.add('show');
            }, index * 200); // Delay hiệu ứng cho mỗi liên kết
        });
    });

    // Đoạn mã để mở rộng hoặc thu gọn menu sidebar
    const sidebarToggle = document.createElement('button');
    sidebarToggle.textContent = 'Toggle Menu';
    sidebarToggle.style.position = 'fixed';
    sidebarToggle.style.top = '20px';
    sidebarToggle.style.left = '20px';
    sidebarToggle.style.backgroundColor = '#fff';
    sidebarToggle.style.border = '1px solid #333';
    sidebarToggle.style.padding = '10px 15px';
    sidebarToggle.style.cursor = 'pointer';
    document.body.appendChild(sidebarToggle);

    sidebarToggle.addEventListener('click', () => {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('collapsed');
        if (sidebar.classList.contains('collapsed')) {
            sidebar.style.width = '50px';
        } else {
            sidebar.style.width = '260px';
        }
    });
</script>

</body>
</html>
