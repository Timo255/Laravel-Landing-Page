<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive HTML Email Template</title>
    <style type="text/css">
        body {
            Margin: 0;
            margin: 0;
            padding: 0;
            background-color: #F9F9F9;
        }

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        .main {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            background-color: #FFFFFF;
        }

        .wrapper {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
        }

        .two-column {
            width: 100%;
            /* display: flex;
            justify-content: center;
            gap: 7; */
        }

        .two-column .column {
            width: 264px;
            display: inline-block;
            margin-bottom: 80px;
            /* order: 2;
            align-self: flex-start;
            margin-top: 15px; */
        }

        .two-column .column-img {
            width: 223px;
            display: inline-block;
        }

        .two-column .firstColumn-row2-text {
            margin-bottom: 125px;
        }

        .two-column-last {
            padding-top: 40px;
        }

        .two-column-last .last-column-text {
            width: 150px;
            display: inline-block;
            margin-left: 30px;
        }

        .two-column-last .last-column-img {
            width: 267px;
            display: inline-block;
            margin-left: 45px;
        }

        .welcomeImg5 {
            position: relative;
            top: 10px;
        }

        @media screen and (max-width: 600px) {
            .wrapper {
                max-width: 300px !important;
                width: 100% !important;
                margin: 0 auto !important;
            }

            .Started1 {
                padding-bottom: 50px !important;
            }

            .Started2 {
                padding-bottom: 70px !important;
            }

            .two-column .column {
                display: block !important;
                margin-bottom: 0px !important;
            }

            .two-column .column-img {
                display: block !important;
            }

            .two-column .firstColumn-row2-text {
                margin-bottom: 0px !important;
            }

            .two-column-last .last-column-text {
                width: 150px;
                display: block !important;
                margin-left: 80px !important;
                margin-bottom: 20px;
            }

            .two-column-last .last-column-img {
                width: 267px;
                display: block !important;
                margin-left: 30px !important;
            }

            .welcomeImg5 {
                position: relative;
                top: 10px;
            }

            .ggIcon {
                padding-bottom: 0px !important;
            }
        }

        /* @media screen and (max-width: 400px) {

  } */
    </style>
</head>

