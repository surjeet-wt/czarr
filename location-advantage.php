<style>
    .advtdetail {
    padding-top: 140px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
    .advtdetail li{list-style-type: none; padding-bottom: 35px; width:47%; margin:0;}
    .advtdetail li::marker{ font-size: 1.2rem; font-weight: bolder;}
    .advtdetail li{font-size: 14px; color: #fff;transform: translate(0px, 0px);
    visibility: inherit;position: relative}
    .advtbtn{position: absolute !important; bottom: 0;}
    .contloc{padding-top: 3px;}
    .adtltdets{display: flex; align-items: flex-start;position: relative}
    /*.advtdetail li::after{content: "";border-bottom: 1px solid; opacity: 0.3; position: absolute; bottom: 17px; width: 100%;}*/
    .adtltdets .adtimg{width: 10%;}
    .adtltdets .adtimg img{width: 100%; height: 40px;}
    .adtcont{width: 90%;padding-bottom: 5px; padding-left: 20px;}
    .contlocnew{margin-top: 30px !important; margin: 0; }
    .wtrlt{top: -140px !important;}
    .maploc {margin-top:30px;}
    
     .advtdetail li:after{
    bottom: 17px;
    left: 0;
    width: 100%;
    height: 1px;
    content: "";
    position: absolute;
    opacity: 0.3;
    background: #fff;
}

 .advtdetail li{
  
    position: relative;
    overflow: hidden;
}

 .advtdetail li:hover::after {
  animation: sip 0.5s ease-in-out, sup 0.5s  0.5s ease-in-out;
}
    
    
    @-webkit-keyframes sip {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(100%);
  }
}
@-webkit-keyframes sup {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0%);
  }
  
  @media(max-width: 767px){
      .locationbanner{background: url(images/location-mob.jpg) no-repeat;}
  }
}
</style>
<?php include 'header.php';?>

