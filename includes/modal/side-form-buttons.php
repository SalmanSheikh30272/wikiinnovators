<!-- Side Form Buttons Start Here -->
<div class="side-form-wrap">
    <div class="float-btn-main">
        <a href="javascript:;" class="float-chat-btn" onclick="javascript:void(Tawk_API.toggle())">
            <i class="fa fa-comment"></i>
            <span>Chat With Us</span>
        </a>
        <a href="tel:(+1)-123-456789" class="float-call-btn">
            <i class="fa fa-phone"></i>
            <span>+1 (929) 307-0923</span>
        </a>
    </div>
    <div class="float-side-form">
        <div class="float-form-clickbtn">
            <button class="sideform-click-btn">Click Here!</button>
            <button class="sideform-clickremove-btn">Close Here!</button>
        </div>
        <div class="float-sideform-inner">
            <h3>Contact With Us</h3>
            <form action="https://leads.infinityprojectmanager.com/brand/deftwriters/lead" method="GET">
                <input type="hidden" name="brand_name" value="deftwriters.com">
                <input type="hidden" id="lead_area" name="lead_area" value="http://www.deftwriters.com">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="number" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <div class="form-group form-group-last">
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Side Form Buttons End Here -->

<!-- Stick Website Buttons Start Here -->
<div class="stick-website-wrap">
    <a href="tel:(+1)-123-456789" class="stick-call-btn">
        <i class="far fa-headset"></i>
    </a>
    <button class="stick-chat-btn" onclick="javascript:void(Tawk_API.toggle())">
        <i class="fas fa-comment-alt-smile"></i>
    </button>
</div>
<!-- Stick Website Buttons End Here -->

<style>
/* Side Form Buttons Css Start Here */
.side-form-wrap{}
.side-form-wrap .float-btn-main{
    position: fixed;
    top: 17%;
    right: -260px;
    width: 300px;
    transition: all .3s ease-in-out;
    z-index: 999;
}
.float-btn-main a{
    position: relative;
    right: 0;
    background: #f5f5f5;
    width: 300px;
    border: 3px solid #EEE3FF;
    border-radius: 10px 0px 0px 10px;
    padding: 0;
    margin: 0 0 15px;
    display: flex;
    align-items: center;
    transition: all.3s ease-in-out;
}
.float-btn-main a i{
    background: linear-gradient(90deg, rgba(181,139,255,1) 0%, rgba(137,70,242,1) 100%);
    color: #fff;
    font-size: 20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 10px 0px 0px 10px;
    text-align: center;
    margin: 0 10px 0 0;
}
.float-btn-main a span{
    color: #392657;
    font-size: 18px;
    margin: 0;
}
.float-btn-main a.float-chat-btn:hover{
    right: 260px;
}
.float-btn-main a.float-call-btn:hover{
    right: 260px;
}
.side-form-wrap .float-side-form{
    position: fixed;
    top: 17%;
    right: -360px;
    width: 400px;
    display: flex;
    transition: all .5s ease-in-out;
    z-index: 998;
}
.side-form-wrap .float-side-form.active{
    right: 0;
    transition: all .5s ease-in-out;
}
.float-side-form .float-form-clickbtn{
    position: relative;
    background: linear-gradient(90deg, rgba(181,139,255,1) 0%, rgba(137,70,242,1) 100%);
    width: 40px;
    height: 275px;
    border: 2px solid #b58bff;
    border-radius: 10px 0px 0px 10px;
    box-shadow: none;
    padding-top: 0;
    margin: 123px 0 0;
    cursor: pointer;
    z-index: 999;
    overflow: hidden;
}
.float-form-clickbtn button{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: none;
    color: #fff;
    font-size: 16px;
    border: none;
    outline: none;
    text-transform: uppercase;
    white-space: pre;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .5s ease-in-out;
    z-index: 999;
}
.float-form-clickbtn button.sideform-click-btn{
    transform: rotate(-90deg);
    opacity: 1
}
.float-side-form.active .float-form-clickbtn button.sideform-click-btn{
    transform: rotate(180deg);
    opacity: 0;
}
.float-form-clickbtn button.sideform-clickremove-btn{
    transform: rotate(180deg);
    opacity: 0
}
.float-side-form.active .float-form-clickbtn button.sideform-clickremove-btn{
    transform: rotate(-90deg);
    opacity: 1;
}
.float-side-form .float-sideform-inner{
    background: #f5f5f5;
    width: 360px;
    margin: 123px 0 0;
    border: 3px solid #EEE3FF;
    border-radius: 0;
    box-shadow: 0 0px 35px -30px #8946f2;
    padding: 20px 20px;
    transition: all.3s ease-in-out;
    z-index: 999;
}
.float-sideform-inner h3{
    color: #392657;
    margin: 0 0 10px;
}
.float-sideform-inner .form-group{
    margin: 0 0 10px;
}
.float-sideform-inner .form-group.form-group-last{
    margin: 0;
}
.float-sideform-inner .form-group input{
    background: #EEE3FF;
    color: #392657;
    font-size: 16px;
    width: 100%;
    border: 1px solid #fff;
    border-radius: 15px;
    padding: 10px 10px;
}
.float-sideform-inner .form-group input::placeholder{
    color: #392657;
    font-size: 16px;
}
.float-sideform-inner .form-group textarea{
    background: #EEE3FF;
    color: #392657;
    font-size: 16px;
    width: 100%;
    height: 100px;
    resize: none;
    border: 1px solid #fff;
    border-radius: 15px;
    padding: 10px 15px;
}
.float-sideform-inner .form-group textarea::placeholder{
    color: #392657;
    font-size: 16px;
}
.float-sideform-inner .form-group button.submit-btn{
    background: linear-gradient(90deg, rgba(181,139,255,1) 0%, rgba(137,70,242,1) 100%);
    color: #fff;
    font-size: 16px;
    width: 100%;
    border: 2px solid #b58bff;
    border-radius: 15px;
    padding: 10px 10px;
    margin: 0;
    text-transform: uppercase;
    outline: none;
    transition: all .3s ease-in-out;
}
.float-sideform-inner .form-group button.submit-btn:hover{
    color: #392657;
    background: transparent;
}
/* Side Form Buttons Css End Here */

