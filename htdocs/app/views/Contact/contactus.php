<?php
    $SITENAME="CONTACT: Contact Us";
?>

<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="bodyContact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-7">
                <form>
                    <div class="headerContact">
                        <div class="col-lg-12 col-offset-6 centered">
                            <h1>Contact Us</h1>  
                        </div>
                        <div class="col-lg-12 col-offset-6 centered">
                            <p>
                                Do you have any questions? Please do not hesitate to contact us directly.
                                Our team will come back to you in a matter of hours to help you.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-sm-5">
                            <label for="inputName4"></label>
                            <input type="text" class="form-control" id="inputName4">
                            <label>Name</label>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5">
                            <label for="inputEmail4"></label>
                            <input type="email" class="form-control" id="inputEmail4">
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject"></label>
                        <input type="text" class="form-control" id="inputSubject">
                        <label>Subject</label>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            <label>Your message</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
                <div class="asideContact">
                <p>Montreal, QC, Canada</p>
                <p>+ 01 234 567 89</p>
                <p>contact@vaniercollege.qc.ca</p>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>