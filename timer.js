function odliczanie()
{
        var dzisiaj = new Date();

        var dzien = dzisiaj.getDate();//zapisz dzień
        if(dzien<10)dzien = "0" + dzien;
        var miesiac =dzisiaj.getMonth()+1;//zapisz miesiąc  
        if(miesiac<10)miesiac = "0" + miesiac;    
        var rok = dzisiaj.getFullYear();//zapisz rok
        var godzina = dzisiaj.getHours();//zapisz godzine
        if(godzina<10)godzina = "0" + godzina;
        var minuta = dzisiaj.getMinutes();
        if(minuta<10)minuta = "0" + minuta;
        var sekunda = dzisiaj.getSeconds();
        if(sekunda<10)sekunda = "0" + sekunda;

        document.getElementById("zegar").innerHTML=
        dzien + "-" + miesiac + "-" + rok + " "  + godzina+":"+minuta+":"+sekunda;

        setTimeout("odliczanie()",1000);

 }