<div class="scroller" id="scroller">
        <div class="banner locationbanner box" style="">
            <div class="container">
                <div class="mn_c_ln"></div>
                <h1 class="wow animate__animated animate__fadeInUp">
                    LOCATION
                </h1>
            </div>
        </div>
        <!-- banner -->


        <div class="about grey pad80 relative box">
            <div class="container">
                <!--<span class="small-head">CHAPTER 1. WELCOME TO CZARR HYDE PARK RESORTS</span>-->
                <h2 class="h4 titleGreathorned ">
                    RIGHT IN THE HEART <br> OF THE CITY
                </h2>
                <div class="watermark animated_svg wtrlt">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1366.3 578.88"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.5px;}.cls-2{fill:#f7f0eb;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M.11,578.65C145,508.44,258,457,418.3,457.92,640,459.14,796.3,442.17,927,368.73c164.24-92.25,318.8-204,439.07-346.4"/><path class="cls-2" d="M1318.89,48.36c-6.82-7.64-6.93-18.95-4-28.27l.19.28,2.34,3.56-.3.09c0-6.22.2-14.33,5.16-18.78l.19-.15.12.23,1.58,3.23-.36,0A24.18,24.18,0,0,1,1337.74,0a20.62,20.62,0,0,1,2.65,6.62c1.56,6.79.52,14-1.57,20.53l-.22-.24c1.75-.48,3.86-.77,5.27-1.77,0,.13.25.19.31.07s0,0,0,0-.1.4-.13.54a44.12,44.12,0,0,1-2.76,8.71,8.67,8.67,0,0,1-3.25,4.08l-.06-.27,3.55,0h.23l-.11.2c-3.77,6.14-10,12.11-17.71,11.68a15.26,15.26,0,0,0,5.45-.82,22.14,22.14,0,0,0,8.8-6.52,32.12,32.12,0,0,0,3.23-4.47l.11.2h-4.12c1.78-.76,2.8-2.53,3.6-4.22a46.28,46.28,0,0,0,2.83-9.21c0-.08.14-.26.26-.17.85,1-5,2.19-5.74,2.4,2.08-6.6,3.16-13.8,1.56-20.62a20.71,20.71,0,0,0-2.5-6.3l.25.1a22.57,22.57,0,0,0-3.86,1.16A23.83,23.83,0,0,0,1323.94,9l-.14-.31-1.57-3.23.31.07c-4.93,4.39-5.11,12.83-5.07,19-.1-.16-2.45-3.74-2.63-4l.26,0c-2.87,9.16-2.8,20.27,3.79,27.86Z"/><path class="cls-2" d="M1324.89,68.48c-3.61-13.38-3.94-28.62,2.84-41.07a36.47,36.47,0,0,1,3.4-4.95c-9.68,13.08-9.63,30.73-6.24,46Z"/><path class="cls-2" d="M801.9,398.25c-3.26-10.79,1.78-22.21,9-30.2l.21-.25.05.33.7,4.7-.31,0c2.87-6.2,7-14.48,14-16.56l.24-.06v.25l.08,4-.32-.18a27,27,0,0,1,8.77-2.58,26.47,26.47,0,0,1,9.3.51c.67,5.26-.79,10.5-2.92,15.25a50.72,50.72,0,0,1-8.75,12.7l-.1-.31c.94.2,1.89.38,2.85.53s2.31.48,3.34.13a.15.15,0,0,0,0,.17c.09,0,.13.07.21,0h0c-.1.12-.29.36-.38.49a48.6,48.6,0,0,1-6.89,7.51c-1.51,1.22-3.18,2.48-5.19,2.6L826,397l3.59,1.69.21.09-.19.13c-6.69,4.45-15.83,7.56-23.4,3.51a16.75,16.75,0,0,0,5.9,1.74,24.69,24.69,0,0,0,12-2.45,35.41,35.41,0,0,0,5.38-3l0,.23-3.6-1.68-.51-.24.57,0c1.91-.13,3.56-1.37,5-2.55a53.44,53.44,0,0,0,7.26-8.06c.21-.16.37.12.24.26a1,1,0,0,1-.76.3,28.64,28.64,0,0,1-6.11-.84l.21-.25c6.71-7.38,12.5-17.13,11.48-27.44l.19.2a25.72,25.72,0,0,0-9-.5,26,26,0,0,0-8.93,2.65v-.34l-.06-4,.25.2c-7,2-11.26,10.63-14.06,16.81,0-.27-.69-4.88-.75-5.27l.25.08c-7.22,7.93-12.37,19.22-9.25,30Z"/><path class="cls-2" d="M798.5,421.44c2.68-15.23,9.51-30.8,22.2-40.23a41.9,41.9,0,0,1,5.77-3.42c-16,8.66-24.25,26.57-28,43.65Z"/><path class="cls-2" d="M1027.78,285.1c-5.19-10-2.36-22.16,3.3-31.35l.15-.28.11.31,1.56,4.49-.31,0c1.68-6.62,4.23-15.53,10.73-18.87l.23-.1,0,.24.82,3.94-.34-.12a27.23,27.23,0,0,1,17.37-5.38c1.64,5.05,1.17,10.46,0,15.53a50.61,50.61,0,0,1-6.26,14.1l-.15-.29c1,0,1.93,0,2.89,0s2.36,0,3.31-.5c0,0,0,0,0,0a.15.15,0,0,0,.07.14c.1,0,.15.05.21,0s0,0,0,0-.21.42-.29.56a48.87,48.87,0,0,1-5.37,8.66c-1.26,1.47-2.67,3-4.63,3.51v-.27l3.84,1,.22.06-.16.16c-5.76,5.61-14.16,10.35-22.35,7.78a16.66,16.66,0,0,0,6.12.61,24.53,24.53,0,0,0,11.31-4.62,35.13,35.13,0,0,0,4.73-3.95l.06.22-3.84-1-.56-.14.56-.13c3.68-1.25,5.7-5.13,7.69-8.23.85-1.41,1.63-3,2.41-4.48.18-.19.38.06.29.22a1,1,0,0,1-.7.43,28.84,28.84,0,0,1-6.16.31l.17-.28c5.22-8.5,9.11-19.15,6.2-29.09l.22.16a26,26,0,0,0-8.89,1.16,26.29,26.29,0,0,0-8.29,4.25l-.07-.33-.81-3.93.28.14c-6.45,3.29-9.09,12.54-10.7,19.12-.1-.26-1.58-4.67-1.72-5l.27,0c-5.63,9.12-8.6,21.17-3.55,31.19Z"/><path class="cls-2" d="M1028.73,308.51c-.19-15.46,3.65-32,14.38-43.63a41.42,41.42,0,0,1,5-4.43c-14.09,11.46-18.91,30.6-19.41,48.06Z"/><path class="cls-2" d="M124.84,499.13c-3.31-10.95,1.8-22.53,9.16-30.63l.21-.25,0,.33.7,4.76-.3,0c2.91-6.29,7.12-14.69,14.23-16.8l.25-.06v.25l.08,4.08-.31-.19a27.41,27.41,0,0,1,8.9-2.61,26.91,26.91,0,0,1,9.42.52c.68,5.33-.8,10.64-3,15.46a51.28,51.28,0,0,1-8.88,12.88l-.09-.31c.95.21,1.92.39,2.88.54,1.12.11,2.35.49,3.39.13,0,0,0,0,0,0a.18.18,0,0,0,0,.16c.1.05.14.07.21,0s0,0,0,0l-.39.5a49.51,49.51,0,0,1-7,7.62c-1.53,1.23-3.22,2.51-5.26,2.63l.05-.26,3.64,1.71.21.1-.19.13c-5.2,3.45-11.43,5.9-17.76,5.39a16.92,16.92,0,0,1-6-1.83c5.68,3,12.5,1.87,18.13-.72a35.54,35.54,0,0,0,5.45-3.06l0,.23-3.65-1.7-.51-.24.57,0c3.9-.55,6.65-4,9.21-6.75,1.11-1.26,2.19-2.71,3.24-4,.21-.16.37.13.24.26s-.51.27-.77.3a29.3,29.3,0,0,1-6.19-.85l.21-.25c6.8-7.49,12.67-17.38,11.64-27.83l.19.19a26.23,26.23,0,0,0-9.09-.5,26.66,26.66,0,0,0-9.05,2.68v-.34l-.07-4.07.25.19c-7,2.07-11.41,10.79-14.25,17.05,0-.26-.7-4.95-.77-5.33l.26.08c-7.33,8-12.55,19.49-9.38,30.43Z"/><path class="cls-2" d="M121.39,522.64c2.72-15.44,9.64-31.23,22.52-40.79a42,42,0,0,1,5.84-3.48c-16.2,8.78-24.59,27-28.36,44.27Z"/><path class="cls-2" d="M420.17,475.39c1.85,10,10.6,17.09,19.67,20.6l-.19.19c-.1-.33-1.5-4.49-1.54-4.63,4.84,3.91,11.7,9.12,18.25,8l-.14.29-1.57-3.29-.15-.3a24,24,0,0,0,15.41-5.5l-.08.25a21,21,0,0,0-3.4-6c-4.39-5.57-10.78-9.27-17.32-11.79.63-.44,5.27-4.32,5.52-3,0,.15-.22.14-.29.1a45.6,45.6,0,0,0-9.08-3.58c-1.84-.44-3.9-.75-5.62.18l.35-.44,2.25-2.82.08.21a32.51,32.51,0,0,0-5.58-.27c-5.54.16-11.46,2-14.8,6.65a15.3,15.3,0,0,1,4-3.86c4.87-2.94,10.83-3.46,16.38-2.78.31,0,.24,0,.08.21l-2.23,2.83-.17-.21c1.7-.72,3.57-.37,5.29,0a44.44,44.44,0,0,1,8.63,3.31l.51.25h0c-.13,0-.25.21-.14.29-1.66.47-3.25,2-4.73,3.05l-.05-.32c6.52,2.49,12.85,6.2,17.25,11.72a21,21,0,0,1,3.57,6.27,24.59,24.59,0,0,1-15.54,5.65l.2-.3,1.56,3.29.11.23-.24.06c-6.65,1.12-13.19-3.86-18.12-7.78l.25-.17,1.34,4.1.1.32-.3-.13c-9.12-3.55-17.84-10.79-19.56-20.88Z"/><path class="cls-2" d="M408,457.94c10,12.34,23.92,23.52,40.39,24.12a37.41,37.41,0,0,1-6.07-.44c-14.14-2.49-26-12.38-34.32-23.68Z"/></g></g stroke-linecap="round" stroke-linejoin="round"></svg>
                </div>

                <div class="row">
                    <div class="col-md-5 offset-7">
                        <p class="wow animate__animated animate__fadeInUp contloc contlocnew">With established social infrastructures well-within reach, Hyde Park Resorts is a haven of convenience. No landmark is far from home for you due to well-connected roadways.</p>
                    </div>
                    <div class="col-md-12 offset-12">
                            <ul class="advtdetail">
                               
                                
                                <li>
                                    <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/2.svg">
                                        </div>
                                        <div class="adtcont">
                                           <span>Close to major hospitals like Medanta-The Medicity, Fortis, Max, Artemis and many more which will be a great advantage at the time of medical emergency
