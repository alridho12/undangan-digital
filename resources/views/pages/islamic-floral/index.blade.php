<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Invitation</title>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Allura&family=Cinzel:wght@400..900&family=Sacramento&family=Style+Script&family=ZCOOL+XiaoWei&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        html,
        body {
            /* overflow-x: hidden !important; */
            width: 100%;
            overscroll-behavior: none;
        }

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #fff;
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

            background: rgba(255, 255, 255, 0.8);
            /* senada tema */
            border: 1px solid #c9a25d;
            border-radius: 50%;

            color: #c9a25d;
            font-size: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0, 0, 0, .3);
        }

        @media screen and (max-width: 768px) {
            [data-aos-delay] {
                transition-delay: 0 !important;
            }

            /* [data-aos="fade-left"],
            [data-aos="fade-right"] {
                transform: none !important;
            } */

        }

        /* --- COVER SECTION --- */
        #cover {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: #fff;
            background-image: url('./images/ifpatbg.png');
            background-size: cover;
            background-position: center;
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

        /* --- TOP PATTERN --- */

        .left-top-patern {
            position: absolute;
            top: 0;
            left: -160px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern1 {
            position: absolute;
            width: 370px;
            height: auto;
            left: -40px;
        }

        #patern2 {
            position: absolute;
            width: 200px;
            height: auto;
            left: 32px;
            z-index: -1;
        }

        #patern3 {
            position: absolute;
            width: 185px;
            top: 200px;
            left: 80px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        @keyframes waveFlower {
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

        .right-top-patern {
            position: absolute;
            top: 0;
            right: -160px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern4 {
            position: absolute;
            width: 370px;
            height: auto;
            right: -40px;
        }

        #patern5 {
            position: absolute;
            width: 200px;
            height: auto;
            right: 32px;
            z-index: -1;
        }

        #patern6 {
            position: absolute;
            width: 185px;
            top: 200px;
            right: 80px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        /* --- LOGO SECTION --- */

        .center-logo {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        #patern7 {
            width: 330px;
            height: auto;
        }

        /* --- TITLE SECTION --- */

        .cover-title {
            position: absolute;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
            width: 100%;
            margin-top: -80px;
            ;
        }

        .sub-title {
            font-family: "sacramento", cursive;
            color: #8f7c58;
            font-size: 26px;
            font-feature-settings: "lnum" 1, "pnum" 0;
        }

        .sub-title .num {
            font-size: 0.75em;
            vertical-align: middle;
        }

        .bride-name {
            font-family: "allura", sans-serif;
            color: #bc8a2c;
            font-size: 35px;
        }

        /* #patern8 {
            position: absolute;
            width: 142px;
            height: auto;
            left: -82px;
        }

        #patern9 {
            position: absolute;
            width: 142px;
            height: auto;
            right: -82px;
        } */

        /* --- COVER CONTENT SECTION --- */
        .content-sub-title {
            position: relative;
            top: -18px;
        }

        .cover-sub-title {
            position: absolute;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.5);
            width: 100%;
            bottom: 70px;
        }

        .guest-name {
            font-family: "allura", sans-serif;
            color: #bc8a2c;
            font-size: 32px;
        }

        #patern8 {
            position: absolute;
            width: 120px;
            height: auto;
            left: -26px;
            bottom: 0;
        }

        #patern9 {
            position: absolute;
            width: 120px;
            height: auto;
            right: -26px;
            bottom: 0;
        }

        .open-btn {
            position: relative;
            padding: 14px 22px;
            background: #fff;
            border: 2px solid #c9a25d;
            /* gold */
            border-radius: 40px;
            font-family: 'Cinzel', serif;
            font-size: 16px;
            letter-spacing: 2px;
            color: #8f7c58;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* ornamen kiri kanan */
        .open-btn::before,
        .open-btn::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 18px;
            height: 18px;
            border: 2px solid #c9a25d;
            border-radius: 50%;
            transform: translateY(-50%);
        }

        .open-btn::before {
            left: -12px;
        }

        .open-btn::after {
            right: -12px;
        }

        /* hover effect */
        .open-btn:hover {
            background: #c9a25d;
            color: #fff;
        }

        /* --- BOTTOM PATTERN --- */

        .left-bottom-patern {
            position: absolute;
            bottom: 130px;
            left: 0px;
        }

        #patern10 {
            position: absolute;
            width: 240px;
            height: auto;
            left: -34px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        .right-bottom-patern {
            position: absolute;
            bottom: 130px;
            right: 0px;
        }

        #patern11 {
            position: absolute;
            width: 240px;
            height: auto;
            right: -34px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        /* --- FIRST SECTION --- */
        .first-section {
            position: sticky;
            display: flex;
            justify-content: center;
            height: 100vh;
            width: 100%;
            z-index: 1;
            top: 0;
        }

        .wedding-card {
            background-image: url('./images/ifpatbgwc.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            width: 100%;
            max-width: 340px;
            margin: auto;
            box-sizing: border-box;
            font-family: "sacramento", serif;
            color: #3b3434;
            ;
        }

        /* FRAME FOTO */
        #patern12 {
            position: absolute;
            width: 230px;
            height: auto;
            top: 326px;
            left: 16px;
            z-index: 2;
        }

        #patern13 {
            position: absolute;
            width: 230px;
            height: auto;
            top: 326px;
            right: 16px;
            z-index: 2;
        }

        .photo-frame {
            position: relative;
            height: 454px;
            padding: 10px;
            border: 2px solid #e0c088;
            border-radius: 180px;
            overflow: hidden;
            background: #fff;
        }

        .photo-inner {
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 170px;
        }

        .photo-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content h1 {
            font-size: 32px;
            margin: 0;
        }

        .date-card-container {
            font-family: 'cinzel', serif;
        }

        .content .card-day,
        .content .card-month {
            border-top: 2px solid #3b3434;
            border-bottom: 2px solid #3b3434;
            padding: 0 10px;
            font-size: 20px;
            margin: 0;
        }

        .ring-icon {
            width: 48px;
            height: auto;
        }


        /* --- FIRST INFO SECTION --- */
        .info-first-section .date {
            gap: 15px;
            font-family: 'cinzel', serif;
            color: #edb659;
            font-size: 20px;
        }

        .info-first-section .date .day,
        .info-first-section .date .year,
        .info-first-section .date .month {
            font-size: 35px;
        }

        .info-first-section .date .month {
            border-left: 2px solid #edb659;
            border-right: 2px solid #edb659;
            padding: 0 15px;
        }

        /* --- DIV SECTION --- */
        .div-content {
            overflow-x: hidden;
            width: 100%;
            min-height: 100vh;
            position: relative;
            z-index: 2;
            background: #ffffff;
            background-image: url('./images/ifpatbgwc.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* --- BIO SECTION --- */
        .bio-secetion {
            width: 100%;
            /* min-height: 100vh; */
        }

        #patern14 {
            width: 100%;
            object-position: top;
            object-fit: cover;
            border-radius: 50%;
            height: 322px;
        }

        #patern15 {
            width: 100%;
            object-position: top;
            object-fit: cover;
            border-radius: 50%;
            height: 322px;
        }

        .bio-bride-image,
        .bio-groom-image {
            /* border: 4px solid #edb659; */
        }

        .bio-groom-text h1,
        .bio-bride-text h1 {
            font-family: "sacramento", serif;
            font-size: 28px;
            color: #3b3434;
            ;
        }

        .bio-groom-text p,
        .bio-bride-text p {
            font-family: "cinzel", serif;
            font-size: 14px;
            color: #3b3434;
        }

        .quote-text {
            margin-top: 40px;
            text-align: center;
            font-family: "allura", sans-serif;
            color: #3b3434;
            font-size: 20px;
        }

        /* --- INFORMATION SECTION --- */
        .information-section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-left-top-patern {
            position: absolute;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern16 {
            position: absolute;
            width: 158px;
            height: auto;
            left: 1px;
            top: 3px;
        }

        .info-right-top-patern {
            position: absolute;
            right: -2px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern17 {
            position: absolute;
            width: 180px;
            height: auto;
            right: 0px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        .info-bottom-patern {
            position: relative;
            bottom: 96px;
        }

        .info-left-bottom-patern {
            position: absolute;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            bottom: 42px;
        }

        #patern18 {
            position: absolute;
            width: 180px;
            height: auto;
            left: 0px;
            animation: waveFlower 4s ease-in-out infinite;
            transform-origin: bottom center;
        }

        .info-right-bottom-patern {
            position: absolute;
            right: 1px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern19 {
            position: absolute;
            width: 158px;
            height: auto;
            right: 1px;
            top: 3px;
        }

        /* --- INFO WHERE WHEN --- */
        .info-where-when {
            position: relative;
            text-align: center;
            color: #3b3434;
            font-family: 'cinzel', serif;
        }

        .info-where-when-section {
            position: relative;
            top: 40px;
        }

        .info-where-when h4 {
            font-size: 16px;
        }

        .info-where-when h1 {
            font-size: 30px;
            margin-bottom: 0;
        }

        .info-where-when p {
            font-family: "Style Script", cursive;
            font-size: 18px;
            margin-bottom: 5px;
        }

        hr {
            border: 1px solid #c9a25d;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            opacity: 1;
        }

        /* --- EVENT BOX --- */

        .event-box {
            max-width: 320px;
            margin: auto;
            color: #3b3434;
        }

        .event-box h3 {
            font-size: 20px;
            letter-spacing: 2px;
            margin-bottom: 10px;
            font-family: 'cinzel', serif;
        }

        .event-box .date,
        .event-box .time {
            font-size: 15px;
            opacity: .9;
            font-family: 'cinzel', serif;
            margin-bottom: 0;
        }

        .icon-map {
            font-size: 22px;
        }

        .place {
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
            font-family: 'cinzel', serif;
        }

        /* button */
        .btn-event {
            display: inline-block;
            padding: 10px 26px;
            margin: 6px 0;
            background: #ffffff;
            color: #c9a25d !important;
            border: #c9a25d 1px solid;
            border-radius: 30px;
            font-size: 13px;
            text-decoration: none;
            font-family: 'cinzel', serif;
            letter-spacing: 2px;
        }

        .btn-event.outline {
            background: transparent;
            background: #ffffff;
            color: #c9a25d;
            border: #c9a25d 1px solid;
            font-family: 'cinzel', serif;
            letter-spacing: 2px;
        }

        /* --- LIVE STREAMING SECTION --- */
        .live-streaming-section {
            text-align: center;
            color: #3b3434;
            font-family: 'cinzel', serif;
            margin-top: 72px;
        }

        .live-streaming-section h1 {
            font-size: 20px;
        }

        .live-streaming-section p {
            font-size: 16px;
        }

        .live-streaming-section .btn.join {
            display: inline-block;
            padding: 10px 26px;
            margin: 6px 0;
            background: #ffffff;
            color: #c9a25d !important;
            border: #c9a25d 1px solid;
            border-radius: 30px;
            font-size: 13px;
            text-decoration: none;
            font-family: 'cinzel', serif;
            letter-spacing: 2px;
        }

        /* --- LOVE STORIES SECTION --- */
        .love-stories-section {
            color: #3b3434;
            font-family: 'cinzel', serif;
            text-align: center;
            padding-bottom: 40px;
            margin-top: 72px;

        }

        #patern20 {
            width: 200px;
            height: auto;
        }

        .love-stories-section h1 {
            font-size: 26px;
        }

        .love-stories-section p {
            font-size: 16px;
            margin-bottom: 0;
        }

        .love-stories-section .quote {
            font-family: "Style Script", cursive;
            font-size: 20px;
            /* margin-top: 20px; */
        }

        .timeline-image {
            width: 95px;
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .tl-trigger {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .timeline-item {
            margin: 0 1px;
        }


        .timeline-item:nth-child(odd) .timeline-image {
            border-radius: 120px 20px 20px 120px;
        }

        .timeline-item:nth-child(even) .timeline-image {
            border-radius: 20px 120px 120px 20px;
        }



        .timeline-popup {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s ease;
            z-index: 9999;
        }

        .timeline-popup.active {
            opacity: 1;
            pointer-events: auto;
        }

        .timeline-content {
            background-size: cover;
            background-position: center;
            width: 90%;
            max-width: 420px;
            min-height: 351px;
            border-radius: 16px;
            transform: translateY(100%);
            transition: transform .4s ease;
        }

        .timeline-content-inner {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 24px;
            border-radius: 16px;
            height: 351px;
        }

        .timeline-popup.active .timeline-content {
            transform: translateY(-50%);
        }

        /* GLIMPSE SECTION */
        .glimpes-section {
            color: #3b3434;
            font-family: 'cinzel', serif;
            text-align: center;
            padding-bottom: 40px;
        }

        .glimpes-section h1 {
            font-size: 26px;
        }

        .glimpes-section p {
            font-size: 16px;
            margin-bottom: 0;
        }

        .glimpes-section .quote {
            font-family: "Style Script", cursive;
            font-size: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 10px;
            max-width: 100%;
            padding: 0 10px;
        }

        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* kiri */
        .gallery-main {
            height: 100%;
        }

        /* kanan */
        .gallery-side {
            display: grid;
            grid-template-rows: repeat(3, 1fr);
            gap: 10px;
            min-height: 90px;
        }

        .gallery-bot {
            display: flex;
            flex-direction: column;
            padding: 0 10px;
            max-width: 100%;
            gap: 10px;
        }

        .gallery-bot img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* RSVP SECTION */
        .rsvp-section {
            padding: 60px 20px;
            display: flex;
            justify-content: center;
            font-family: 'Cinzel', serif;
        }

        .rsvp-content {
            background-image: url('./images/ifbgrsvp.png');
            width: 100%;
            max-width: 420px;
            padding: 30px 20px 40px;
            border: 2px solid #c9a25d;
            outline: 2px solid #c9a25d;
            outline-offset: -12px;
            color: #c9a25d;
            text-align: center;
        }

        .rsvp-title {
            font-family: 'Cinzel', serif;
            letter-spacing: 3px;
            margin-bottom: 12px;
        }

        .rsvp-divider {
            border: none;
            border-top: 1px solid #edb659;
            width: 80%;
            margin: 0 auto 15px;
        }

        .rsvp-subtitle {
            font-size: 14px;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        .rsvp-form {
            text-align: left;
        }

        .rsvp-form label {
            display: block;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .rsvp-form label.mt {
            margin-top: 20px;
        }

        .rsvp-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .radio-group label {
            font-size: 14px;
        }

        .rsvp-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #ffffff;
            color: #c9a25d;
            border: #c9a25d 1px solid;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            font-family: 'Cinzel', serif;
            letter-spacing: 2px;
        }

        .rsvp-btn:hover {
            opacity: 0.9;
        }

        /* WISH SECTION */
        .wish-section {
            /* background: #f5efe6; */
            padding: 20px;
            font-family: 'Cinzel', serif;
        }

        .wish-form {
            background-image: url('./images/ifbgrsvp.png');
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 30px 20px 40px;
            border: 2px solid #c9a25d;
            outline: 2px solid #c9a25d;
            outline-offset: -12px;
            color: #c9a25d;
        }

        .wish-btn {
            display: block;
            letter-spacing: 2px;
            width: 100%;
            padding: 12px;
            background: #ffffff;
            color: #c9a25d;
            border: #c9a25d 1px solid;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            font-family: 'Cinzel', serif;
        }

        .wish-content {
            display: flex;
            flex-direction: column;
            gap: 16px;
            padding: 30px 0px 40px;
            color: #c9a25d;
        }

        .wish-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 14px 16px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }

        .wish-card h4 {
            margin: 0;
            color: #8b6b3d;
            font-weight: 600;
        }

        .wish-card p {
            margin: 6px 0 10px;
            color: #555;
        }

        .wish-meta {
            display: flex;
            gap: 16px;
            font-size: 12px;
            color: #999;
        }

        /* GIFT SECTION */

        .top-gift-patern {
            position: relative;
            top: 0;
            left: -18px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern21 {
            position: absolute;
            width: 100px;
            height: auto;
            left: 35px;
            top: 0px;
        }

        .bottom-gift-patern {
            position: relative;
            bottom: 0;
            right: -18px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        #patern22 {
            position: absolute;
            width: 105px;
            height: auto;
            right: 35px;
            bottom: 0px;
        }

        .gift-section {
            font-family: 'Cinzel', serif;
            color: #3b3434;
            text-align: center;
        }

        .gift-content {
            padding: 20px 40px
        }

        .gift-content h1 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .gift-content p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .gift-content .copy-btn {
            display: inline-block;
            letter-spacing: 2px;
            padding: 10px 26px;
            margin: 6px 0;
            background: #fff;
            color: #c9a25d !important;
            border: #c9a25d 1px solid;
            border-radius: 30px;
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
            font-family: 'cinzel', serif;
        }

        /* THANK YOU SECTION */
        .thank-section {
            position: relative;
            background-image: url('./images/ifbgthank.png');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            padding: 40px 20px;
            text-align: center;
            font-family: 'Cinzel', serif;
            color: #ffffff;
        }

        .thank-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            /* 🔥 tingkat gelap */
            z-index: 1;
        }

        .thank-content {
            position: relative;
            z-index: 2;
            /* teks di atas overlay */
            max-width: 600px;
            margin: 0 auto;
        }

        .thank-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .thank-content p {
            color: #fff;
            font-size: 16px;
            line-height: 1.6;
        }

        /* FOOTER SECTION */
        .footer-section {
            background: #edb659;
            padding: 20px;
            text-align: center;
            font-family: 'Cinzel', serif;
            color: #fff;
        }

        .footer-section .footer-logo img {
            width: 48px;
            height: auto;
            margin-bottom: 10px;
        }

        .footer-section p {
            margin-bottom: 0;
            font-size: 12px;
        }
    </style>
</head>

{{-- <body class="no-scroll"> --}}

<body>
    <audio id="bg-music" loop>
        <source src="./audio/wedding-music.mp3" type="audio/mpeg">
    </audio>
    <button id="music-btn" onclick="toggleMusic()"><i class="bi bi-play-fill"></i></button>


    <!-- COVER PAGE -->
    <div id="cover">
        <div class="cover-content">
            <div class="top-patern">
                <div class="left-top-patern" data-aos="fade-right" data-aos-delay="300">
                    <img id="patern1" src="./images/ifpatltp.png" alt="pattern1">
                    <img id="patern2" src="./images/ifpatlm.png" alt="pattern2">
                    <img id="patern3" src="./images/ifpatlm1.png" alt="pattern3">
                </div>
                <div class="right-top-patern" data-aos="fade-left" data-aos-delay="300">
                    <img id="patern4" src="./images/ifpatrtp.png" alt="pattern4">
                    <img id="patern5" src="./images/ifpatrm.png" alt="pattern5">
                    <img id="patern6" src="./images/ifpatrm1.png" alt="pattern6">
                </div>
            </div>
            <div class="center-logo">
                <img id="patern7" src="./images/ifpattp.png" alt="center logo">
            </div>
            <div class="cover-title d-flex flex-row justify-content-between">
                <div>

                </div>
                <div class="text-center">
                    <h5 class="sub-title">Wedding Invitation</h5>
                    <h3 class="bride-name">Fullan <br><span>&</span><br> Annisa</h3>
                </div>
                <div>

                </div>
            </div>
            <div class="cover-sub-title d-flex flex-row justify-content-between">
                <div>

                </div>
                <div class="text-center content-sub-title">
                    <h5 class="sub-title">Saturday, <span class="num">12</span>&nbsp;Mei&nbsp;<span
                            class="num">2026</span>
                    </h5>
                    <h3 class="guest-name">Dear Mr./Mrs <br><span>Abdullah</span></h3>
                    <button class="open-btn mt-4" onclick="openInvitation()">OPEN INVITATION</button>
                </div>
                <div>

                </div>
            </div>
            <div class="bottom-patern">
                <div class="left-bottom-patern" data-aos="fade-up" data-aos-delay="300">
                    <img id="patern10" src="./images/ifpatlb.png" alt="bottom left pattern">
                </div>
                <div class="right-bottom-patern" data-aos="fade-up" data-aos-delay="300">
                    <img id="patern11" src="./images/ifpatrb.png" alt="bottom right pattern">
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <section class="first-section p-3 d-flex flex-column" data-aos="fade-up">
        <div class="wedding-card">
            <div class="photo-bottom-patern">
                <img id="patern12" src="./images/ifpatwclb.png" alt="patern12">
            </div>
            <div class="photo-frame">
                <div class="photo-inner">
                    <img src="./images/ifbride.png" alt="Bride & Groom">
                </div>
            </div>
            <div class="photo-right-patern">
                <img id="patern13" src="./images/ifpatwcrb.png" alt="patern13">
            </div>

            <div class="content d-flex flex-column justify-center mt-4 ">
                <div class="d-flex justify-content-center gap-3">
                    <h1>Fulan</h1>
                    <p class="and">&</p>
                    <h1>Annisa</h1>
                </div>
                <h1 class="text-center insyallah">Insyallah</h1>
                <div class="date-card-container d-flex justify-content-center align-items-center gap-3 mt-3">
                    <p class="card-day col-4 text-center">saturday</p>
                    <h1 class="card-date">12</h1>
                    <p class="card-month col-4 text-center">Mei</p>
                </div>
                <div class="ring-icon-container d-flex justify-content-center mt-3">
                    <img class="ring-icon" src="./images/ifpatring.png" alt="ring icon">
                </div>
            </div>
        </div>
    </section>

    <div class="div-content">
        <section class="bio-secetion pt-3 px-3 d-flex flex-column align-items-center">
            <div class="groom row mx-0" data-aos="fade-right" data-aos-delay="500">
                <div class="bio-groom-image p-2 col-6">
                    <img id="patern14" src="./images/ifgroom.png" alt="groom image">
                </div>
                <div class="bio-groom-text col-6">
                    <h1>Muhammad Fullan</h1>
                    <p>Son Of <br>
                        <span>Samsudin Aliudin</span><br>
                        <span>and</span> <br>
                        <span>Fulana Aminah</span>
                    </p>
                </div>
            </div>
            <div class="bride row mt-4 mx-0" data-aos="fade-left" data-aos-delay="600">
                <div class="bio-bride-text col-6 d-flex flex-column justify-content-end">
                    <h1>Annisa Fatimah</h1>
                    <p>Daughter Of <br>
                        <span>Zein Fauzan</span><br>
                        <span>and</span> <br>
                        <span>Dian Khumairah</span>
                    </p>
                </div>
                <div class="bio-bride-image p-2 col-6">
                    <img id="patern15" src="./images/ifbrides.png" alt="bride image">
                </div>
            </div>
            <div class="quote-text" data-aos="fade-up" data-aos-delay="600">
                <p>"And so the adventure begins..."</p>
                <p>Fullan & Annisa</p>
            </div>

        </section>

        <section class="information-section mt-5" data-aos="fade-up" data-aos-delay="500">
            <div class="information-content">
                <div class="info-top-patern">
                    <div class="info-left-top-patern">
                        <img id="patern16" src="./images/ifpattpl.png" alt="pattern15">
                    </div>
                    <div class="info-right-top-patern">
                        <img id="patern17" src="./images/ifpattpr.png" alt="pattern16">
                    </div>
                </div>
                <div class="info-where-when-section">
                    <div class="info-where-when">
                        <h4>WHERE & WHEN</h4>
                        <h1>WEEDING DAY</h1>
                        <p class="mt-3">"And so the adventure begins..."</p>
                        <p>Fullan & Annisa</p>
                        <hr>
                    </div>
                    <div class="event-box text-center d-flex flex-column align-items-center">
                        <h3>HOLY MATRIMONY</h3>
                        <p class="date">22 March 2025</p>
                        <p class="time">03.00 PM</p>

                        <div class="icon-map"><i class="bi bi-geo-alt-fill"></i></div>

                        <p class="place">
                            <strong>Majestic Chapel - Ritz Carlton</strong><br>
                            Raya Nusa Dua Selatan Lot III, St. Bali
                        </p>

                        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                            <a href="#" class="btn-event">Open Map</a>
                            <a href="#" class="btn-event outline">Add To Calendar</a>
                        </div>
                    </div>
                    <!-- RECEPTION -->
                    <div class="event-box text-center mt-3">
                        <h3>RECEPTION</h3>
                        <p class="date">22 March 2025</p>
                        <p class="time">07.00 PM</p>

                        <div class="icon-map"><i class="bi bi-geo-alt-fill"></i></div>

                        <p class="place">
                            <strong>Sky at Ayana Resort</strong><br>
                            AYANA Resort and Spa – Karang Mas Sejahtera St, Bali
                        </p>

                        <a href="#" class="btn-event">Open Map</a>
                    </div>
                </div>
                <div class="info-bottom-patern">
                    <div class="info-left-bottom-patern">
                        <img id="patern18" src="./images/ifpatbtl.png" alt="pattern18">
                    </div>
                    <div class="info-right-bottom-patern">
                        <img id="patern19" src="./images/ifpatbtr.png" alt="pattern19">
                    </div>
                </div>
            </div>
        </section>

        <section class="live-streaming-section">
            <hr>
            <h1>LIVE STREAMING</h1>
            <p>We will broadcast the wedding ceremony virtually</p>
            <a href="" class="btn join">JOIN</a>
            <hr>
        </section>

        <section class="love-stories-section">
            <div class="pattern-first-section mb-2">
                <img id="patern20" src="./images/ifpat.png" alt="pattern20" data-aos="fade-down"
                    data-aos-delay="600">
            </div>
            <div class="love-stories-content text-center">
                <p>The Journey</p>
                <h1>Our Love Story</h1>
                <div class="love-stories-timeline d-flex justify-content-center align-items-center mt-3 mb-3"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="timeline-item">
                        <div class="timeline-image">
                            <img class="tl-trigger" data-bg="./images/iftl1.png" src="./images/iftimeline1.png"
                                alt="">
                        </div>
                        <div class="timeline-popup">
                            <div class="timeline-content">
                                <div class="timeline-content-inner d-flex flex-column justify-content-center">
                                    <h3>First Meeting</h3>
                                    <p class="date">22 March 2025</p>
                                    <p class="quote">"And so the adventure begins..."</p>
                                    <p class="place">Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-image">
                            <img class="tl-trigger" data-bg="./images/iftl1.png" src="./images/iftimeline2.png"
                                alt="">
                        </div>
                        <div class="timeline-popup">
                            <div class="timeline-content">
                                <div class="timeline-content-inner d-flex flex-column justify-content-center">
                                    <h3>Engagement</h3>
                                    <p class="date">10 June 2025</p>
                                    <p class="quote">"I can't wait to spend the rest of my life with you."</p>
                                    <p class="place">Bandung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-image">
                            <img class="tl-trigger" data-bg="./images/iftl2.png" src="./images/iftimeline3.png"
                                alt="">
                        </div>
                        <div class="timeline-popup">
                            <div class="timeline-content">
                                <div class="timeline-content-inner d-flex flex-column justify-content-center">
                                    <h3>First Vacation</h3>
                                    <p class="date">15 August 2025</p>
                                    <p class="quote">"The first time we went on vacation together, I knew I was
                                        falling in
                                        love."</p>
                                    <p class="place">Bali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-image">
                            <img class="tl-trigger" data-bg="./images/iftl2.png" src="./images/iftimeline4.png"
                                alt="">
                        </div>
                        <div class="timeline-popup">
                            <div class="timeline-content">
                                <div class="timeline-content-inner d-flex flex-column justify-content-center">
                                    <h3>Wedding Day</h3>
                                    <p class="date">22 March 2025</p>
                                    <p class="quote">"Today is the day we've been waiting for."</p>
                                    <p class="place">Jakarta</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="quote">And so the adventure begins...</p>
                <p class="quote">Fullan & Annisa</p>
        </section>

        <section class="glimpes-section">
            <div class="pattern-first-section mb-2">
                <img id="patern20" src="./images/ifpat.png" alt="pattern20" data-aos="fade-down"
                    data-aos-delay="600">
            </div>
            <div class="glimpes-content text-center">
                <p>glimpses of</p>
                <h1>Memorable Moments</h1>
                <div class="gallery my-3">
                    <div class="gallery-main" data-aos="fade-left" data-aos-delay="600">
                        <img src="./images/ifgallery1.png" alt="moment 1">
                    </div>
                    <div class="gallery-side" data-aos="fade-right" data-aos-delay="600">
                        <img src="./images/ifgallery2.png" alt="moment 2">
                        <img src="./images/ifgallery3.png" alt="moment 3">
                        <img src="./images/ifgallery4.png" alt="moment 4">
                    </div>
                </div>
                <div class="gallery-bot mb-3">
                    <img src="./images/ifgallery5.png" alt="moment 5" data-aos="fade-up" data-aos-delay="600">
                    <img src="./images/ifgallery6.png" alt="moment 6" data-aos="fade-up" data-aos-delay="600">
                    <img src="./images/ifgallery7.png" alt="moment 7" data-aos="fade-up" data-aos-delay="600">
                    <img src="./images/ifgallery8.png" alt="moment 8" data-aos="fade-up" data-aos-delay="600">
                </div>
                <div class="mb-3">
                    <iframe width="100%" src="https://www.youtube.com/embed/PWcI8eXynmM?si=SxQhQl-VdWL_rayE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <p class="quote">And so the adventure begins...</p>
                <p class="quote">Fullan & Annisa</p>
        </section>

        <hr>

        <section class="rsvp-section">
            <div class="rsvp-content">
                <h2 class="rsvp-title">RSVP</h2>
                <hr class="rsvp-divider">
                <p class="rsvp-subtitle">Please Confirm Your Attendance</p>

                <form class="rsvp-form">
                    <label>Name</label>
                    <input type="text" placeholder="Your Name">

                    <label class="mt">Attend</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="attend" value="yes">
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="attend" value="no">
                            No
                        </label>
                    </div>

                    <button type="submit" class="rsvp-btn">Submit</button>
                </form>
            </div>
        </section>

        <section class="wish-section">
            <form class="wish-form" id="wishForm">
                <h2>MAKE A WISH</h2>
                <input type="text" id="nameInput" placeholder="Your Name" required>
                <textarea id="wishInput" placeholder="Your Wish" required></textarea>
                <button type="submit" class="wish-btn">Submit</button>
            </form>
            <div class="wish-content" id="wishContent"></div>
        </section>

        <section class="gift-section">
            <div class="top-gift-patern">
                <img id="patern21" src="./images/ifgt.png" alt="pattern21">
            </div>
            <div class="gift-content">
                <h1>Share the Love</h1>
                <p>Your prayers & blessings at our wedding is enough as a gift, but if you want to give more, we are
                    happy to receive it and it will complement our happiness even more
                </p>
                <div class="bank-details my-2 d-flex justify-content-around">
                    <div class="bank-groom">
                        <p>Bank BCA</p>
                        <p>123 456 789</p>
                        <p>A/N Romeo Lukaku</p>
                        <button class="copy-btn">Copy</button>
                    </div>
                    <div class="bank-bride">
                        <p>Bank BRI</p>
                        <p>987 654 321</p>
                        <p>A/N Juliet Robert</p>
                        <button class="copy-btn">Copy</button>
                    </div>
                </div>
                <div class="gifted-address">
                    <i class="bi bi-gift"></i>
                    <p>Or you can send your gift to:</p>
                    <p>Fullan & Annisa, 123 Wedding St, Jakarta, Indonesia</p>
                    <button class="copy-btn">Confirm</button>
                </div>
            </div>
            <div class="bottom-gift-patern">
                <img id="patern22" src="./images/ifgb.png" alt="pattern22">
            </div>
        </section>

        <section class="thank-section mt-5">
            <div class="thank-content">
                <h2>Thank You</h2>
                <p>We are grateful for your presence and blessings on our special day. Your love and support mean the
                    world to us as we embark on this new journey together.</p>
                <p>With love, <br>Fullan & Annisa</p>
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
            // animasi cover
            document.getElementById('cover').classList.add('slide-up');

            // buka scroll
            document.body.classList.remove('no-scroll');

            // play music
            const music = document.getElementById('bg-music');
            music.volume = 0.6; // opsional
            music.play().catch(err => {
                console.log('Autoplay blocked:', err);
            });
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

        document.querySelectorAll('.tl-trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const popup = trigger.closest('.timeline-item')
                    .querySelector('.timeline-popup');
                const content = popup.querySelector('.timeline-content');

                const bg = trigger.dataset.bg;
                content.style.backgroundImage = `url('${bg}')`;

                popup.classList.add('active');
                document.body.classList.add('no-scroll');
            });
        });

        document.querySelectorAll('.close-popup').forEach(btn => {
            btn.addEventListener('click', () => {
                btn.closest('.timeline-popup').classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        });

        // klik area gelap
        document.querySelectorAll('.timeline-popup').forEach(popup => {
            popup.addEventListener('click', e => {
                if (e.target === popup) {
                    popup.classList.remove('active');
                    document.body.classList.remove('no-scroll');
                }
            });
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
        wishForm.addEventListener("submit", function(e) {
            e.preventDefault();

            const name = nameInput.value.trim();
            const message = wishInput.value.trim();

            if (!name || !message) return;

            const now = new Date();
            const date = now.toLocaleDateString("en-US", {
                month: "long",
                day: "numeric",
                year: "numeric"
            });

            const time = now.toLocaleTimeString("en-US", {
                hour: "numeric",
                minute: "2-digit"
            });

            const newWish = {
                name,
                message,
                date,
                time
            };

            wishes.unshift(newWish); // terbaru di atas
            localStorage.setItem("wishes", JSON.stringify(wishes));

            renderWishes();
            wishForm.reset();
        });

        // Render pertama kali
        renderWishes();
    </script>


</body>

</html>
