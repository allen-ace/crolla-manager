<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
    {{-- Sidebar --}}
    <div class="sidebar">
        <div class="sidebar-logo-container">
            <img class="crolla-logo" src="{{ asset('Crolla/Logo/crolla-loginlogo.png') }}" alt="Crolla Logo">
        </div>
        <a class="Active" href="Dashboard">
            <i class="fa-solid fa-house"></i>
            Dashboard</a>
        <a class="#tasks" href="My Tasks">
            <i class="fa-solid fa-list-check"></i>
            My Tasks</a>
        <a class="#calendar" href="Calendar">
            <i class="fa-regular fa-calendar"></i>
            Calendar</a>
        <a class="#threads" href="Threads">
            <i class="fa-solid fa-message"></i>
            Threads</a>
        <a class="#settings" href="Settings">
            <i class="fa-solid fa-gear"></i>
            Settings</a>
    </div>
    {--     --}}

</body>
</html>