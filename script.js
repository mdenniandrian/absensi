window.onload = function() {
    // waktu tunggu dalam milidetik sebelum loader hilang
    var waktuTunggu = 2000;

    // hilangkan loader setelah waktu tunggu
    setTimeout(function() {
        var loader = document.getElementsByClassName('loader')[0];
        loader.style.display = 'none';
    }, waktuTunggu);
};
