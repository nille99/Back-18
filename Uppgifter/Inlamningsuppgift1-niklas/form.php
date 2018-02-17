
 <div class="row">
      <div class="col">
                <form action="orderconfirmation.php" method="post">
                    <h2>Beställningsformulär</h2>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="labelnamn">Ange ditt Namn:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelnamn" type="text" name="yourname" required placeholder="Ange ditt namn">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelemail">Ange ditt email adress:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labelemail" type="email" name="yourmail" required placeholder="Ange ditt e-postadress">
                                </div>

                                <div class="col-md-4">
                                    <label for="labeladress">Ange Leveransadress:</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="labeladress" type="text" name="leveransadress" required  placeholder="Ange ditt Leveransadress">
                                </div>

                                <div class="col-md-4">
                                    <label for="labelmeddelande">Valfritt meddelande:</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="labelmeddelande" name="yourmessage"></textarea>
                                </div>

                            </div>
                            <div class="col-md-12 submitdiv">
                                <button type="submit" class="btn btn-primary">Beställ!</button>
                            </div>
                        </div>

                            <input type="hidden"  name="vara" value="<?=$vara?>"/>
                            <input type="hidden"  name="pris" value="<?=$pris?>"/>  
            </form>
     </div>
</div>