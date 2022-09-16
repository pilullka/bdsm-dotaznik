<?php include "otazky.php"; ?> 
<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dotazník</title>
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
  </head>

  <?php if (isset($_POST["dotaznik1"]) || isset($_POST["dotaznik2"]) || isset($_POST["dotaznik3"])) { ?>
    <body>
        
      
        <div class="container">
         <div class="row">
            <div class="col-md-12 mt-5 text-center rounded ">
                <?php 
				if (isset($_POST["dotaznik1"])){
					echo "<H1>Základný dotaznik subinky</H1>";}
				elseif (isset($_POST["dotaznik2"])){
					echo "<h1>Druhý základný dotazník subinky</h1>";}    
				elseif (isset($_POST["dotaznik3"])){
					echo "<h1>Podrobný dotazník subinky</h1>";}
				?>				
            </div>
        </div><br><br><br><br>
        <form method="POST" action="send.php">
            <section class="row">
                <div class="col-md-5 col-xd12">
                    <label for="spam" class="col-sm-12 control-label">Spam
                    </label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control col-md-2" id="spam" name="spam" placeholder="sem napíš spam">
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-6 control-label">Meno otroka
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="col-sm-12 form-control " id="meno" name="meno" placeholder="ako ma madam/pán volať svojho otroka">
                    </div>
                </div><br>
            </section>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-6 control-label">e-mail otroka
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="email" name="email" placeholder="stači nick z pokecu">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-6 control-label">Prezývka
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="prezyvka" name="prezyvka" placeholder="aká je Tvoja oblubená pezývka">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-6 control-label">messenger / azet nick
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="massenger" name="massenger" placeholder="stači nick z pokecu">
                    </div>
                </div>
            </section> <br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-6 control-label">Iný bezpečnostný kontakt:
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kontakt" name="kontakt" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vzdelanie" class="col-sm-12 control-label">Vzdelanie</label>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-md-4 col-5 ">
                                <label><input class="form-check-input" id="zakladne" type="radio" value="Základné" name="vzdelanie">&nbsp;Základné</label>
                            </div>
                            <div class="col-md-4 col-5">
                                <label><input class="form-check-input" id="stredoskolske" type="radio" value="stredoškolské" name="vzdelanie">&nbsp;Stredoškolské</label>
                            </div>
                            <div class="col-md-4 col-5">
                                <label><input class="form-check-input" id="vysokoskolske" type="radio" value="Vysokoškolské" name="vzdelanie">&nbsp;Vysokoškolské</label>
                            </div>
                            <div class="col-md-4 col-5">
                                <label><input class="form-check-input" id="doktoranské" type="radio" value="Vysokoškolské" name="vzdelanie">&nbsp;Doktoranské</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Výška
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="vyska" name="vyska" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Obvod Hrude
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="obvodhrude" name="obvodhrude" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Farba očí / vlasov
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="farbaoci" name="farbaoci" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Veľkosť pŕs
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="prsia" name="prsia" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Úprava ochlpenia
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="ochlpenie" name="ochlpenie" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Má otrok na tele tetovanie? a kde?
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="tetovanie" name="tetovanie" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Piercing? a kde?
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="piercing" name="piercing" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Fajčenie/alkohol/drogy:
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="zavislosti" name="zavislosti" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vyska" class="col-sm-6 control-label">Iné znamenia a zvlášnosti
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="znamenie" name="znamenia" placeholder="">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="vzdelanie" class="col-sm-12 control-label">Preferencia vztahu? (BDSM) </label>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div  class="col-sm-4 col-4 ">
                                <label for="b/d"><input class="form-check-input" id="B/D" type="radio" value="B/D" name="preferencia">&nbsp;B/D</label>
                            </div>
                            <div class="col-sm-4 col-4">
                                <label><input class="form-check-input" id="D/S" type="radio" value="D/S" name="preferencia">&nbsp;D/S</label>
                            </div>
                            <div class="col-sm-4 col-4 ">
                                <label><input class="form-check-input" id="S/M" type="radio" value="Vysokoškolské" name="preferencia">&nbsp;S/M</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label"><b>1. Otrockú výchovu chcem</b>
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <div class="radio">
                            <div class="radio  ">
                                <label>
                                    <input class="form-check-input" id="lenobcasnuvychovu" type="radio" value="len občasné výchovne lekcie " name="otazka1"> len občasné výchovne lekcie</label>
                            </div>
                            <div class="radio">
                                <label><input class="form-check-input" id="pravidelnaotrockasluzba" type="radio" value="pravidelná otrocká služba pre svoju Madam, Pána" name="otazka1"> pravidelná otrocká služba pre svoju Madam, Pána</label>
                            </div>
                            <div class="radio">
                                <label><input class="form-check-input" id="stalaotrockasluzba" type="radio" value="stála otrocká služba pre Madam, alebo Pána pokiaľ ma budú chcieť" name="otazka1"> stála otrocká služba pre Madam, alebo Pána pokiaľ ma budú chcieť</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="sexpraktika" class="col-sm-12 control-label"><b>2. Sexuálna orientácia:</b></label>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-md-3 ">
                                <label><input class="form-check-input" type="radio" value="heterosexuál – ka" name="otazka2"> heterosexuál – ka</label>
                            </div>
                            <div class="col-md-4">
                                <label><input class="form-check-input" type="radio" value="homosexuál – lesbička" name="otazka2"> homosexuál – lesbička</label>
                            </div>
                            <div class="col-md-4 ">
                                <label><input class="form-check-input" type="radio" value="bisexuál – bisexuála" name="otazka2"> bisexuál – bisexuála</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="skusenost" class="col-sm-12 control-label"><b>3. Lesbická alebo homosexuálna skúsenosť </b></label>
                    </div>
                    <div class="col-sm-7 row">
                    <div class="col-sm-5 col-5 ">
                        <label><input class="form-check-input" type="radio" value="mám" name="otazka3">&nbsp;mám</label></div>
                    <div class="col-sm-5 col-5">
                        <label><input class="form-check-input" type="radio" value="nemám" name="otazka3">&nbsp;nemám</label></div>
                    </div>
                </div>
            </section>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-4 offset-sm-1">
                        <label for="vyska" class="col-sm-6 control-label">Koľko krát?
                        </label>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="obvodhrude" name="T1" placeholder="">
                    </div>
                </div>
            </section>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-3 offset-sm-2">
                        <label for="sexpraktiky" class="col-sm-6 control-label">sexuálne praktiky
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="col-12 form-control" id="bipraktiky" name="bipraktiky" placeholder="aké praktiky si mal/a pri sexe s rovnakým pohlavím">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="sulozim" class="col-sm-12 control-label"><b>4. Súložím s patnerom v priemere za mesiac:</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <input class="form-control" type="text" name="otazka4" class="col-3">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="onanovanie" class="col-sm-12 control-label "><b>5. Ako často otrok onanuje:</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <input class="form-control" type="text" name="otazka5" class="col-6">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label"><b>6 Stav </b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <div class="row">
                            <div class="col-md-3 col-6 ">
                                <label><input class="form-check-input" type="radio" value="Slobodný/á" name="otazka6"> Slobodný/á</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Ženat/vydatá" name="otazka6"> Ženatý/vydatá</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="bisexuál – bisexuála" name="otazka6"> Rozvedený/á</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="bisexuál – bisexuála" name="otazka6"> Druh/Družka</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label"><b>7. Počet detí a vek:</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <input class="form-control" type="text" name="otazka7" class="col-6">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label"><b>8. Submisivita :</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <div class="row">
                            <div class="col-md-3 col-6 ">
                                <label><input class="form-check-input" type="radio" value="Neviem" name="otazka8">&nbsp;Neviem</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Slabá" name="otazka8">&nbsp;Slabá</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Silná" name="otazka8"> &nbsp;Silná</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Veĺmi silná" name="otazka8">&nbsp;Veľmi silná</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br>
              <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label"><b>9. Skúsenosti s Pánom/Pani:</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Mám" name="otazka9">&nbsp;Mám</label>
                            </div>
                            <div class="col-md-3 col-6">
                                <label><input class="form-check-input" type="radio" value="Nemám" name="otazka9">&nbsp;Nemám</label>
                            </div>
                       </div>
                    </div>
                </div>
            </section>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-4 offset-md-1">
                        <label for="skusenostispanom" class="col-sm-12 control-label "><b>Kokoľko krát ?</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <input class="form-control" type="text" name="pocetskusenosti" class="col-6">
                    </div>
                </div>
            </section><br>
            <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="skusenostispanom" class="col-sm-12 control-label "><b>10. Prečo máš záujem slúžiť?</b>
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <input class="form-control" type="text" name="otazka10" class="col-6">
                    </div>
                </div>
            </section><br><br>
             <section class="col-sm-12">
                <H4><b>Výchovné metódy ktoré ?</b></H4>
            </section> <br>
            <?php       
    
                                // Multidimensional array

                    if (isset($_POST["dotaznik1"])){ include  "otazky.php";
                        echo "<input type=\"hidden\" id=\"dotaznik1\" name=\"dotaznik1\" value=\"dotaznik1\">";}
                        elseif (isset($_POST["dotaznik2"])){include "otazky2.php";
                        echo "<input type=\"hidden\" id=\"dotaznik2\" name=\"dotaznik2\" value=\"dotaznik2\">";}    
                        elseif (isset($_POST["dotaznik3"])){include "otazky3.php";
                        echo "<input type=\"hidden\" id=\"dotaznik3\" name=\"dotaznik3\" value=\"dotaznik3\">";}
  
                                    // Printing all the keys and values one by one
         $sekcie = array_keys($zoznamotazok);
                    for($i = 0; $i < count($zoznamotazok); $i++) {
                        echo "  <div class=\"col-sm-8 offset-3\"><p><b>".$sekcie[$i]."</b></p></div> <br>";

                        foreach($zoznamotazok[$sekcie[$i]] as $cislootazky => $otazky) {
                            echo "   			<section class=\"form-group col-sm-12\">
                                                    <div class=\"row\">
                                                        <div class=\"col-sm-5\">
                                                            <label for=\"".$cislootazky."\" class=\"col-sm-12 control-label\">".$otazky."
                                                            </label>
                                                        </div>
                                                        <div class=\"col-sm-7 \">
                                                            <label for=\"".$cislootazky."\">
                                                                <select class=\"form-select\" size=\"1\" name=\"".$cislootazky."\">
                                                                   ".$odpovede."
                                                                </select>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </section><br>"; 
    }
    echo "<br>";
} ?>
           <section class="form-group col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <label for="otazka" class="col-sm-12 control-label">Doplňujúce infomácie
                        </label>
                    </div>
                    <div class="col-sm-7 ">
                        <label for="comment">
                            <textarea class="form-control" rows="6" name="text" cols="71"></textarea>
                        </label>
                    </div>
                </div>
            </section><br>
            
            
            
            
    
        
      
                         
  
                           <div class="col-12"><button type="submit" class="btn btn-primary">O d o s l a ť  &nbsp;&nbsp;f o r m u l á r </button><input type="reset" class="btn btn-danger" value="Reset"></div>     
            </form><br><br><br>                          
       </div>
     
</body>
</html>"                                                                                         
<?php
}
    else {
echo " 
    <body>


    <div class=\"container\">
      <section class=\"mt-4 p-5 rounded\"></div>
       <div class=\"row  justify-content-center align-items-center\">
            <div class=\" col-sm-4   btn-group-vertical justify-content-center align-items-center\">
                <form action=\"index.php\" method=\"post\"> 
                <div class=\"btn btn-group-vertical\">
                    <input type=\"submit\" class=\"btn btn-info btn-lg btn-lock\" name=\"dotaznik1\" value=\"Základný  dotazník\">
			        <input type=\"submit\" class=\"btn btn-primary btn-lg btn-lock\" name=\"dotaznik2\" value=\"Základný  dotazník 2\">
                    <input type=\"submit\" class=\"btn btn-success btn-lg btn-lock\" name=\"dotaznik3\" value=\"Podrobný dotazník\">
                </div>
                </form>
            </div>
        
        </section>
    </div>

</body>
</html>";}
