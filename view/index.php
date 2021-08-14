<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Picfy</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../scss/style.css" />
    <link rel="icon" href="../pic/logo.png" />
</head>

<body>
    <?php require "../config/picfy_manage/login_stoppreback.php"?>

    <header>
        <h3>Picfy</h3>
        <nav>
            <ul>
                <li><a href="#">About me</a></li>
            </ul>
            <ul>
                <li><a href="#">Blog</a></li>
            </ul>

            <div class="buttons">
                <button class="login" data-toggle="modal" data-target="#myModal">Đăng nhập</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="signin">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img class="logo-form-signin" src="../pic/logo.png">
                                    <h class="text-form">chào mừng bạn đến với</h>
                                    <h class="text-form" style="padding: 155px; margin-top: -10rem;color: #FF9A9E;font-weight: 800;">Picfy </h>
                                    <div class="input">
                                        <div id="login_error"></div>
                                        <p id="response"></p>
                                        <form method="post" action="index.php" id="form_login">
                                            <input type="text" required="required" id="email_signin" name="email_signin" value="" placeholder="email"><br>

                                            <input type="password" required="required" id="password_signin" name="passwrod_signin" value="" placeholder="password">

                                            <a href="#">Quên mật khẩu ?</a>

                                            <input type="button" value="Đăng nhập" onclick="login()" style="margin-top: 3rem; color: white; font-weight:600; background-color: #FF9A9E;">
                                        </form>
                                    </div>
                                    <!-- <span class="_8jan">Hoặc</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="signup" data-toggle="modal" data-target="#myModa-signup">Đăng kí</button>
                <div class="modal fade" id="myModa-signup" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="signin">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <span>Picfy</span>
                                    <h class="text-form">Đăng ký để tham gia cùng</h>
                                    <div class="input">

                                        <form method="post" id="form_signup">
                                            <input type="text" style="margin-top: 2.5rem" id="first_name" name="first_name" value="" placeholder="First name">
                                            <span class="error" require="required" for="first_name"></span>
                                            <input type="text" style="margin-top: 1rem" id="last_name" name="last_name" value="" placeholder="Last name"><br>
                                            <span class="error" require="required" for="last_name"></span>

                                            <input type="date" style="margin-top: 2rem" name="birthday" id="birthday" value="" placeholder="birthday"><br>
                                            <span class="error" require="required" for="birthday"></span>

                                            <div class="gender">
                                                <input type="radio" id="male" name="gender" value="Nam" checked="checked">
                                                <label for="male" style="position: sticky;margin-top: 1.2rem; margin-left: 9rem;">Male</label><br>
                                                <input type="radio" id="female" name="gender" value="Nữ">
                                                <label for="female" style="position: absolute; margin-top: -2.5rem; margin-left: 17rem;">Female</label><br>
                                            </div>

                                            <input type="text" id="email" name="email" value="" placeholder="email"><br>
                                            <p id="emailMsg" style="color:rgb(220,53,69);"></p>
                                            <span class="error" require="required" for="email"></span>

                                            <input type="password" required="required" id="password" minlength="6" name="password" value="" placeholder="password">
                                            <span class="error" require="required" for="password"></span>

                                            <button type="button" id="sign_up" onclick="signup()">Đăng ký</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="heading">
        <span class="text" style="font-weight: 600;">Xem ý tưởng tiếp theo</span>

        <div class="wrapper">
            <div class="offset">
                <h2 class="text animate-before" style="color: red;">ý tưởng bữa tối cuối tuần</h2>
            </div>
            <div class="offset">
                <h2 class="text animate-before" style="color: pink;">ý tưởng thời trang</h2>
            </div>
            <div class="offset">
                <h2 class="text animate-before" style="color: green;">ý tưởng cây xanh</h2>
            </div>
            <div class="offset">
                <h2 class="text animate-before" style="color: blue;">ý tưởng động vật</h2>
            </div>

            <button class="scroll" type="submit">
                <svg class="gUZ erh U9O kVc" height="24" width="24" viewBox="0 0 24 24" aria-label="Arrow" role="img">
                    <path d="M12 19.5L.66 8.29c-.88-.86-.88-2.27 0-3.14.88-.87 2.3-.87 3.18 0L12 13.21l8.16-8.06c.88-.87 2.3-.87 3.18 0 .88.87.88 2.28 0 3.14L12 19.5z"></path>
                </svg>
            </button>

            <button class="up-scroll" style="opacity: 1; z-index: 3; top: 48px; position: absolute; margin-top: 55rem; cursor: pointer; left: calc(50% - 25px);">
                <svg class="gUZ erh U9O kVc" viewBox="0 0 24 24" aria-label="Arrow" role="img">
                    <path d="M21.75 19.5c-.58 0-1.15-.22-1.59-.65L12 10.79l-8.16 8.06c-.88.87-2.3.87-3.18 0a2.21 2.21 0 0 1 0-3.15L12 4.5l11.34 11.2c.88.87.88 2.28 0 3.15-.44.43-1.01.65-1.59.65"></path>
                </svg>
            </button>

        </div>
    </div>

    <div class="gradient" id="gradient" style="height: 180px; max-height: 20%; width: 100%; position:absolute; margin-top:35rem ;background-image: linear-gradient(rgba(255, 255, 255, 0), rgb(255, 255, 255)); opacity: 1;"></div>

    <div class="bottom">
        <div class="background-bottom"></div>
        <span class="wel">Đăng nhập để nhận <br>
            thêm nhiều ý tưởng</span>

        <div class="login_bottom" style="z-index: 4; left: 107rem; top: 84rem; position: absolute;  height: 671px;  width: 347px;  background-color: white;  border-radius: 25px;">
            <div class="input">
                <p class="wel_top">Chào mừng bạn đến với</p><br>
                <p class="wel_bot">Picfy</p>
                <p id="response_bottom"></p>
                <form method="post" action="index.php" id="form_bottom">
                    <input type="text" id="email_bottom" name="email_bottom" value="" placeholder="email"><br>
                    <span for="email_bottom" required="required" class="error"></span>

                    <input type="password" style="margin-top: 1.2rem" id="password_bottom" name="password_bottom" value="" placeholder="password">
                    <span for="password_bottom" required="required" class="error"></span>

                    <a href="#">Quên mật khẩu ?</a>
                    <input type="button" value="Đăng nhập" onclick="loginBot()" style="margin-top: 3rem; color: white; font-weight:600; background-color: #FF9A9E;">
                    <button type="button" id="signup_bottom" data-toggle="modal" data-target="#myModa-signup">bạn chưa là thành viên? nhấp vào đây để đăng ký</button>
                </form>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid">
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/f4/dc/58/f4dc58f3bddf1c5b5249511820246df8.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/99/de/cc/99decc49535cb2c98adb7f36bd0511eb.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/40/f0/ba/40f0ba88336d1186fdef847bfe823ccf.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/b0/7f/d5/b07fd5e0ce5f83664f6e53b358c00561.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/77/78/09/777809dcf4d17810d1ff9b87cae561ca.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/75/f9/d6/75f9d6a23d9497425c8f945aad40afd7.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/73/78/ea/7378eae895c60ddb73738aa8c2a29cf3.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/9b/cb/6f/9bcb6fa64b113cf673480fdc1cf2ae51.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/c8/38/d3/c838d3f2f45a2c62ea67e32653f53ad2.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/c8/38/d3/c838d3f2f45a2c62ea67e32653f53ad2.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/c8/38/d3/c838d3f2f45a2c62ea67e32653f53ad2.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/c8/38/d3/c838d3f2f45a2c62ea67e32653f53ad2.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/2d/da/23/2dda23e47ee1e81ea0ef2f904d6a0edf.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/2d/da/23/2dda23e47ee1e81ea0ef2f904d6a0edf.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/f3/7f/89/f37f8919953eb7327286f364cb346d46.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/f3/7f/89/f37f8919953eb7327286f364cb346d46.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/f3/7f/89/f37f8919953eb7327286f364cb346d46.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/1e/b5/3a/1eb53a9e573e713b9078683605577e50.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/42/8a/22/428a22aaad78ffd1d35253506855012f.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/e1/6d/6f/e16d6f83bc85932c435f844b03e642d1.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/7e/42/21/7e4221926a2e91940cc4430ab7327cc6.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/44/44/82/444482042242284dd0dfa64924c6a8d3.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/94/85/0a/94850a9d835f37ae33b4872dd62c9a22.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/11/63/53/11635301b7b53262c743fbfa423a73cb.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/11/63/53/11635301b7b53262c743fbfa423a73cb.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/a0/c7/6f/a0c76f7687e8c6e08009c8a728fb3464.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/a0/c7/6f/a0c76f7687e8c6e08009c8a728fb3464.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/56/ab/f9/56abf99161b3dd83061cf7ba06653c8a.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/e8/08/48/e8084850fb0137085347b14009835231.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/2e/4b/4a/2e4b4a36239fd46900c3db3d0195ad3f.jpg"></div>
            </div>
            <div class="column animate-before">
                <div class="item"><img src="https://i.pinimg.com/236x/7e/42/21/7e4221926a2e91940cc4430ab7327cc6.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/11/63/53/11635301b7b53262c743fbfa423a73cb.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/94/85/0a/94850a9d835f37ae33b4872dd62c9a22.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/2d/da/23/2dda23e47ee1e81ea0ef2f904d6a0edf.jpg"></div>
                <div class="item"><img src="https://i.pinimg.com/236x/2e/4b/4a/2e4b4a36239fd46900c3db3d0195ad3f.jpg"></div>
            </div>
        </div>

        <div class="grid">
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>

        <div class="grid">
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>

        <div class="grid">
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
            <div class="column animate-before">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>
    </div>

    <script src="magic.js"></script>
    <script src="../js/api.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" type="text/javascript"></script>

</body>

</html>