<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wedding invitation</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Allura&display=swap&family=ZCOOL+XiaoWei&display=swap&family=Cinzel+Decorative:wght@400;700;900&display=swap&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <style>
        @font-face {
            font-family: 'hatolie';
            src: url('../fonts/Hatolie.TTF') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        html,
        body {
            /* overflow-x: hidden !important; */
            width: 100%;
            overscroll-behavior: none;
        }

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            /* background: #fff; */
        }

        body.no-scroll {
            overflow: hidden;
            height: 100vh;
        }

        #music-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;

            width: 48px;
            height: 48px;

            background: rgb(251 255 242 / 65%);
            /* senada tema */
            border: 1px solid #ed829c;
            border-radius: 50%;

            color: #ed829c;
            font-size: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0, 0, 0, .3);
        }

        @media screen and (max-width: 768px) {
            /* [data-aos-delay] {
                transition-delay: 0 !important;
            } */

        }

        @keyframes leftWaveFlower {
            0% {
                transform: rotate(0deg) translateY(0);
            }

            25% {
                transform: rotate(2deg) translateY(-2px);
            }

            50% {
                transform: rotate(-2deg) translateY(0);
            }

            75% {
                transform: rotate(1.5deg) translateY(-1px);
            }

            100% {
                transform: rotate(0deg) translateY(0);
            }
        }

        @keyframes rightWaveFlower {
            0% {
                transform: rotate(0deg) translateY(0);
            }

            25% {
                transform: rotate(-2deg) translateY(2px);
            }

            50% {
                transform: rotate(2deg) translateY(0);
            }

            75% {
                transform: rotate(-1.5deg) translateY(1px);
            }

            100% {
                transform: rotate(0deg) translateY(0);
            }
        }

        @keyframes swim {
            0% {
                transform: translateX(0) scaleX(-1);
            }

            45% {
                transform: translateX(140px) scaleX(-1);
            }

            50% {
                transform: translateX(149px) scaleX(1);
            }

            95% {
                transform: translateX(0) scaleX(1);
            }

            100% {
                transform: translateX(0) scaleX(-1);
            }
        }

        #cover {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #ed829c;
            background-image: url('./images/bgds3.png');
            background-size: cover;
            background-position: top center;
            transition: transform 1s ease-in-out;
            z-index: 999;
            overflow: hidden;
        }

        #cover.slide-up {
            transform: translateY(-105%);
        }

        .cover-content {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .top-patern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            pointer-events: none;
            z-index: -1;
        }

        .left-top-patern,
        .right-top-patern {
            position: relative;
        }

        .center-top-patern {
            position: absolute;
            display: flex;
            justify-content: center;
            flex: 1;
            z-index: -1;
            left: 50%;
            top: -30%;
            transform: translateX(-50%);
            width: 100%;
        }

        .left-top-patern {
            right: 132px;
            top: -130px;
        }

        .right-top-patern {
            right: 143px;
            top: -35px;
        }

        #patern1 {
            width: 312px;

        }

        #patern2 {
            width: 100%;
        }

        #patern3 {
            width: 281px;

        }

        .middle-patern {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            pointer-events: none;
        }

        .left-middle-patern {
            position: relative;
            top: 52px;
            z-index: 1;
            left: 0px;
            width: 100%;
        }

        #paternl1 {
            width: 62vw;
            position: relative;
            left: 48px;
            top: 77px;
            animation: leftWaveFlower 4s ease-in-out infinite;
        }

        #paternl2 {
            width: 27vw;
            position: relative;
            bottom: -92px;
            left: 169px;
            /* animation: leftWaveFlower 4s ease-in-out infinite; */
        }

        #paternl3 {
            width: 58vw;
            position: relative;
            bottom: 86px;
            left: 54px;
            animation: leftWaveFlower 4s ease-in-out infinite;
        }

        .center-middle-patern {
            position: relative;
            z-index: 2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            left: 13px;
        }

        .patern-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
            color: #ca2b52;
            height: 55vh;
            width: 63vw;
            border-radius: 0 64px 0 0;
        }

        .patern-header h5.sub-title {
            font-size: 27px;
            font-family: "ZCOOL Xiao Wei", serif;
            font-weight: 400;
            font-style: normal;
        }

        .patern-header h4 {
            font-size: 22px;
            font-family: "ZCOOL Xiao Wei", serif;
            font-weight: 400;
            font-style: normal;
        }

        .patern-header .bride-name {
            font-size: 42px;
            font-family: "allura", serif;
            font-weight: 600;
            font-style: normal;
            letter-spacing: 2px;
        }

        #patern4 {
            width: 254px;
        }

        #patern5 {
            width: 363px;
        }

        .open-btn {
            position: relative;
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            letter-spacing: 2px;
            z-index: 9999;
            pointer-events: auto;
        }

        .open-btn-content {
            background-color: #ed829c;
            border-radius: 33px;
            width: 81%;
            padding: 5px 10px;
        }

        .open-btn p {
            color: #f5f5f5;
            font-size: 14px;
            font-family: "ZCOOL XiaoWei", sans-serif;
            font-weight: 400;
            font-style: normal;
            margin: 0;
            line-height: 1;
            text-transform: uppercase;
        }

        .right-middle-patern {
            position: relative;
            top: 57px;
            z-index: 1;
            left: 0px;
            width: 100%;
        }

        #paternr1 {
            width: 70vw;
            position: relative;
            left: -38px;
            top: 23px;
            animation: rightWaveFlower 4s ease-in-out infinite;
        }

        #paternr2 {
            width: 23vw;
            position: relative;
            bottom: 52px;
            left: 15px;
            /* animation: rightWaveFlower 4s ease-in-out infinite; */
        }

        .bottom-patern {
            position: absolute;
            top: 58%;
            left: -31px;
            transform: translate(-50%, -50%);
            z-index: -1;
            display: flex;
            pointer-events: none;
            /* animation: moveFlower 10s ease-in-out infinite; */
        }


        @keyframes moveFlower {
            0% {
                transform: translateX(0px);
            }

            25% {
                transform: translateX(5px);
            }

            50% {
                transform: translateX(0px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0px);
            }
        }

        .center-bottom-patern {
            position: relative;
            width: 100%;
            /* animation: moveFlower 10s ease-in-out infinite; */
        }

        #patern6 {
            position: absolute;
            width: 109vw;
        }

        .bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            height: 100%;
            width: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: 99;
            /* animation: zoomVideo 20s linear infinite; */
        }

        .bg-video.hide-video {
            opacity: 0;
            pointer-events: none;
        }

        /* @keyframes zoomVideo {
            from {
                transform: translate(-50%, -50%) scale(1);
            }

            to {
                transform: translate(-50%, -50%) scale(1.1);
            }
        } */

        /* OVERLAY GELAP */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0, 0, 0, 0.4); */
            /* atur gelapnya */
            z-index: -1;
            /* backdrop-filter: blur(3px); */
        }

        #lottie-overlay {
            position: absolute;
            /* dari fixed jadi absolute */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 99999;
            transition: opacity 0.5s ease;
        }

        #lottie-overlay.hide {
            opacity: 0;
            pointer-events: none;
        }

        .first-section {
            position: sticky;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            z-index: 1;
            top: 0;
            background-color: #e8023c;;
            background-image: url('./images/bgwcd3.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: "jawa", serif;
            color: #b0a278;
            display: none;
        }

        .top-patern-wc {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            pointer-events: none;
            z-index: -1;
        }

        .fade-right-custom {
            opacity: 0;
            transform: translateX(-120px);

            animation: fadeRightCustom 2s ease forwards;
            animation-delay: 5s;
        }

        @keyframes fadeRightCustom {
            0% {
                opacity: 0;
                transform: translateX(-120px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-left-custom {
            opacity: 0;
            transform: translateX(120px);

            animation: fadeLeftCustom 2s ease forwards;
            animation-delay: 5s;
        }

        @keyframes fadeLeftCustom {
            0% {
                opacity: 0;
                transform: translateX(120px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .left-top-patern-wc {
            position: relative;
            top: -13px;
            right: 24px;
            width: 100%;
        }

        .right-top-patern-wc {
            position: relative;
            top: -13px;
            left: -37px;
            width: 100%;

        }

        #patern7 {
            /* width: 100%; */
        }

        .wedding-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            pointer-events: none;
        }

        .middle-patern-wc {
            position: relative;
            width: 350px;
            margin: auto;

        }

        /* gambar background */
        #wedding-card-bg {
            width: 139%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-55%, -56%);
            font-family: 'Cinzel Decorative', cursive;
            animation: revealUp 6s ease forwards;
            animation-delay: 5s;
            overflow: hidden;
            opacity: 0;
        }

        @keyframes revealUp {
            0% {
                opacity: 0;
                clip-path: inset(100% 0 0 0);
            }

            100% {
                opacity: 1;
                clip-path: inset(0 0 0 0);
            }
        }

        /* text nabrak / overlap */
        .text-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -63%);
            text-align: center;
            color: #f484a0;
        }

        .text-content {
            animation: revealText 7s cubic-bezier(0.22, 1, 0.36, 1) forwards;
            animation-delay: 7s;
            /* biar nunggu bg dulu */
            clip-path: inset(100% 0 0 0);
        }

        @keyframes revealText {
            from {
                clip-path: inset(100% 0 0 0);
                opacity: 0;
            }

            to {
                clip-path: inset(0 0 0 0);
                opacity: 1;
            }
        }

        /* styling text */
        .subtitle {
            font-size: 14px;
            letter-spacing: 2px;
            font-family: "ZCOOL XiaoWei", sans-serif;
        }

        .text-content h1 {
            font-size: 28px;
            margin: 10px 0;
            font-family: "ZCOOL XiaoWei", sans-serif;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .date {
            position: relative;
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            letter-spacing: 2px;
        }

        .date img {
            width: 177px;
            height: auto;
            display: block;
        }

        .date span {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f484a0;
            font-size: 12px;
            font-family: "Cinzel Decorative", cursive;
            font-weight: 600;
            font-style: normal;
        }

        .save-date {
            margin-top: 20px;
            background-color: #ed829c;
            color: #f5f5f5;
            border: none;
            padding: 10px 20px;
            border-radius: 33px;
            font-size: 12px;
            letter-spacing: 2px;
            font-family: "ZCOOL XiaoWei", sans-serif;
            font-weight: 600;
            font-style: normal;
            cursor: pointer;
        }

        .left-patern-wc {
            position: relative;
            top: 237px;
            z-index: -1;
            right: -91px;
        }

        .right-patern-wc {
            position: relative;
            top: 237px;
            z-index: -1;
            left: -91px;
        }

        #patern8 {
            width: 40vw;
        }

        #patern9 {
            width: 40vw;
        }

        .div-content {
            overflow-x: hidden;
            width: 100%;
            min-height: 100vh;
            position: relative;
            z-index: 2;
            background-color: #ed829c;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .quote {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 30px;
            padding-bottom: 42px;
            padding-left: 30px;
            padding-right: 30px;
            flex-wrap: wrap;
        }

        .quote h2 {
            font-size: 60px;
            color: #f5f5f5;
            font-family: "hatolie", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .quote p {
            font-size: 17px;
            color: #f5f5f5;
            font-family: "allura", serif;
            font-weight: 400;
            font-style: normal;
            max-width: 600px;
            text-align: center;
        }

        .quote b {
            font-size: 14px;
            color: #f5f5f5;
            font-weight: bolder;
            font-family: "quicksand", sans-serif;
        }

        .profile {
            background-image: url('./images/bgprofiled3.png');
            background-position: center bottom;
            background-size: cover;
            background-color: #fbfff2;
        }

        .profile-content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            color: #e8023c;
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .profile p {
            margin: 0;
        }

        .profile-name h3 {
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: bold;
            letter-spacing: 2px;
            color: #ff0040;
        }

        #lottie-overlay-profile {
            position: absolute;
            /* dari fixed jadi absolute */
            top: 37%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            background: transparent;
            z-index: 1;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }

        #lottie-overlay.hide {
            opacity: 0;
            pointer-events: none;
        }

        .space-start {
            height: 50px;
        }

        .space {
            height: 20px;
        }

        .space-end {
            height: 326px;
        }

        .greeting {
            padding: 0 40px;
            font-size: 13px;
            font-weight: 500;
            line-height: 18px;
        }

        .profile-img img {
            height: 250px !important;
            width: 180px;
            border-style: solid;
            border-width: 3px 3px 3px 3px;
            border-color: #FFFFFF;
            border-radius: 100px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.26);
            object-fit: cover;
            object-position: top center;
        }

        .invitation-info {
            background-image: url('./images/bginfod3.png');
            background-position: bottom center;
            background-size: cover;
            background-color: #7e2f3e;
            padding: 0 20px;
        }

        .invitation-info-content>div {
            width: 100%;
        }

        .invitation-info-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            color: #f5f5f5;
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .patern-info {
            width: 100%;
        }

        .patern-info img {
            display: inline-block;
            vertical-align: middle;
            width: 50%;
        }

        .save-date-info h2 {
            font-size: 28px;
            color: #f5f5f5;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .date-countdown {
            box-sizing: border-box;
            margin-right: -4px;
            margin-left: -4px;
        }

        .date-countdown ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: table;
            table-layout: fixed;
            width: 100%;
        }

        .date-countdown ul li {
            list-style: none;
            margin: 0;
            padding: 0;
            display: table-cell;
            position: relative;
        }

        .date-countdown-item {
            margin-right: 4px;
            margin-left: 4px;
            padding: 10px 10px 10px 10px;
            border-radius: 6px 6px 6px 6px;
            background: #FFFFFF3D;
        }

        .date-countdown-item h3 p {
            font-size: 24px;
            color: #f5f5f5;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: bold;
            margin: 0;
        }

        .reception-info {
            background-color: #fbfff2;
            background-image: url('./images/bgrd3.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 15px 15px 15px 15px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            padding-top: 40px;
            padding-bottom: 40px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .reception-content {
            display: flex;
            flex-direction: column;
            gap: 22px 22px;
            row-gap: 22px;
            column-gap: 22px;

        }

        .reception-text h2 {
            font-size: 28px;
            color: #ff0040;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .reception-text h3 {
            font-family: "Quicksand", Sans-serif;
            font-size: 15px;
            font-weight: 500;
            text-transform: uppercase;
            margin: 0;
            color: #e8023c;
        }

        .reception-text p {
            text-align: center;
            font-family: "Quicksand", Sans-serif;
            font-size: 13px;
            font-weight: 500;
            margin: 0;
            color: #e8023c;
        }

        .patern-reception img {
            width: 69%;
        }

        .livestream-text h2 {
            font-size: 28px;
            color: #f5f5f5;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .livestream-text h3 {
            font-family: "Quicksand", Sans-serif;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0;
            color: #f5f5f5
        }

        .livestream-text p {
            text-align: center;
            font-family: "Quicksand", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            margin: 0;
            color: #f5f5f5;
        }

        .lst-btn {
            margin-top: 20px;
            background-color: #f5f5f5;
            color: #e8023c;;
            border: none;
            padding: 10px 20px;
            border-radius: 33px;
            font-size: 12px;
            letter-spacing: 2px;
            font-family: "ZCOOL XiaoWei", sans-serif;
            font-weight: 600;
            font-style: normal;
            cursor: pointer;
        }

        .love-stories-section {
            background-image: url('./images/bglsd3.png');
            background-position: top center;
            background-size: cover;
            background-color: #fbfff2;
            padding: 0 20px;
        }

        .love-stories-content>div {
            width: 100%;
        }

        .love-stories-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            /* color: #f5f5f5; */
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .love-stories-text h2 {
            font-size: 28px;
            color: #ff0040;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .love-stories-text h3 {
            font-family: "Quicksand", Sans-serif;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 0;
            color: #e8023c;;
        }

        .love-stories-text p {
            text-align: center;
            font-family: "Quicksand", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            margin: 0;
            color: #e8023c;;
        }

        .galery-section {
            background-image: url('./images/bglsd2.png');
            background-position: top center;
            background-size: cover;
            background-color: #fbfff2;
            padding: 0 20px;
        }

        .galery-content>div {
            width: 100%;
        }

        .galery-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            /* color: #f5f5f5; */
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .galery-img {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .galery-img-item {
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
        }

        .galery-img-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
            max-width: ;
        }

        .galery-img-item:hover img {
            transform: scale(1.1);
        }

        .galery-img-item.full {
            grid-column: span 2;
        }

        /* LIGHTBOX */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 80%;
            border-radius: 10px;
        }

        .lightbox.active {
            display: flex;
        }

        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 35px;
            color: #fff;
            cursor: pointer;
        }

        .nav {
            position: absolute;
            top: 50%;
            font-size: 40px;
            color: white;
            cursor: pointer;
            user-select: none;
            padding: 10px;
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        .gift-section {
            background-image: url('./images/bginfod3.png');
            background-position: bottom center;
            background-size: cover;
            background-color: #7e2f3e;
            padding: 0 20px;
        }

        .gift-content>div {
            width: 100%;
        }

        .gift-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            color: #f5f5f5;
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .gift-text h2 {
            font-size: 28px;
            color: #f5f5f5;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .money-account {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* CARD UMUM */
        .card-rek,
        .card-gift {
            background: linear-gradient(135deg, #f1f1f1, #e5e5e5);
            background-color: #f5f5f5;
            border-radius: 20px;
            padding: 20px;
            position: relative;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background-image: url('./images/card.png');
            background-position: bottom right;
            background-size: cover;
        }

        /* LOGO */
        .card-top {
            display: flex;
            justify-content: flex-end;
        }

        .logo {
            height: 25px;
        }

        /* ISI */
        .card-body {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .card-body img {
            width: 10%;
            max-width: 78%;
        }

        .rek-number {
            font-size: 18px;
            letter-spacing: 2px;
            margin-bottom: 0;
            color: #666;
        }

        .rek-name {
            font-size: 13px;
            color: #666;
        }

        /* BUTTON COPY */
        .btn-copy {
            position: absolute;
            bottom: 15px;
            right: 15px;
            border: none;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            padding: 6px 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 12px;
        }

        .btn-copy:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        /* GIFT CARD */
        .card-gift {
            text-align: center;
            color: #666;
        }

        .gift-icon {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .card-gift h3 {
            margin-bottom: 10px;
        }

        .wish-form {
            color: white;
        }

        /* TOTAL */
        .total-comment {
            text-align: center;
            margin-bottom: 15px;
        }

        /* BOX HADIR */
        .attendance {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding: 0 55px;
        }

        .box {
            flex: 1;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            font-weight: bold;
        }

        .box.hadir {
            background: #cdeac0;
            color: #2e7d32;
        }

        .box.tidak {
            background: #f8caca;
            color: red;
        }

        .box p {
            margin: 0;
        }

        /* FORM */
        .field {
            position: relative;
            margin-bottom: 10px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            outline: none;
            margin-bottom: 10px;
            font-size: 14px;
        }

        /* WARNING */
        .warning {
            display: block;
            font-size: 9px;
            background: #c85951;
            color: white;
            padding: 3px 8px;
            border-radius: 5px;
            margin-top: -5px;
            margin-bottom: 10px;
        }

        /* BUTTON */
        .wish-form button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(90deg, #f5c542, #d4a72c);
            font-weight: bold;
            cursor: pointer;
        }

        .thanks-section {
            background-image: url('./images/bgtkd3.png');
            background-position: bottom center;
            background-size: cover;
            background-color: #fbfbfb;
            padding: 0 20px;
        }

        .thanks-content>div {
            width: 100%;
        }

        .thanks-content {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: column;
            font-size: 12px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 1.9px;
            color: #f5f5f5;
            font-family: "quicksand", sans-serif;
            text-align: center;
        }

        .thanks-text h2 {
            font-size: 28px;
            color: #ff0040;
            font-family: "ZCOOL XiaoWei", serif;
            font-weight: normal;
            margin: 0;
        }

        .thanks-text p {
            text-align: center;
            font-family: "Quicksand", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            margin: 0;
            color: #e8023c;;
        }

        .thank-img {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            overflow: hidden;
        }

        /* gambar */
        .thank-img img {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);

            /* animasi awal */
            transform: scale(0.8);
            opacity: 0;
            animation: zoomFade 1.2s ease forwards;
        }

        /* animasi zoom out */
        @keyframes zoomFade {
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .footer-section {
            background-color: #ed829c;
            padding: 20px;
            text-align: center;
        }

        .footer-section .footer-logo img {
            width: 48px;
            height: auto;
            margin-bottom: 10px;
        }

        .footer-section p {
            margin-bottom: 0;
            font-size: 12px;
            color: #f5f5f5;
            font-family: "quicksand", sans-serif;
        }
    </style>
</head>

<body>
    <audio id="bg-music" loop>
        <source src="./audio/wedding-music.mp3" type="audio/mpeg">
    </audio>
    <button id="music-btn" onclick="toggleMusic()"><i class="bi bi-play-fill"></i></button>

    <div id="cover">
        <div class="cover-content">
            <div class="top-patern">
                <div class="left-top-patern" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2200">
                    <img id="patern1" src="./images/ltcd3.png" alt="pattern1">
                </div>
                <div class="right-top-patern" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2200">
                    <img id="patern3" src="./images/rtcd3.png" alt="pattern3">
                </div>
            </div>
            <div class="middle-patern">
                <div class="left-middle-patern" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2200">
                    <img id="paternl1" src="./images/pml1d3.png" alt="pattern4">
                    <img id="paternl2" src="./images/pml2d3.png" alt="pattern4">
                </div>
                <div class="center-middle-patern">
                    <div class="patern-header px-3 py-5" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="2200">
                        <div class="text-center">
                            <h5 class="sub-title mb-3">Wedding Invitation</h5>
                            <h3 class="bride-name">Steven <br><span>&</span><br> Elizabeth</h3>
                            <h4 class="sub-title split-text mb-3">Saturday, <span
                                    class="num">20</span>&nbsp;September&nbsp;<span class="num">2025</span></h4>
                            <div class="open-btn-content mx-auto">
                                <button class="open-btn" onclick="openInvitation()">
                                    <p>Open <br> Invitation</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-middle-patern" data-aos="fade-left" data-aos-delay="300" data-aos-duration="2200">
                    <img id="paternr1" src="./images/pmr1d3.png" alt="pattern5">
                    <img id="paternr2" src="./images/pmr2d3.png" alt="pattern5">
                </div>
            </div>

            <div class="bottom-patern">
                <div class="center-bottom-patern" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1200">
                    <img id="patern6" src="./images/pbd3.png" alt="pattern6">
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section id="mainContent" class="first-section flex-column">
        <video autoplay muted class="bg-video" id="bgVideo">
            <source src="./video/design3.mp4" type="video/mp4">
        </video>

        <!-- overlay biar teks kebaca -->
        {{-- <div class="video-overlay"></div> --}}
        {{-- <div id="lottie-overlay">
            <lottie-player src="{{ asset('lottie/birds.json') }}" background="transparent" speed="1"
                style="width: 800px; height: 800px;" loop autoplay>
            </lottie-player>
        </div> --}}
        <div class="top-patern-wc">
            <div class="left-top-patern-wc fade-right-custom">
                <img src="./images/ltwcd3.png" id="patern7" alt="pattern7">
            </div>
            <div class="right-top-patern-wc fade-left-custom">
                <img src="./images/rtwcd3.png" id="patern7" alt="pattern7">
            </div>
        </div>
        <div class="wedding-card py-3">
            {{-- <div class="left-patern-wc fade-right-custom">
                <img id="patern8" src="./images/wcmdld2.png" alt="pattern8">
            </div> --}}
            <div class="middle-patern-wc">
                <img id="wedding-card-bg" src="./images/wcmdfd3.png" alt="Wedding Card">
                <div class="text-content">
                    <p class="subtitle">The Wedding of</p>
                    <h1>STEVEN <br>&<br> ELIZABETH</h1>
                    <div class="date my-4">
                        <img src="./images/dd3.png" alt="">
                        <span class="text-uppercase">20 September 2025</span>
                    </div>
                    <button class="save-date text-uppercase">Save the Date</button>
                </div>
            </div>
            {{-- <div class="right-patern-wc fade-left-custom">
                <img id="patern9" src="./images/wcmdrd2.png" alt="pattern9">
            </div> --}}
        </div>
    </section>

    <div class="div-content">
        <section class="quote">
            <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="2200">
                <h2 class="text-uppercase">SE</h2>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="2200">
                <p>“Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                    jenismu
                    sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa
                    kasih
                    dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi
                    kaum
                    yang berpikir”
                </p>
                <b>QS. Ar-Rum (30) : 21</b>
            </div>
        </section>
        <section class="profile">
            <div class="profile-content">
                <div class="space-start"></div>
                <div class="greeting" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Assalamu'alaikum Wr. Wb.</p>
                </div>
                <div class="space"></div>
                <div class="greeting" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian untuk
                        menghadiri acara pernikahan kami :</p>
                </div>
                <div class="space"></div>
                <div class="profile-img m-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="2200">
                    <img src="./images/ifgroom.png" alt="groom">
                </div>
                <div class="space"></div>
                <div class="profile-name" data-aos="fade-up" data-aos-delay="500" data-aos-duration="2200">
                    <h3 class="text-uppercase">STEVEN YONO</h3>
                </div>
                <div class="space"></div>
                <div class="profile-parent" data-aos="fade-up" data-aos-delay="700" data-aos-duration="2200">
                    <p class="">Putri Pertama dari Bapak <span>Andri Setiawan</span></p>
                    <p class="">& Ibu <span>Maria Magdalena</span></p>
                </div>
                <div class="instagram mt-2" data-aos="fade-up" data-aos-delay="900" data-aos-duration="2200">
                    <p><i class="bi bi-instagram"></i><br>&nbsp;@stevenyono</p>
                </div>
                <div id="lottie-overlay-profile">
                    <lottie-player src="{{ asset('lottie/birds.json') }}" background="transparent" speed="1"
                        style="width: 600px; height: 600px;" loop autoplay>
                    </lottie-player>
                </div>
                <div class="space"></div>
                <h2 data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">&</h2>
                <div class="space"></div>
                <div class="profile-img m-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="2200">
                    <img src="./images/ifbrides.png" alt="bride">
                </div>
                <div class="space"></div>
                <div class="profile-name" data-aos="fade-up" data-aos-delay="500" data-aos-duration="2200">
                    <h3 class="text-uppercase">ELIZABETH EVA</h3>
                </div>
                <div class="space"></div>
                <div class="profile-parent" data-aos="fade-up" data-aos-delay="700" data-aos-duration="2200">
                    <p class="">Putri Pertama dari Bapak <span>Supri Renaldi</span></p>
                    <p class="">& Ibu <span>Regina Welas</span></p>
                </div>
                <div class="instagram mt-2 " data-aos="fade-up" data-aos-delay="900" data-aos-duration="2200">
                    <p><i class="bi bi-instagram"></i><br>&nbsp;@elizabetheva</p>
                </div>
                <div class="space-end"></div>
            </div>
        </section>
        <section class="invitation-info">
            <div class="invitation-info-content">
                <div class="space-start"></div>
                <div class="patern-info" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <img src="./images/ptid3.png" alt="pattern info">
                </div>
                <div class="space"></div>
                <div class="save-date-info" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h2>Save The Date</h2>
                </div>
                <div class="space"></div>
                <div class="greeting" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Dan kami bersyukur, dipertemukan Allah di waktu terbaik. Kini kami menanti hari istimewa kami.
                    </p>
                </div>
                <div class="space"></div>
                <div class="date-countdown">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                            <div class="date-countdown-item">
                                <h3 id="days" class="m-0">00</h3>
                                <p class="m-0">Days</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                            <div class="date-countdown-item">
                                <h3 class="m-0" id="hours">00</h3>
                                <p class="m-0">Hours</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                            <div class="date-countdown-item">
                                <h3 class="m-0" id="minutes">00</h3>
                                <p class="m-0">Minutes</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                            <div class="date-countdown-item">
                                <h3 class="m-0"id="seconds">00</h3>
                                <p class="m-0">Seconds</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="space-start"></div>
                <div class="reception-info" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <div class="reception-content">
                        <div class="reception-text">
                            <h2>Akad Nikah</h2>
                        </div>
                        <div class="patern-reception">
                            <img src="./images/prd3.png" alt="Pattern Reception">
                        </div>
                        <div class="reception-text">
                            <h3>20 September 2025</h3>
                        </div>
                        <div class="reception-text">
                            <p>Pukul 07.00 WIB s/d Selesai</p>
                        </div>
                        <div class="reception-text">
                            <p>Kediaman Mempelai Wanita</p>
                            <p>Ds Pagu, Wates, Kediri, Jawa Timur</p>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="reception-info" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <div class="reception-content">
                        <div class="reception-text">
                            <h2>Resepsi</h2>
                        </div>
                        <div class="patern-reception">
                            <img src="./images/prd3.png" alt="Pattern Reception">
                        </div>
                        <div class="reception-text">
                            <h3>20 September 2025</h3>
                        </div>
                        <div class="reception-text">
                            <p>Pukul 10.00 WIB s/d Selesai</p>
                        </div>
                        <div class="reception-text">
                            <p>Kediaman Mempelai Wanita</p>
                            <p>Ds Pagu, Wates, Kediri, Jawa Timur</p>
                        </div>
                    </div>
                </div>
                <div class="space-start"></div>
                <div class="reception-content">
                    <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <h2>Live Streaming</h2>
                    </div>
                    <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <p>Kami mengundang Bapak/Ibu/Saudara/i untuk menyaksikan pernikahan kami secara virtual yang
                            disiarkan langsung melalui media sosial di bawah ini.</p>
                    </div>
                    <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <h3>20 September 2025</h3>
                    </div>
                    <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <p>Pukul 07.00 WIB s/d Selesai</p>
                    </div>
                    <div class="livestream-btn" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <a href="https://www.instagram.com" target="_blank"><button
                                class="lst-btn text-uppercase">Tonton</button></a>
                    </div>
                    <div class="space-start"></div>
                </div>
            </div>
        </section>
        <section class="love-stories-section">
            <div class="love-stories-content">
                <div class="space-start"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h2>Love Story</h2>
                </div>
                <div class="space-start"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h3>Pertemuan</h3>
                </div>
                <div class="space"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Kami mengundang Bapak/Ibu/Saudara/i untuk menyaksikan pernikahan kami secara virtual yang
                        disiarkan langsung melalui media sosial di bawah ini.</p>
                </div>
                <div class="space-start"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h3>Menjalin Hubungan</h3>
                </div>
                <div class="space"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Percakapan kecil berubah menjadi rasa nyaman, yang diam-diam tumbuh dihati. Kami belajar saling
                        mengenal, bukan tentang bahagia tetapi juga perbedaan, suka dan duka. Cinta bukan tentang
                        kesempurnaan melainkan tentang bertahan. Dengan keyakinan kami menjalin hubungan tanggal
                        2/06/2022.</p>
                </div>
                <div class="space-start"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h3>Komitmen</h3>
                </div>
                <div class="space"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Bukan kata manis atau rayuan yang mengawali kami, hanya satu pernyataan sederhana tentang pulang
                        ke rumah yang sama. Perkenalan kami tutup dengan satu janji abadi, menyatukan cerita menjadi
                        satu perjalanan. Kami bertunangan tgl 14/12/2025 dan meresmikan ikatan suci tgl 3/05/2026 menuju
                        hidup baru.</p>
                </div>
                <div class="space-start"></div>
                <div class="space-start"></div>
            </div>
        </section>
        <section class="galery-section">
            <div class="galery-content">
                <div class="space-start"></div>
                <div class="love-stories-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h2>Galeri Foto</h2>
                </div>
                <div class="space-start"></div>
                <div class="galery-img">
                    <div class="galery-img-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <img src="./images/ifgallery2.png" alt="">
                    </div>
                    <div class="galery-img-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <img src="./images/ifgallery3.png" alt="">
                    </div>
                    <div class="galery-img-item full" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="2200">
                        <img src="./images/ifgallery1.png">
                    </div>
                    <div class="galery-img-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <img src="./images/ifgallery4.png" alt="">
                    </div>
                    <div class="galery-img-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <img src="./images/ifgallery1.png" alt="">
                    </div>
                    <div class="galery-img-item full" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="2200">
                        <img src="./images/ifgallery2.png">
                    </div>
                </div>

                <!-- LIGHTBOX -->
                <div class="lightbox" id="lightbox">
                    <span class="close">&times;</span>
                    <img class="lightbox-img" id="lightbox-img">

                    <div class="nav prev">&#10094;</div>
                    <div class="nav next">&#10095;</div>
                </div>
                <div class="space-start"></div>
                <div class="space-start"></div>
            </div>
        </section>
        <section class="gift-section">
            <div class="gift-content">
                <div class="space-start"></div>
                <div class="gift-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h2>Wedding Gift</h2>
                </div>
                <div class="space"></div>
                <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account
                        atau e-wallet di bawah ini:
                    </p>
                </div>
                <div class="space-start"></div>
                <div class="money-account">
                    <!-- CARD 1 -->
                    <div class="card-rek" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <div class="card-top">
                            <img class="logo" src="./images/mandiri.png">
                        </div>

                        <div class="card-body">
                            <img src="./images/chip.png" alt="chip">
                            <p class="rek-number" data-copy="1234567890">1234 5678 90</p>
                            <p class="rek-name text-uppercase">STEVEN YONO</p>
                        </div>

                        <button class="btn-copy"><i class="bi bi-clipboard"></i></button>
                    </div>
                    <!-- CARD 2 -->
                    <div class="card-rek" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200   ">
                        <div class="card-top">
                            <img class="logo" src="./images/dana.png">
                        </div>

                        <div class="card-body">
                            <img src="./images/chip.png" alt="chip">
                            <p class="rek-number" data-copy="1234567890">08123456789</p>
                            <p class="rek-name text-uppercase">STEVEN YONO</p>
                        </div>

                        <button class="btn-copy"><i class="bi bi-clipboard"></i></button>
                    </div>

                    <!-- CARD 3 -->
                    <div class="card-gift" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <div class="gift-icon"><i class="bi bi-gift-fill"></i></div>
                        <h3>Kirim Hadiah</h3>
                        <p>Nama Penerima : Habib Yulianto</p>
                        <p>No. HP : <b>1234 5678 90</b></p>
                        <p>Ds Pagu Kec.Wates Kab. Kediri</p>
                    </div>

                </div>
                <div class="space-start"></div>
                <div class="wish-content">
                    <div class="space-start"></div>
                    <div class="gift-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <h2>Ucapan Sesuatu</h2>
                    </div>
                    <div class="space"></div>
                    <div class="livestream-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                        <p>Untuk Bapak/Ibu/Saudara/i yang ingin memberikan ucapan, doa, atau harapan baik untuk kami,
                            silakan
                            isi form di bawah ini:</p>
                    </div>
                    <div class="space-start"></div>
                    <div class="wish-form" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">

                        <p class="total-comment">0 Comments</p>

                        <div class="attendance">
                            <div class="box hadir">
                                <span id="hadirCount">0</span>
                                <p>Hadir</p>
                            </div>
                            <div class="box tidak">
                                <span id="tidakCount">0</span>
                                <p>Tidak Hadir</p>
                            </div>
                        </div>

                        <form id="formUcapan">

                            <div class="field">
                                <input type="text" placeholder="Nama" readonly>
                                <span class="warning">Mohon maaf! Khusus untuk tamu undangan</span>
                            </div>

                            <textarea placeholder="Ucapan" required></textarea>

                            <select required>
                                <option value="">Konfirmasi Kehadiran</option>
                                <option value="hadir">Hadir</option>
                                <option value="tidak">Tidak Hadir</option>
                            </select>

                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="space-start"></div>
            </div>

        </section>
        <section class="thanks-section">
            <div class="thanks-content">
                <div class="space-start"></div>
                <div class="thanks-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <h2>Terima Kasih</h2>
                </div>
                <div class="thank-img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <img src="./images/ifgallery2.png" alt="Thank You">
                </div>
                <div class="thanks-text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2200">
                    <p>Menjadi sebuah kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dalam hari
                        bahagia ini. Terima kasih atas segala ucapan, doa, dan perhatian yang diberikan.</p>
                    <div class="space"></div>
                    <h2>Steven & Elizabeth</h2>
                </div>
                <div class="space-end"></div>
            </div>
        </section>
        <section class="footer-section">
            <div class="footer-content">
                <a class="footer-logo" href=""><img src="images/logo.png" alt=""></a>
                <p>©Karta Invitation. All rights reserved.</p>
            </div>
        </section>
    </div>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

    <!-- SplitType -->
    <script src="https://unpkg.com/split-type"></script>

    <!-- Lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script>
        function aosInit() {
            AOS.init({
                duration: 600,
                easing: 'ease-in-out',
                once: false,
                mirror: false,
                offset: 50
            });
        }
        window.addEventListener('load', aosInit);

        function openInvitation() {
            document.getElementById("cover").classList.add("slide-up");
            document.body.classList.remove('no-scroll');
        }

        function openInvitation() {
            const cover = document.getElementById("cover");
            const firstSection = document.getElementById("mainContent");

            // 1. munculkan section (baru "di-load")
            firstSection.style.display = "flex";

            setTimeout(() => {
                AOS.refreshHard();
            }, 100);

            // 2. kasih delay dikit biar smooth
            setTimeout(() => {
                // 3. scroll ke bawah (kayak pindah halaman)
                firstSection.scrollIntoView({
                    behavior: "smooth"
                });
            }, 100);

            // 4. slide cover ke atas
            cover.classList.add("slide-up");

            // // 5. optional: hapus cover biar ringan
            setTimeout(() => {
                cover.remove();
            }, 1000);
        }


        function toggleMusic() {
            const music = document.getElementById('bg-music');
            const btn = document.getElementById('music-btn');

            if (music.paused) {
                music.play();
                btn.innerHTML = '<i class="bi bi-play-fill"></i>';
            } else {
                music.pause();
                btn.innerHTML = '<i class="bi bi-pause-fill"></i>';
            }
        }
        document.querySelectorAll('.btn-copy').forEach((btn) => {
            const originalHTML = btn.innerHTML;
            btn.addEventListener('click', () => {
                const number = btn.parentElement.querySelector('.rek-number').dataset.copy;

                navigator.clipboard.writeText(number);

                btn.innerText = "Copied!";
                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                }, 1000);
            });
        });



        const images = document.querySelectorAll('.galery-img-item img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const closeBtn = document.querySelector('.close');
        const nextBtn = document.querySelector('.next');
        const prevBtn = document.querySelector('.prev');

        let currentIndex = 0;

        function showImage(index) {
            lightboxImg.src = images[index].src;
        }

        images.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                showImage(currentIndex);
                lightbox.classList.add('active');
            });
        });

        closeBtn.onclick = () => {
            lightbox.classList.remove('active');
        };

        nextBtn.onclick = () => {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        };

        prevBtn.onclick = () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        };

        const video = document.getElementById('bgVideo');

        video.addEventListener('ended', () => {
            video.classList.add('hide-video');

            setTimeout(() => {
                video.style.display = 'none';
            }, 1500);
        });

        const wishForm = document.getElementById("wishForm");
        const nameInput = document.getElementById("nameInput");
        const wishInput = document.getElementById("wishInput");
        const wishContent = document.getElementById("wishContent");

        // Ambil data dari localStorage saat load
        let wishes = JSON.parse(localStorage.getItem("wishes")) || [];

        // Render semua wish
        function renderWishes() {
            wishContent.innerHTML = "";

            wishes.forEach(wish => {
                wishContent.innerHTML += `
            <div class="wish-card">
                <h4>${wish.name}</h4>
                <p>${wish.message}</p>
                <div class="wish-meta">
                    <span>📅 ${wish.date}</span>
                    <span>🕒 ${wish.time}</span>
                </div>
            </div>
        `;
            });
        }

        // Submit wish
        const form = document.getElementById("formUcapan");
        const hadirCount = document.getElementById("hadirCount");
        const tidakCount = document.getElementById("tidakCount");

        let hadir = 0;
        let tidak = 0;

        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const status = form.querySelector("select").value;

            if (status === "hadir") {
                hadir++;
                hadirCount.innerText = hadir;
            } else if (status === "tidak") {
                tidak++;
                tidakCount.innerText = tidak;
            }

            form.reset();
        });


        document.addEventListener('DOMContentLoaded', () => {

            // Split text
            new SplitType('.split-text', {
                types: 'chars'
            });

            // Animasi teks
            gsap.to('.split-text .char', {
                opacity: 1,
                y: 0,
                stagger: 0.045,
                duration: 0.8,
                ease: 'power2.out',
                delay: 1.2 // tunggu pattern & logo dulu
            });

        });

        setTimeout(() => {
            document.getElementById('curtain').classList.add('done');
        }, 5000);
    </script>
</body>

</html>