</span>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                    <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/3.svg">
                                        </div>
                                        <div class="adtcont">
                                          <span>Close to renowned educational institutes & international schools like St. Xavier’s, DPS International, GD Goenka, Pathways World, which makes it a great choice for the parents</span>
</span>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                 <li class=""> 
                                    <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/1.svg" class="img-fluid">
                                        </div>
                                        <div class="adtcont">
                                            <span>Close to the proposed Metro corridor in Gurgaon</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                     <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/4.svg">
                                        </div>
                                        <div class="adtcont">
                                          <span>Just 30 minutes’ drive away from Indira Gandhi International Airport</span>
                                        </div>
                                    </div>
                                   
                                </li>
                                
                                <li>
                                     <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/6.svg">
                                        </div>
                                        <div class="adtcont">
                                            <span>Easily accessible from Golf Course Extension Road</span>
                                        </div>
                                    </div>
                                    
                                </li>
                                <li>
                                     <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/7.svg">
                                        </div>
                                        <div class="adtcont">
                                            <span>5 minutes away from upcoming commercial hub on Sohna Road</span>
                                        </div>
                                    </div>
                                    
                                </li>
                                
                                <li>
                                    <div class="adtltdets">
                                        <div class="adtimg">
                                            <img src="images/icon/5.svg">
                                        </div>
                                        <div class="adtcont">
                                            <span>Conveniently located near NH-8 which makes it connected to other parts of the city</span>
                                        </div>
                                    </div>
                                  
                                </li>
                            </ul>
                            
                            
              <div class="maploc">
                  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224568.30237037074!2d76.84966368013714!3d28.422885864053818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1651060909924!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>              
                            
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->



  



        

<?php include 'footer.php';?>