/* Stick Website Buttons Css Start Here */
.stick-website-wrap{
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 999;
}
.stick-website-wrap a.stick-call-btn,
.stick-website-wrap button.stick-chat-btn{
    width: 40px;
    height: 40px;
    line-height: 42px;
    border-radius: 100%;
    text-align: center;
    display: block;
    margin: 0 0 10px;
    animation: shake 2s ease infinite;
}
.stick-website-wrap a.stick-call-btn:hover,
.stick-website-wrap button.stick-chat-btn:hover{
    animation: inherit;
}
.stick-website-wrap a.stick-call-btn{
    background: linear-gradient(90deg, rgba(255,213,110,1) 0%, rgba(255,184,11,1) 100%);
    border: 2px solid #FFD56E;
}
.stick-website-wrap a.stick-call-btn i{
    color: #674A00;
    font-size: 20px;
    font-weight: 600;
}
.stick-website-wrap button.stick-chat-btn{
    background: linear-gradient(90deg, rgba(181,139,255,1) 0%, rgba(137,70,242,1) 100%);
    border: 2px solid #b58bff;
}
.stick-website-wrap button.stick-chat-btn i{
    color: #fff;
    font-size: 20px;
    font-weight: 600;
}
@keyframes shake{
    0%, 100% {transform: translateX(0);}
    10%, 30%, 50%, 70%, 90% {transform: translateX(-5px);}
    20%, 40%, 60%, 80% {transform: translateX(5px);}
}
/* Stick Website Buttons Css End Here */

@media only screen and (min-width: 768px) and (max-width: 1199px) {

/* Side Form Buttons Responsive Css Start Here */
.side-form-wrap .float-btn-main{
    right: -265px;
    width: 300;
}
.float-btn-main a{
    width: 300px;
    margin: 0 0 10px;
}
.float-btn-main a i{
    font-size: 16px;
    width: 35px;
    height: 35px;
    line-height: 35px;
}
.float-btn-main a span{
    font-size: 16px;
}
.float-btn-main a.float-chat-btn:hover{
    right: 265px;
}
.float-btn-main a.float-call-btn:hover{
    right: 265px;
}
.side-form-wrap .float-side-form{
    right: -275px;
    width: 310px;
}
.float-side-form .float-form-clickbtn{
    width: 35px;
    margin: 105px 0 0;
}
.float-form-clickbtn button{
    font-size: 16px;
}
.float-side-form .float-sideform-inner{
    width: 275px;
    margin: 105px 0 0;
}
/* Side Form Buttons Responsive Css End Here */

/* Stick Website Buttons Css Start Here */
.stick-website-wrap{
    bottom: 10px;
    left: 10px;
}
.stick-website-wrap a.stick-call-btn,
.stick-website-wrap button.stick-chat-btn{
    width: 35px;
    height: 35px;
    line-height: 33px;
    margin: 0 0 5px;
}
.stick-website-wrap a.stick-call-btn i{
    font-size: 16px;
}
.stick-website-wrap button.stick-chat-btn i{
    font-size: 16px;
}
/* Stick Website Buttons Css End Here */
}

@media only screen and (min-width: 300px) and (max-width: 767px) {

/* Side Form Buttons Responsive Css Start Here */
.side-form-wrap .float-btn-main{
    right: -255px;
    width: 280px;
}
.float-btn-main a{
    width: 280px;
    border-radius: 5px 0px 0px 5px;
    margin: 0 0 10px;
}
.float-btn-main a i{
    font-size: 14px;
    width: 25px;
    height: 25px;
    line-height: 25px;
    border-radius: 5px 0px 0px 5px;
}
.float-btn-main a span{
    font-size: 14px;
}
.float-btn-main a.float-chat-btn:hover{
    right: 255px;
}
.float-btn-main a.float-call-btn:hover{
    right: 255px;
}
.side-form-wrap .float-side-form{
    right: -275px;
    width: 300px;
}
.float-side-form .float-form-clickbtn{
    width: 25px;
    border-radius: 5px 0px 0px 5px;
    margin: 85px 0 0;
}
.float-form-clickbtn button{
    font-size: 14px;
}
.float-side-form .float-sideform-inner{
    width: 275px;
    margin: 85px 0 0;
    padding: 15px 15px;
}
.float-sideform-inner .form-group input{
    font-size: 14px;
}
.float-sideform-inner .form-group input::placeholder{
    font-size: 14px;
}
.float-sideform-inner .form-group textarea{
    font-size: 14px;
}
.float-sideform-inner .form-group textarea::placeholder{
    font-size: 14px;
}
.float-sideform-inner .form-group button.submit-btn{
    font-size: 14px;
}
/* Side Form Buttons Responsive Css End Here */

/* Stick Website Buttons Css Start Here */
.stick-website-wrap{
    bottom: 10px;
    left: 10px;
}
.stick-website-wrap a.stick-call-btn,
.stick-website-wrap button.stick-chat-btn{
    width: 25px;
    height: 25px;
    line-height: 21px;
    margin: 0 0 5px;
}
.stick-website-wrap a.stick-call-btn i{
    font-size: 14px;
}
.stick-website-wrap button.stick-chat-btn i{
    font-size: 14px;
}
/* Stick Website Buttons Css End Here */
}
</style>