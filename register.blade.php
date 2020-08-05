<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8">
<title>Form</title>
<body>

<!--Buat Account Baru!-->
<h2><strong>Buat Account Baru!</strong></h2>

<!--Sign Up Form-->
<h3> Sign Up Form </h3>

<!--antara file form.html terhubung dengan welcome.html jika telah program dibawah telah dijalankan tanpa menampilkan URL aslinya -->
<form action = "/welcome">

    <!--First Name -->
        <!--Memberi tag label untuk judul pertanyaan form First Name-->
    <label for = "namaawal">First Name:</label><br><br>
        <!--Memberikan tipe input text bersyarat / required-->
    <input type ="text" name = "namaawal" id = "namaawal" required ><br><br>


    <!--Last Name-->
        <!--Memberi tag label untuk judul pertanyaan form Last Name-->
    <label for = "namaakhir">Last Name:</label> <br><br>
        <!--Memberikan tipe input text bersyarat / required-->
    <input type ="text" name = "namaakhir" id = "namaakhir" required><br><br>


    <!--Gender-->
        <!--Memberi tag label untuk judul pertanyaan form Gender-->
    <label for = "gender">Gender:</label><br><br>
        <!--Memberikan tipe input Radio berupa pilihan bahasa-->
    <input type= "radio" name = "gender" >Male<br>
    <input type = "radio" name = "gender" >Female<br> 
    <input type = "radio" name = "gender" >Other<br><br>


    <!--Nationality-->
        <!--Memberi tag label untuk judul pertanyaan form Nationality-->
    <label for = "nationality">Nationality: </label><br><br>
        <!--Memberi tag select dengan atribute name berupa nationality-->
    <select name = "nationality" > 
        <!--Memberi tag option sebagai opsi pilihan yang akan dipilih-->
        <option>Indonesian</option>
        <option>Malaysian</option>
        <option>Singaporean</option>
    </select><br><br>


    <!--Language Spoken-->
        <!--Memberi tag label untuk judul pertanyaan form Language Spoken-->
    <label for = "language">Language Spoken: </label><br><br>
        <!--Memberikan tipe input Checkbox berupa pilihan bahasa-->
    <input type = "checkbox" name ="language" value = "0">Bahasa Indonesia<br> 
    <input type = "checkbox" name = "language" value = "1">English<br> 
    <input type = "checkbox" name = "language" value = "2" >Other<br> 


    <!--Bio-->
    <p>Bio: </p>
        <!--Membuat Text Area dengan panjang kolom dan baris maksimal tertentu-->
    <textarea cols = "35" row = "10" required></textarea><br>
    
    <!--Submit-->
    <p><button type = "submit">Sign Up</button></p>

</form>
</body>
</head> 
</html>