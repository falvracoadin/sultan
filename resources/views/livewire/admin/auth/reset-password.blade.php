<div>
    @section('css')
    <style wire:ignore>
        body,
        html {
            align-items: center;
            background-color: #d3e4cd;
            display: flex;
            font-family: "Roboto";
            font-size: 10px;
            height: 100%;
            justify-content: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        svg {
            position: absolute;
            top: -4000px;
            left: -4000px;
        }

        #gooey-button {
            padding: 1rem;
            font-size: 2rem;
            border: none;
            color: #fef5ed;
            filter: url("#gooey");
            position: relative;
            background-color: #99a799;
        }

        #gooey-button:focus {
            outline: none;
        }

        #gooey-button .bubbles {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        #gooey-button .bubbles .bubble {
            background-color: #adc2a9;
            border-radius: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            z-index: -1;
        }

        #gooey-button .bubbles .bubble:nth-child(1) {
            left: 79px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-1 3.02s infinite;
            animation: move-1 3.02s infinite;
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        #gooey-button .bubbles .bubble:nth-child(2) {
            left: 32px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-2 3.04s infinite;
            animation: move-2 3.04s infinite;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        #gooey-button .bubbles .bubble:nth-child(3) {
            left: 45px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-3 3.06s infinite;
            animation: move-3 3.06s infinite;
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        #gooey-button .bubbles .bubble:nth-child(4) {
            left: 38px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-4 3.08s infinite;
            animation: move-4 3.08s infinite;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        #gooey-button .bubbles .bubble:nth-child(5) {
            left: 15px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-5 3.1s infinite;
            animation: move-5 3.1s infinite;
            -webkit-animation-delay: 1s;
            animation-delay: 1s;
        }

        #gooey-button .bubbles .bubble:nth-child(6) {
            left: 40px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-6 3.12s infinite;
            animation: move-6 3.12s infinite;
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s;
        }

        #gooey-button .bubbles .bubble:nth-child(7) {
            left: 41px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-7 3.14s infinite;
            animation: move-7 3.14s infinite;
            -webkit-animation-delay: 1.4s;
            animation-delay: 1.4s;
        }

        #gooey-button .bubbles .bubble:nth-child(8) {
            left: 81px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-8 3.16s infinite;
            animation: move-8 3.16s infinite;
            -webkit-animation-delay: 1.6s;
            animation-delay: 1.6s;
        }

        #gooey-button .bubbles .bubble:nth-child(9) {
            left: 76px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-9 3.18s infinite;
            animation: move-9 3.18s infinite;
            -webkit-animation-delay: 1.8s;
            animation-delay: 1.8s;
        }

        #gooey-button .bubbles .bubble:nth-child(10) {
            left: 79px;
            width: 25px;
            height: 25px;
            -webkit-animation: move-10 3.2s infinite;
            animation: move-10 3.2s infinite;
            -webkit-animation-delay: 2s;
            animation-delay: 2s;
        }

        @-webkit-keyframes move-1 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -51px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-1 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -51px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-2 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -117px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-2 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -117px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-3 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -101px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-3 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -101px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-4 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -73px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-4 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -73px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-5 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -64px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-5 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -64px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-6 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -73px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-6 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -73px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-7 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -53px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-7 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -53px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-8 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -67px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-8 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -67px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-9 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -94px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-9 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -94px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes move-10 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -90px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        @keyframes move-10 {
            0% {
                transform: translate(0, 0);
            }

            99% {
                transform: translate(0, -90px);
            }

            100% {
                transform: translate(0, 0);
                opacity: 0;
            }
        }

        #email {
            width: 100%;
            padding: 10px;
            border-radius: 15px;
            color: black;
            border: none;
        }

        #emailLabel {
            margin-top: 30px;
            color: #333;
            font-size: 15px;
            margin-left: 10px;
        }

        .alert {
            background-color: #99a799;
            margin-top: 30px;
            color: white;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 8px;
        }

        .loader div {
            width: 60px;
            height: 60px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #66cdaa;
            border-radius: 50%;
        }

        .loader div:before,
        .loader div:after {
            content: '';
            width: 60px;
            height: 60px;
            position: absolute;
            border-radius: 50%;
        }

        .loader div:before {
            background-color: #ffdab9;
            animation: scale-1 2400ms linear infinite;
        }

        .loader div:after {
            background-color: #66cdaa;
            animation: scale-2 2400ms linear infinite;
        }

        .loader div:nth-child(2):before,
        .loader div:nth-child(2):after {
            animation-delay: 300ms;
        }

        .loader div:nth-child(3):before,
        .loader div:nth-child(3):after {
            animation-delay: 600ms;
        }

        .loader div:nth-child(4):before,
        .loader div:nth-child(4):after {
            animation-delay: 900ms;
        }

        .loader div:nth-child(5):before,
        .loader div:nth-child(5):after {
            animation-delay: 1200ms;
        }

        .loader div:nth-child(6):before,
        .loader div:nth-child(6):after {
            animation-delay: 1500ms;
        }

        .loader div:nth-child(7):before,
        .loader div:nth-child(7):after {
            animation-delay: 1800ms;
        }

        .loader div:nth-child(8):before,
        .loader div:nth-child(8):after {
            animation-delay: 2100ms;
        }

        .loader div:nth-child(9):before,
        .loader div:nth-child(9):after {
            animation-delay: 2400ms;
        }

        @-moz-keyframes scale-1 {
            0% {
                transform: scale(0);
                z-index: 2;
            }

            50%,
            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes scale-1 {
            0% {
                transform: scale(0);
                z-index: 2;
            }

            50%,
            100% {
                transform: scale(1);
            }
        }

        @-o-keyframes scale-1 {
            0% {
                transform: scale(0);
                z-index: 2;
            }

            50%,
            100% {
                transform: scale(1);
            }
        }

        @keyframes scale-1 {
            0% {
                transform: scale(0);
                z-index: 2;
            }

            50%,
            100% {
                transform: scale(1);
            }
        }

        @-moz-keyframes scale-2 {

            0%,
            50% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes scale-2 {

            0%,
            50% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @-o-keyframes scale-2 {

            0%,
            50% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes scale-2 {

            0%,
            50% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, .5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #03e9f4;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, white);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, white);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, white);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, white);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }
    </style>
    @stop

    <div class="loader" wire:loading>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    @if(! $status)
    <div wire:loading.remove>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="gooey">
                    <!-- in="sourceGraphic" -->
                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />
                    <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                        result="highContrastGraphic" />
                    <feComposite in="SourceGraphic" in2="highContrastGraphic" operator="atop" />
                </filter>
            </defs>
        </svg>

        <button id="gooey-button" wire:click="sendResetLink">
            Reset Password
            <span class="bubbles">
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
                <span class="bubble"></span>
            </span>
        </button><br>
        <label for="email" id="emailLabel">Email</label><br>
        <input type="email" id="email" placeholder="email@email.com" wire:model="email"><br>
        @if($msg)
        <div class="alert" role="alert">
            {{$msg ?? ''}}
        </div>
        @endif
        @if($errors->any())
        <div class="alert" role="alert">
            {{implode(',', $errors->all())}}
        </div>
        @endif
    </div>
    @elseif($showReset and ! $statusReset)
    <div wire:loading.remove>
        <div class="login-box">
            <h2>Reset Password</h2>
            <form>
                <div class="user-box">
                    <input type="password" name="" required="" wire:model.defer="pass.password">
                    <label>Password</label>
                </div>
                <div class="user-box">
                    <input type="password" name="" required="" wire:model.defer="pass.confirm_password">
                    <label>Confirm Password</label>
                </div>
                <a href="#" wire:click="resetPass">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Reset
                </a>
            </form>
            @if($msg)
            <div class="alert" role="alert">
                {{$msg ?? ''}}
            </div>
            @endif
            @if($errors->any())
            <div class="alert" role="alert">
                {{implode(',', $errors->all())}}
            </div>
            @endif
        </div>
    </div>
    @else
    <div class="alert" role="alert">
        {{$msg ?? ''}}
    </div>
    @endif

    @section('js')

    @stop
</div>