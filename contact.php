<?php
    include('header.php');
?>
        <h1> Service-client - Contactez-nous </h1>
        <section id="formContact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-5 order-2">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" id="name" class="form-control ">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="phone">Telephone</label>
                                    <input type="text" id="phone" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="message">Ecrire un message</label>
                                    <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary px-3 py-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php
    include('footer.php');
    ?>