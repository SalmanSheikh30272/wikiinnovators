<!-- PopUp Modal Start Here -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="0122n">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="modal-body-form">
                            <h3>Let's Get <span>Started</span></h3>
                            <form action="https://leads.infinityprojectmanager.com/brand/wikinnovators/lead" method="GET">
                                <input name="brand_name" type="hidden" value="wikinnovators.com">
                                <input id="lead_area" name="modal_form" type="hidden" value="https://wikinnovators.com/">
                                <div class="popup-form-list">
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
                                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="form-group form-group-last">
                                        <button class="submit-btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PopUp Modal End Here -->

<style>
/* PopUp Modal Css Start Here */
.modaL_order{}
#staticBackdrop .modal-dialog{
    max-width: 550px !important;
    margin: 150px auto 0;
}
#staticBackdrop .modal-content{
    background: transparent;
    border-radius: 0px;
    border: none;
    position: relative;
    z-index: 1;
}
#staticBackdrop .modal-content .btn-close{
    position: absolute;
    right: -10px;
    margin: 0 auto;
    top: -5px;
    background: #FD5240;
    font-size: 20px;
    width: 20px;
    height: 20px;
    line-height: 20px;
    border: #fff;
    border-radius: 100%;
    outline: none;
    box-shadow: none;
    cursor: pointer;
    z-index: 4;
    opacity: 1;
}
#staticBackdrop .modal-content .btn-close i{
    color: #fff;
    font-weight: 600;
}
#staticBackdrop .modal-header{
    padding: 0px;
    border-bottom: none;
}
#staticBackdrop .modal-body{
    padding: 0;
}
#staticBackdrop .modal-body .modal-body-form{
    background-image: url(assets/images/bg-img/service-offer-bg.png);
    background-color: #080731;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 30px 30px;
    border-radius: 5px;
    text-align: center;
}
.modal-body-form h3{
    font-size: 30px;
    line-height: 36px;
    color: #fff;
    margin: 0 0 20px;
}
.modal-body-form h3 span{
    font-weight: 600;
    color: #FD5240;
}
.modal-body-form .popup-form-list{}
.modal-body-form .popup-form-list .form-group{
    width: 100%;
    margin: 0 0 10px;
}
.modal-body-form .popup-form-list .form-group.form-group-last{
    margin: 0;
}
.modal-body-form .popup-form-list .form-group input{
    background: #fff;
    color: #141414;
    font-size: 16px;
    width: 100%;
    border: none;
    border-radius: 0px;
    outline: none;
    padding: 15px 20px;
}
.modal-body-form .popup-form-list .form-group input::placeholder{
    color: #b2b2b2;
}
.modal-body-form .popup-form-list .form-group textarea{
    background: #fff;
    color: #141414;
    font-size: 16px;
    width: 100%;
    height: 120px;
    border: none;
    border-radius: 0px;
    resize: none;
    outline: none;
    padding: 10px 20px;
    box-shadow: none;
}
.modal-body-form .popup-form-list .form-group textarea::placeholder{
    color: #b2b2b2;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    background: #FD5240;
    color: #fff;
    border: 2px solid #FD5240;
    font-size: 16px;
    font-weight: 600;
    width: 175px;
    height: 50px;
    border-radius: 0px;
    padding: 5px 5px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: capitalize;
    transition: all .3s ease-in-out;
    position: relative;
}
.modal-body-form .popup-form-list .form-group button.submit-btn:hover{
    background: #fff;
    color: #FD5240;
    transform: scale(1.1);
}
.modal.show{
    padding-right:0px !important;
}
/* PopUp Modal Css End Here */
@media only screen and (min-width: 521px) and (max-width: 767px) {

/* PopUp Modal Responsive Css Start Here */
#staticBackdrop .modal-dialog{
    max-width: 475px !important;
    margin: 100px auto 0;
}
#staticBackdrop .modal-content .btn-close{
    right: -17px;
    left: inherit;
    margin: 0;
    top: -5px;
}
.modal-body-form h3{
    font-size: 26px;
    line-height: 32px;
}
.modal-body-form .popup-form-list .form-group input{
    height: 50px;
}
.modal-body-form .popup-form-list .form-group textarea{
    height: 100px;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    height: 50px;
}
/* PopUp Modal Responsive Css End Here */

}

@media only screen and (min-width: 300px) and (max-width: 520px) {

/* PopUp Modal Responsive Css Start Here */
#staticBackdrop .modal-dialog{
    max-width: 100% !important;
    margin: 100px 20px 0;
}
#staticBackdrop .modal-content .btn-close{
    right: -17px;
    left: inherit;
    margin: 0;
    top: -5px;
}
.modal-body-form h3{
    font-size: 26px;
    line-height: 32px;
}
.modal-body-form .popup-form-list .form-group input{
    height: 50px;
}
.modal-body-form .popup-form-list .form-group textarea{
    height: 100px;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    height: 50px;
}
/* PopUp Modal Responsive Css End Here */
}
</style>
<!-- PopUp Modal End Here -->