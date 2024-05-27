<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in & Sign up Form</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('storage/css/cssLogin.css') }}" />
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <img src="{{ asset('storage/logo.png') }}" style="width: 30%" alt="">
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" id="email_signin" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="psw_signin" autocomplete="new-password" />
                    </div>
                    <button type="button" class="btn solid" id="signin-button">Masuk</button>
                    
                </form>
                <form action="#" class="sign-up-form">
                    <img src="{{ asset('storage/logo.png') }}" style="width: 30%" alt="">
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama" id="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="No HP" id="nohp" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" id="email_signup" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" id="psw_signup" autocomplete="new-password" />
                    </div>
                    <button type="button" class="btn" id="signup-button">Daftar</button>
                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum Punya Akun?</h3>
                    <p>Mari Bergabung Bersama Kami Untuk Kenyamanan Bersama</p>
                    <button class="btn transparent" id="sign-up-btn">Daftar</button>
                </div>
                <img src="{{ asset('storage/img/log.svg') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Puny Akun?</h3>
                    <p>Mari Masuk dan Kita Eksplorasi Bersama.</p>
                    <button class="btn transparent" id="sign-in-btn">Masuk</button>
                </div>
                <img src="{{ asset('storage/img/register.svg') }}" class="image" alt="" />
            </div>
        </div>
    </div>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
        import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";
        import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-database.js";
        import { get } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-database.js";


        const firebaseConfig = {
            apiKey: "AIzaSyBUTHsxJwwS5k1wG8POzvPU-IFAoD5gWGg",
            authDomain: "floodguard-indobot.firebaseapp.com",
            databaseURL: "https://floodguard-indobot-default-rtdb.firebaseio.com",
            projectId: "floodguard-indobot",
            storageBucket: "floodguard-indobot.appspot.com",
            messagingSenderId: "949006118133",
            appId: "1:949006118133:web:3268ae8033baf150abe9bc",
            measurementId: "G-68Y36P9WCX"
        };

        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);
        const database = getDatabase(app);

        document.getElementById("signin-button").addEventListener("click", () => {
            const emailSignin = document.getElementById("email_signin").value;
            const passwordSignin = document.getElementById("psw_signin").value;
            
            signInWithEmailAndPassword(auth, emailSignin, passwordSignin)
                .then((userCredential) => {
                    const user = userCredential.user;
                    checkUserRole(user.uid);
                })
                .catch((error) => {
                    const errorMessage = error.message;
                    console.error("Error during sign-in:", errorMessage); // Use console.error for debugging
                    alert(errorMessage);
                });
        });

        document.getElementById("signup-button").addEventListener("click", () => {
            const name = document.getElementById("name").value;
            const nohp = document.getElementById("nohp").value;
            const emailSignup = document.getElementById("email_signup").value;
            const passwordSignup = document.getElementById("psw_signup").value;

            createUserWithEmailAndPassword(auth, emailSignup, passwordSignup)
                .then((userCredential) => {
                    const user = userCredential.user;
                    // Set default role to 'user'
                    return set(ref(database, "users/" + user.uid), {
                        name: name,
                        nohp: nohp,
                        email: emailSignup,
                        password: passwordSignup,
                        role: "user" // Default role set to 'user'
                    });
                })
                .then(() => {
                    alert("user telah sukses dibuat");
                    location.href = "/login";
                })
                .catch((error) => {
                    const errorMessage = error.message;
                    alert(errorMessage);
                });
        });

        function checkUserRole(userId) {
            const userRef = ref(database, "users/" + userId);
            get(userRef).then((snapshot) => {
                if (snapshot.exists()) {
                    const userData = snapshot.val();
                    const role = userData.role;
                    if (role === "admin") {
                        location.href = "/dashboard";
                    } else {
                        alert("Anda tidak memiliki akses ke halaman dashboard.");
                    }
                } else {
                    alert("Data pengguna tidak ditemukan.");
                }
            }).catch((error) => {
                console.error("Error getting user data:", error);
            });
        }

        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>
</body>
</html>