<body>

    <table class="main" style="padding-bottom: 10px;">

        <!-- Logo section -->
        <tr>
            <td style="background-color: #F9F9F9;">
                <table class="wrapper">
                    <tr>
                        <td style="text-align: center;">
                            <a href="#"><img src="https://i.ibb.co/TB12msT/Logo.png" alt="Logo"
                                    title="logo"></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- welcome section -->
        <tr style="background-color: #F9F9F9;">
            <td style="background-color: #FFD3E0; border-radius: 20px 20px 0 0;">
                <table class="wrapper">
                    <tr>
                        <td style="text-align: center;">
                            <img src="https://i.ibb.co/MPNHvYN/welcome1.png" alt="banner" title="banner"
                                width="300" style="padding-top: 27px; padding-bottom: 22px;">
                            <p style="font-size: 30px; font-weight: bold; color: #000000;">Hi {{ $userInfo['first_name'] }},<br>welcome to
                                Mail!</p>
                            <p style="font-size: 17px; color: #000000; padding-bottom: 40px;">Thank you for subscribing!
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Let's Get Started -->
        <tr>
            <td>
                <table class="wrapper">
                    <tr>
                        <td style="padding-bottom: 40px;">
                            <p
                                style="font-size: 20px; font-weight: bold; text-align: center; padding-top: 30px; padding-bottom: 20px;">
                                Let's Get Started</p>
                            <table width="100%">
                                <tr>
                                    <td class="two-column Started1">
                                        <table class="column firstColumn-row1-text">
                                            <tr>
                                                <td>
                                                    <p style="font-size: 17px; font-weight: bold; color: #000000;">Call
                                                        to action 1</p>
                                                    <p style="font-size: 15px; line-height: 30px; color: #000000;">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Iure facere pariatur iusto
                                                        autem minus delectus
                                                    </p>
                                                    <a href="#" class="btn"
                                                        style="font-size: 15px; font-weight: bold; color: #f79eb7;">Create
                                                        an account ---<span
                                                            style="position: relative; top: 1px;">></span></a>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="column-img firstColumn-row1-img">
                                            <tr>
                                                <td>
                                                    <img src="https://i.ibb.co/ZcB9X4S/welcome2.png" alt=""
                                                        style="padding-bottom: 50px;">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table width="100%">
                                <tr>
                                    <td class="two-column Started2">
                                        <table class="column-img firstColumn-row2-img">
                                            <tr>
                                                <td>
                                                    <img src="https://i.ibb.co/CJ89XNr/welcome3.png" alt=""
                                                        style="padding-bottom: 50px;">
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="column firstColumn-row2-text">
                                            <tr>
                                                <td>
                                                    <p style="font-size: 17px; font-weight: bold; color: #000000;">Call
                                                        to action 2</p>
                                                    <p style="font-size: 15px; line-height: 30px; color: #000000;">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Iure facere pariatur iusto
                                                        autem minus delectus
                                                    </p>
                                                    <a href="#" class="btn"
                                                        style="font-size: 15px; font-weight: bold; color: #f79eb7;">Sync
                                                        your data ---<span
                                                            style="position: relative; top: 1px;">></span></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table width="100%">
                                <tr>
                                    <td class="two-column">
                                        <table class="column firstColumn-row3-text">
                                            <tr>
                                                <td>
                                                    <p style="font-size: 17px; font-weight: bold; color: #000000;">Call
                                                        to action 3</p>
                                                    <p style="font-size: 15px; line-height: 30px; color: #000000;">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Iure facere pariatur iusto
                                                        autem minus delectus
                                                    </p>
                                                    <a href="#" class="btn"
                                                        style="font-size: 15px; font-weight: bold; color: #f79eb7;">Start
                                                        collaborating ---<span
                                                            style="position: relative; top: 1px;">></span></a>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="column-img firstColumn-row3-img">
                                            <tr>
                                                <td>
                                                    <img src="https://i.ibb.co/86Y2Bn1/welcome4.png" alt=""
                                                        style="padding-bottom: 50px;">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Empty Bar -->
        <tr>
            <td width="100%" height="50px" style="background-color: #F9F9F9; border: none;"></td>
        </tr>

        <!-- Get Mobile App Section -->
        <tr style="background-color: #F9F9F9;">
            <td style="background-color: #FFD3E0; border-radius: 20px 20px 0 0;" class="mobileApp">
                <table class="wrapper">
                    <tr>
                        <td class="two-column-last">
                            <table class="last-column-text">
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td class="lastColumnTxt" style="text-align: center;">
                                                    <p
                                                        style="font-size: 24px; font-weight: bold; color: #000000; text-align: center;">
                                                        Get Our<br>Mobile App</p>
                                                    <a href="#"><img src="https://i.ibb.co/drWFkVP/ap.png"
                                                            alt="" style="padding-bottom: 15px;"></a>
                                                    <a href="#"><img src="https://i.ibb.co/Ms2GVDN/gg.png"
                                                            alt="" style="padding-bottom: 90px;"
                                                            class="ggIcon"></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table class="last-column-img">
                                <tr>
                                    <td>
                                        <img src="https://i.ibb.co/pQcR0v3/welcome5.png" alt=""
                                            class="welcomeImg5">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- footer -->
        <tr style="background-color: #F9F9F9;">
            <td style="margin-bottom: 40px; border-radius: 0 0 20px 20px; background-color: #FFFFFF;">
                <table class="wrapper">
                    <tr>
                        <td style="padding-top: 40px; padding-bottom: 20px; text-align: center;">
                            <p style="font-size: 15px; padding-bottom: 10px;">
                                If you have any questions, feel free message us at support@mail.com.All right reserved
                            </p>
                            <p style="font-size: 15px; padding-bottom: 10px;">Update email preference or unsubscribe
                            </p>
                            <p style="font-size: 15px; padding-bottom: 20px;">123 Street Road, City, State 555555</p>
                            <p style="font-size: 15px; padding-bottom: 30px;">Terms of use | Privacy Policy</p>
                            <table width="100%">
                                <tr>
                                    <td>
                                        <a href="#"><img src="https://i.ibb.co/qN1fBZV/facebook.png"
                                                alt="facebook" title="facebook" style="padding: 10px;"></a>
                                        <a href="#"><img src="https://i.ibb.co/TtJQFHc/twitter.png"
                                                alt="twitter" title="twitter" style="padding: 10px;"></a>
                                        <a href="#"><img src="https://i.ibb.co/MMHD03N/youtube.png"
                                                alt="youtube" title="youtube" style="padding: 10px;"></a>
                                        <a href="#"><img src="https://i.ibb.co/LdWvCsF/Linkein.png"
                                                alt="Linkedin" title="Linkedin" style="padding: 10px;"></a>
                                        <a href="#"><img src="https://i.ibb.co/vs6ZzHb/instagram.png"
                                                alt="instagram" title="instagram" style="padding: 10px;"></a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
