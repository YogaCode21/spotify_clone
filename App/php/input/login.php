<link rel="stylesheet" href="../../css/output.css">
<div class="login-view flex items-center justify-center ">
    <div class=" flex items-center flex-row gap-[100px] h-screen max-[990px]:flex-col">
        <div class="login_input-container text-center min-w-[400px]">
            <h1 class="text-4xl font-medium mb-1">Hello Again!</h1>
            <p class="text-lg">Welcome back, you been missed!</p>
            <form action="../view/dashboard.php?page=obat" class="input-container flex flex-col items-end gap-4 mt-9 mb-9 text-end" method="post">
                <input  autocomplete="off" type="text" name="username" placeholder="Enter Username" class="pr-7 pl-7 pt-4 pb-4 w-full bg-[#F4F0F0] text-black rounded-2xl">
                <input type="password" name="password" placeholder="Password" class="pr-7 pl-7 pt-4 pb-4 w-full bg-[#F4F0F0] text-white rounded-2xl">
                <a href="#" class="w-fit">Forgot Password?</a>
                <input type="submit" value="Sign In" class="w-full bg-[#B40001] text-white pr-7 pl-7 pt-4 pb-4 rounded-2xl text-xl font-bold">
            </form>
            <p class="mt-1 text-center">doesn't have an account? <a href="./register.php" class="text-[#B40001] font-bold">Register Now</a></p>
        </div>
        <div class="login_img-container w-[400px]">
            <img src="../../../image/girl_pink_vest.svg" alt="girl-pink-vest" class="w-96">
        </div>
    </div>
</div>
<div class="texture">
    <div class="element-1 bg-[#B40001] w-52 h-52 rounded-full absolute top-0 right-0 blur-[200px] -z-50 opacity-70"></div>
    <div class="element-1 bg-[#B40001] w-52 h-52 rounded-full absolute bottom-0 left-0 blur-[200px] -z-50 opacity-70"></div>
</div>