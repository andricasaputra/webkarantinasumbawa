window.onload = setInterval(clock,0);
function clock(){
    var d = new Date();
    var tanggal = d.getDate();
    var bulan = d.getMonth();
    var bulanarray = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    bulan=bulanarray[bulan];
    tanggal=formatwaktu(tanggal);

    var tahun = d.getFullYear();
    var hari = d.getDay();
    var hariarray = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
    hari=hariarray[hari];

    var jam = d.getHours();
    var menit = d.getMinutes();
    var detik = d.getSeconds(); 
    jam=formatwaktu(jam);
    menit=formatwaktu(menit);
    detik=formatwaktu(detik)

    document.getElementById("hariini").innerHTML=hari+" "+tanggal+" "+bulan+" "+tahun;
    document.getElementById("jam").innerHTML=jam+":"+menit+":"+detik;       
}
function formatwaktu(i){
        if(i<10){
            i="0"+i;
        }
        return i;
}


function waktu (){
    var jam = new Date();
    setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = jam.getHours()+":"+jam.getMinutes()+":"+jam.getSeconds();
}







