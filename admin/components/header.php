<?php
// Nếu chưa có tiêu đề thì đặt mặc định
if (!isset($pageTitle)) {
    $pageTitle = "Dashboard - Admin Panel";
}
?>
<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $pageTitle; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Font chữ chung cho toàn trang */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .sidebar {
            background: linear-gradient(180deg, #0f172a, #0b1220);
            min-height: 100vh;
            /* Cố định sidebar nếu muốn nội dung bên phải cuộn */
            /* position: sticky; top: 0; */
        }

        .brand {
            color: #fff;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .muted {
            color: #94a3b8;
        }

        .card-custom {
            background: linear-gradient(180deg, #ffffff, #f8fafc);
        }

        /* CSS cho Loading animation */
        .fade-in {
            animation: fadeIn 0.4s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="d-flex">