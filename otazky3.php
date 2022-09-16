<?php
            $odpovede = "<option disabled selected value=\"-\">Vybrať</option>
                        <option>v žiadnom prípade to nechcem</option>
                        <option>nepáči sa mi to ale pre Madam/Pána to vydržim</option>
                        <option>nemám to rád, ale vzrušuje ma predstava, že som donútený/á</option>
                        <option>nevadí mi to</option>
                        <option>prečo by som to neskúsil/a</option>
                        <option>moja veľmi obľúbená praktika</option>
                        <option>vzrušuje ma to a chcel by som to stále</option>
                        <option>praktizujem to aj sám/a</option>
                        <option disabled >&nbsp;</option>"
;
   

$zoznamotazok = array(
    "Obojok" => array(
            "otazka11a" => "Používanie obojku",
			"otazka11b" =>	"Nosenie obojku trvale v súkromí",
			"otazka11c" =>	"Nosenie obojku trvale aj na verejnosti",
                
    ),
    "Umiestnenie pút" => array(
            "otazka12a" => "Spútanie  rúk",
			"otazka12b" => "Spútanie nôh",
			"otazka12c" => "Spútanie končatín k sebe",
			"otazka12d" => "Pripútanie k premetu ako je stolička, posteľ, lavica",
			"otazka12e"=>"Zavesenie za ruky",
			"otazka12f"=>"Zavesenie za nohy",
            "otazka12g"=>"vyväzovanie otroka v ponižujúcich polohách, dolu hlavou a pod",
                    
    ),
    "Pevnosť pút" => array(
            "otazka13a"=>"Spoutání pouze jako dekorace (volná, možnost osvobození)",
			"otazka13b"=>"Spoutání pevné (s možností vlastního osvobození)",
			"otazka13c"=>"Spoutání pevné (bez možnosti vlastního osvobození)",
			"otazka13d"=>"Spoutání velmi pevné (znemožnění jakéhokoliv pohybu)",
			"otazka13e"=>"Spoutání velmi pevné – mírně či více bolestivé"
                   
    ),
    "Dĺžka spútania" => array (
            "otazka14a"=>"Spoutání krátkodobé (pouze pro část hry) ",
			"otazka14b"=>"Spoutání střednědobé (po celou dobu hry) ",
			"otazka14c"=>"Spoutání dlouhodobé (po celou dobu hry + mimo hru) ",
			"otazka14d"=>"Spoutání dlouhodobé (3 a více hodin i mimo hru – max. 24h) ",
			"otazka14e"=>"Spoutání denní (24 hodin) ",
			"otazka14f"=>"Spoutání několikadenní (1 den a více) ",
    ),
    "Používanie pút" => array (
            "otazka15a"=>"Spoutání v soukromí",
            "otazka15b"=>"Spoutání na částečně veřejném místě (les, park, …)",
            "otazka15c"=>"Spoutání na veřejnosti (pouta pod oblečením) ",
            "otazka15d"=>"Spoutání na veřejnosti (pouta viditelná) ", 
    ),
    "Väznenie" => array (
                "otazka16a"=>"Uzamčení v místnosti",
                "otazka16b"=>"Uzamčení v kleci",
                "otazka16c"=>"Uzamčení v truhle",
    ),
    "Materialy pút" => array (
                "otazka17a"=>"Látkové pruhy",
                "otazka17b"=>"Provazy",
                "otazka17c"=>"Kožená pouta",
                "otazka17d"=>"Kožené pásky",
                "otazka17e"=>"Tkané popruhy",
                "otazka17f"=>"Kovová pouta",
                "otazka17g"=>"Řetězy",
                "otazka17h"=>"Okovy",
                "otazka17i"=>"Svěrací kazajka",
                "otazka17j"=>"Lepící páska",
                "otazka17k"=>"Potravinářská folie",
    ),
    "Obmedzovanie vnímania" => [
                "otazka18a"=>"Páska na oči",
                "otazka18b"=>"Ušní ucpávky",
                "otazka18c"=>"Nosní ucpávky",        
    ],
    "Obmedzovanie komunikácie" => [
                "otazka19a"=>"Roubík látkový (uzel, …)",
                "otazka19b"=>"Roubík gumový (kolíček, …)",
                "otazka19c"=>"Roubík špalíček",
                "otazka19d"=>"Roubík kulička",
                "otazka19e"=>"Udidlo",
                "otazka19f"=>"Lepící páska",
                "otazka19g"=>"Rozvírače / trubičky do úst", 
    ],
    "Spôsoby výprasku" => [
                "otazka20a"=>"Výprask rukou",
                "otazka20b"=>"Výprask plácačkou pružnou (látka, kůže, guma, …)",
                "otazka20c"=>"Výprask plácačkou tuhou (dřevo, kov, plast, …)",
                "otazka20d"=>"Výprask páskem (koženým)",
                "otazka20e"=>"Výprask lehkými důtkami (látka, provaz, …)",
                "otazka20f"=>"Výprask koženými důtkami",
                "otazka20g"=>"Výprask koženými důtkami s uzlíky",
                "otazka20h"=>"Výprask jezdeckým bičíkem",
                "otazka20i"=>"Výprask rákoskou",
                "otazka20j"=>"Výprask bičem",
    ],
    "Smerovanie výprasku" => [
                "otazka21a"=>"Přes hýždě",
                "otazka21b"=>"Přes záda",
                "otazka21c"=>"Přes hrudník",
                "otazka21d"=>"Přes břicho",
                "otazka21e"=>"Přes stehna",
                "otazka21f"=>"Přes lýtka / holeně",
                "otazka21g"=>"Přes chodidla",
                "otazka21h"=>"Přes obličej",
                "otazka21i"=>"Přes anální otvor",
                "otazka21j"=>"Přes pohlavní orgány",
    ],
    "Oblrčenie a doplnky" => [
                "otazka22a"=>"Kožené spodní prádlo",
                "otazka22b"=>"Gumové spodní prádlo",
                "otazka22c"=>"Kožený celý oblek",
                "otazka22d"=>"Gumový celý oblek",
                "otazka22e"=>"Kožené kukly",
                "otazka22f"=>"Gumové kukly",
                "otazka22g"=>"Kožený postroj",
                "otazka22h"=>"Gumový postroj",
                "otazka22i"=>"Korzety",
                "otazka22j"=>"Pásy cudnosti",
                "otazka22k"=>"Oblékání ženských šatů (na příkaz)",
                "otazka22l"=>"Nošení symbolů podřízení"
    ],
    "Nosenie oblečenia a doplnkov" => [
                "otazka23a"=>"Používání v soukromí",
                "otazka23b"=>"Používání mezi přáteli",
                "otazka23c"=>"Nošení pod oblečením na veřejnosti",
                "otazka23d"=>"Nošení na veřejnosti bez dalšího oblečení",
    ],
    "Nahota" => [
                "otazka24a"=>"Používání v soukromí",
                "otazka24b"=>"Používání mezi přáteli",
                "otazka24c"=>"Na veřejně přístupných místech s nižším pohybem lidí (les,…)",
                "otazka24d"=>"Na veřejných místech",],
    "Úprava zovnajšku" => [
                "otazka25a"=>"Oholení genitálií",
                "otazka25b"=>"Oholení anální",
                "otazka25c"=>"Tetování - dočasné",
                "otazka25d"=>"Tetování - trvalé",],
    "Praktiky a spôsob mučnia" => [
                "otazka26a"=>"Kolíčky, mírné svorky",
                "otazka26b"=>"Krokosvorky, tvrdé svorky",
                "otazka26c"=>"Závažíčka na svorky",
                "otazka26d"=>"Horký standardní vosk",
                "otazka26e"=>"Horký včelí vosk",
                "otazka26f"=>"Depilace pinzetou",
                "otazka26g"=>"Depilace voskem",
                "otazka26h"=>"Depilace strojkem",
                "otazka26i"=>"Led na těle",
                "otazka26j"=>"Led do tělních dutin",
                "otazka26k"=>"Omezení dýchání ručním dušením",
                "otazka26l"=>"Omezení dýchání igelitovým sáčkem",
                "otazka26m"=>"Omezení dýchání maskou",
                "otazka26n"=>"Kousání",
                "otazka26o"=>"Podvazování bradavek",
                "otazka26p"=>"Podvazování genitálií",
                "otazka26q"=>"Vypalování značek",
                "otazka26r"=>"Prořezávání kůže",
                "otazka26s"=>"Sypání soli či vlévání desinfekce do otevřených ran",
                "otazka26t"=>"Tahání za vlasy nebo ochlupení",
                "otazka26u"=>"Používání jehel",
                "otazka26v"=>"Lechtání",
                "otazka26w"=>"Poškrábání",
                "otazka26x"=>"Používání VF elektřiny",
                "otazka26y"=>"Voda",
                "otazka26z"=>"Dlouhodobé nošení vaginálního kolíku/vibrátoru",
                "otazka26aa"=>"Zavádění análního kolíčku",
                "otazka26ab"=>"Dlouhodobé nošení análního kolíčku",
                "otazka26ac"=>"Dlouhodobé nošení análních kuliček",
                "otazka26ad"=>"Mumifikace",],
    "sexualne služby" => [
                "otazka27a"=>"Masturbace / onanie",
                "otazka27b"=>"Pohlavní styk",
                "otazka27c"=>"Orální styk (provádět)",
                "otazka27d"=>"Orální styk (přijímat)",
                "otazka27e"=>"Manuální styk (provádět)",
                "otazka27f"=>"Manuální styk (přijímat)",
                "otazka27g"=>"Anální sex (provádět)",
                "otazka27h"=>"Anální sex (přijímat)",
                "otazka27i"=>"Hra s vibrátory (provádět)",
                "otazka27j"=>"Hra s vibrátory (přijímat)",],
    "Ostatné sexuálne služby" => [
                "otazka28a"=>"Sexuální služby jiným ženám – přítelkyním (na příkaz)",
                "otazka28b"=>"Sexuální služby jiným mužům – přátelům (na příkaz)",
                "otazka28c"=>"Sexuální služby jiným ženám – cizím (na příkaz)",
                "otazka28d"=>"Sexuální služby jiným mužům – cizím (na příkaz)",
                "otazka28e"=>"Sex se zvířaty",],
    "Služby iným ženám (mužom)" => [
                "otazka29a"=>"Přenechání jiné(mu) dominantní(mu) ženě / muži (dočasné)",
                "otazka29b"=>"Přenechání jiné(mu) dominantní(mu) ženě / muži (trvalé)",
                "otazka29c"=>"Prodej jiné(mu) ženě / muži v aukci",],
    "Miesta sexuálnych služieb" => [
                "otazka30a"=>"Sexuální služby v soukromí",
                "otazka30b"=>"Sexuální služby na částečně veřejných místech (les, park, …)",
                "otazka30c"=>"Sexuální služby na veřejnosti",],
    "Riadenie sexuálneho života" =>[
                "otazka31a"=>"Řízení orgasmů",
                "otazka31b"=>"Zabránění orgasmu",
                "otazka31c"=>"Omezení sexuálního života",],
    "Riadenie súkromného života" => [
                "otazka32a"=>"Oblékání pouze povoleného oblečení",
                "otazka32b"=>"Používání koupelny pouze po dovolení (v povolenou dobu)",
                "otazka32c"=>"Používání WC pouze po dovolení",
                "otazka32d"=>"Řízení spánkového režimu",
                "otazka32e"=>"Udržování fyzické kondice",
                "otazka32f"=>"Sledování vybraných TV pořadů",
                "otazka32g"=>"Organizování zábavy a koníčků",
                "otazka32h"=>"Výběr jídel – organizace stravovacího režimu",],
    "Služba - funcie" => [
                "otazka33a"=>"Domácí práce (úklid)",
                "otazka33b"=>"Vaření",
                "otazka33c"=>"Praní a žehlení prádla",
                "otazka33d"=>"Drobné domácí opravy",
                "otazka33e"=>"Řidič",
                "otazka33f"=>"Nosič",
                "otazka33g"=>"Masér",
                "otazka33h"=>"Manikúra a pedikúra",
                "otazka33i"=>"Telefonní služba",
                "otazka33j"=>"Sloužit jako nábytek",
                "otazka33k"=>"Společník – doprovod",],
    "Klinik sex" => [
                "otazka34a"=>"Klystýr",
                "otazka34b"=>"Cévkování",
                "otazka34c"=>"Anální vyšetření",
                "otazka34d"=>"Žaludeční sonda – umělá výživa",],
    "Hry - Role" => [
                "otazka35a"=>"otrok/otrokyně – otrokářka/otrokář",
                "otazka35b"=>"sluha/služka – paní/pán",
                "otazka35c"=>"pes/čubka – panička/páníček",
                "otazka35d"=>"ponnyplay",
                "otazka35e"=>"zajatec – vyslýchající",
                "otazka35f"=>"vězeň – dozorce",
                "otazka35g"=>"žák/žákyně – učitelka/učitel",
                "otazka35h"=>"pacient/pacientka – lékařka/lékařka",
                "otazka35i"=>"oběť – sekta",
                "otazka35j"=>"syn/dcera – matka/otec",
                "otazka35k"=>"mimino – matka/otec",],
    "Vlastné - foto a video" => [
                "otazka36a"=>"Pořizování fotografií",
                "otazka36b"=>"Sledování fotografií",
                "otazka36c"=>"Pořizování videozáznamů",
                "otazka36d"=>"Sledování videozáznamů nebo filmů",],
    "Cudzie - foto a video" => [
                "otazka36a"=>"Prohlížení fotografií",
                "otazka36b"=>"Prohlížení videozáznamů a filmů (sex, erotika)",],
    "Výsmechy" => [
                "otazka38a"=>"Přijímání zlaté sprchy (moč)",
                "otazka38b"=>"Přijímání hnědé sprchy (kaviár, …)",
                "otazka38c"=>"Vyměšování před …",],
    "Ovládanie" => [
                "otazka39a"=>"Hrubé jednání:",
                "otazka39b"=>"Poslušnost při plnění příkazů (v soukromí)",
                "otazka39c"=>"Poslušnost při plnění příkazů (na veřejnosti)",
                "otazka39d"=>"Zákaz mluvení (v soukromí)",
                "otazka39e"=>"Zákaz mluvení (na veřejnosti)",
                "otazka39f"=>"Zákaz pohybu (v soukromí)",
                "otazka39g"=>"Zákaz pohybu (na veřejnosti)",
                "otazka39h"=>"Předvádění se na veřejnosti (exhibicionismus)",
                "otazka39i"=>"Ponížení v soukromí",
                "otazka39j"=>"Ponížení na veřejnosti",
                "otazka39k"=>"Polohový trest (klečení, stání…)",
                "otazka39l"=>"Testy fyzické a duševní odolnosti",
                "otazka39m"=>"Soutěže s dalšími submisivními osobami",],
    "Nohy a topánky" => [
                "otazka40a"=>"Líbání / olizování nohou",
                "otazka40b"=>"Líbání / olizování bot",],
    "Zverejnenie" => [
                "otazka41a"=>"Zveřejnění své submisivní role mezi přáteli",
                "otazka41b"=>"Zveřejnění své submisivní role před rodiči",
                "otazka41c"=>"Zveřejnění své submisivní role na veřejnosti",
                "otazka41d"=>"Zveřejnění své submisivní role v TV, rozhlase, …",],
    "Ostatné čo inam nevošlo" => [
                "otazka42a"=>"Ochota podepsat otrockou smlouvu",
                "otazka42b"=>"Ochota podstoupit hypnotické uvolnění zábran",
                "otazka42c"=>"Piercing",
                "otazka42d"=>"Výměna / záměna rolí",
                "otazka42e"=>"Výměna partnerů",],
    
    
    
    
    
    
    
    
); 


?>