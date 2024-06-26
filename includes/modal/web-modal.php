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
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 p-0">
                            <div class="modal-body-form">
                                <h3>Save Upto 50% <span>Limited Time Offer</span></h3>
                                <form action="https://leads.infinityprojectmanager.com/brand/wikithinkers/lead" method="GET">
                                    <input type="hidden" name="brand_name" value="wikithinkers.com">
                                    <input type="hidden" id="lead_area" name="lead_area" value="http://www.wikithinkers.com">
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
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                            <div class="modal-body-img1">
                            <img src="assets/images/wikipedia-browse-img.webp" data-src="assets/images/wikipedia-browse-img.webp" alt="Wikipedia Browse" width="100%" height="auto"    class="img-fluid">
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
    max-width: 700px !important;
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
    right: -110px;
    left: 0;
    margin: 0 auto;
    top: -5px;
    background: #FCC127;
    font-size: 20px;
    width: 20px;
    height: 20px;
    line-height: 20px;
    border: 2px solid #FCC127;
    border-radius: 100%;
    outline: none;
    box-shadow: none;
    cursor: pointer;
    z-index: 4;
    opacity: 1;
}
#staticBackdrop .modal-content .btn-close i{
    color: #212121;
    font-weight: 600;
}
#staticBackdrop .modal-header{
    padding: 0px;
    border-bottom: none;
}
#staticBackdrop .modal-body{
    padding: 0;
}
#staticBackdrop .modal-body .modal-body-img1{
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
    display: flex;
    align-items: end;
    justify-content: center;
}
#staticBackdrop .modal-body .modal-body-img1::after{
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #fbc25a;
    height: 200px;
    width: 100%;
    z-index: -1;
}
#staticBackdrop .modal-body .modal-body-img1 img{
    width: 100%;
    margin: 0 0 30px 0;
    animation: Rotate 7s linear infinite;
}
#staticBackdrop .modal-body .modal-body-form{
    background: #FBFBFB;
    padding: 30px 30px;
    border-radius: 50px 50px 0px 50px
}
.modal-body-form h3{
    font-size: 30px;
    line-height: 36px;
    color: #212121;
    margin: 0 0 10px;
}
.modal-body-form h3 span{
    color: #fbc25a;
    display: block;
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
    font-size: 16px;
    color: #212121;
    padding: 10px 20px;
    width: 100%;
    height: 60px;
    border: none;
    outline: none;
    border-radius: 50px;
}
.modal-body-form .popup-form-list .form-group input::placeholder{
    color: #A4A4A4;
}
.modal-body-form .popup-form-list .form-group textarea{
    background: #fff;
    font-size: 16px;
    color: #212121;
    width: 100%;
    height: 120px;
    resize: none;
    border: none;
    border-radius: 30px;
    padding: 20px 20px;
}
.modal-body-form .popup-form-list .form-group textarea::placeholder{
    color: #A4A4A4;
}
.modal-body-form .popup-form-list .form-group button.submit-btn{
    font-family: "Calibri-Bold";
    background: linear-gradient(to right, #212121 50%, #FCC127 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    border: 2px solid #FCC127;
    color: #212121;
    font-size: 18px;
    width: 100%;
    height: 60px;
    border-radius: 50px;
    padding: 8px 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .3s ease-in-out;
    text-transform: capitalize;
}
.modal-body-form .popup-form-list .form-group button.submit-btn:hover{
    background-position: left bottom;
    color: #fff;
    border: 2px solid #212121;
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
#staticBackdrop .modal-body .modal-body-img1{
    display: none;
}
#staticBackdrop .modal-body .modal-body-form{
    border-radius: 50px 50px;
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
#staticBackdrop .modal-body .modal-body-img1{
    display: none;
}
#staticBackdrop .modal-body .modal-body-form{
    border-radius: 50px 50px;
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