# LibitumKodTest_Minna
Kodtest PHP, HTML, JS, CSS, MySQL
Home.php är första sidan där tre val ska göras för att skicka en order. Valen är från tre olika tabeller i databas (phpMyAdmin) där det finns en relation dem emellan förberedd
dvs - foreign key mellan tabellerna som i framtiden skulle kunna användas för att sortera tabellalternativen beroende för föregående val. 
selection2 och selection3 innehåller samma logik med dropdown listor. Ett sätt att sortera koden snyggare. 
functions.js innehåller funktionerna som skapar önskad logik att inte kunna välja nästa val fören föregående är valt. Också en utsktift för att visa valt objekt.
orderDB.php är logiken för POST metoden att skicka order till databasen. Satt en ganska enkel version av if() för att se till att alla tre valen är valda. En akutlösning för att täcka upp saknad funktion

Främst saknar projeket funktion för att ta bort valt objekt - vilket ska leda till att disable/enable påverkas igen. Kompromissen blev en den enkla if-villkoret att alla tre måste vara valda.
Heller inte satsat så mycket på design - det ska visa en enkel användarvänlighet med pop-ups och förståelse för vad som sker och hjälp hur det sker. 

Ni kommer åt sidan här: https://webbkurs.ei.hv.se/~mibl0003/Libitum/Home.php 
