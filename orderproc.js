function calcResult(){
    var Exp = document.getElementById("Exp").value;
    var DExp = document.getElementById("DExp").value;
    var Lat = document.getElementById("Lat").value;
    var MCap = document.getElementById("MCap").value;
    var LCap = document.getElementById("LCap").value;
    var MLB = document.getElementById("MLB").value;
    var LLB = document.getElementById("LLB").value;
    var MChoc = document.getElementById("MChoc").value;
    var LChoc = document.getElementById("LChoc").value;
    var MEarl = document.getElementById("MEarl").value;
    var LEarl = document.getElementById("LEarl").value;
    var MAssam = document.getElementById("MAssam").value;
    var LAssam = document.getElementById("LAssam").value;
    var MGreen = document.getElementById("MGreen").value;
    var LGreen = document.getElementById("LGreen").value;
    var MMint = document.getElementById("MMint").value;
    var LMint = document.getElementById("LMint").value;
    
    var ST1 = 2.75 * Exp;
    var ST2 = 3.50 * DExp;
    var ST3 = 4.70 * Lat;
    var ST4 = (4.25 * MCap) + (4.70 * LCap);
    var ST5 = (4.25 * MLB) + (4.70 * LLB);
    var ST6 = (4.20 * MChoc) + (4.65 * LChoc);
    var ST7 = (3.40 * MEarl) + (4.50 * LEarl);
    var ST8 = (3.40 * MAssam) + (4.50 * LAssam);
    var ST9 = (3.40 * MGreen) + (4.50 * LGreen);
    var ST10 = (3.40 * MMint) + (4.50 * LMint);
    
    document.getElementById("ST1").innerHTML = ST1.toFixed(2);
    document.getElementById("ST2").innerHTML = ST2.toFixed(2);
    document.getElementById("ST3").innerHTML = ST3.toFixed(2);
    document.getElementById("ST4").innerHTML = ST4.toFixed(2);
    document.getElementById("ST5").innerHTML = ST5.toFixed(2);
    document.getElementById("ST6").innerHTML = ST6.toFixed(2);
    document.getElementById("ST7").innerHTML = ST7.toFixed(2);
    document.getElementById("ST8").innerHTML = ST8.toFixed(2);
    document.getElementById("ST9").innerHTML = ST9.toFixed(2);
    document.getElementById("ST10").innerHTML = ST10.toFixed(2);
    
    var totalPrice = ST1 + ST2 + ST3 + ST4 + ST5 + ST6 + ST7 + ST8 + ST9 + ST10;
    totalPrice = totalPrice.toFixed(2)

    document.getElementById("totalPrice").innerHTML = totalPrice;
    document.getElementById("totalPriceForm").value = totalPrice;
}

