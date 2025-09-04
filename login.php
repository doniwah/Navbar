    <?php
    session_start();
    include "db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $conn->query("SELECT * FROM users WHERE email='$email'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['user'] = $row['email'];
                header("Location: index.php");
                exit();
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "Username tidak ditemukan!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
    </head>

    <body>
        <section class="flex flex-col md:flex-row h-screen items-center">

            <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
                <img src="images/bg.jpg" alt="" class="w-full h-full object-cover">
            </div>

            <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
            flex items-center justify-center">

                <div class="w-full h-100">

                    <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>
                    <?php
                    if (!empty($_SESSION['success'])) {
                        echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
                        unset($_SESSION['success']);
                    }
                    if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>";
                    ?>
                    <form class="mt-6" method="POST">
                        <div>
                            <label class="block text-gray-700">Email Address</label>
                            <input type="email" name="email" id="" placeholder="Enter Email Address"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                autofocus autocomplete required>
                        </div>

                        <div class="mt-4">
                            <label class="block text-gray-700">Password</label>
                            <input type="password" name="password" id="" placeholder="Enter Password" minlength="6"
                                class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                    focus:bg-white focus:outline-none" required>
                        </div>

                        <div class="text-right mt-2">
                            <a href="#"
                                class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot
                                Password?</a>
                        </div>

                        <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Log In</button>
                    </form>

                    <hr class="my-6 border-gray-300 w-full">
                    <p class="mt-8">
                        Belum punya akun?
                        <a href="register.php" class="text-blue-500 hover:text-blue-700 font-semibold">
                            Buat akun
                        </a>
                    </p>
                </div>

            </div>

        </section>


    </body>

    </html>