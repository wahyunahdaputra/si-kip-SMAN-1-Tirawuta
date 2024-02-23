window.onload = (event) => {
    generateDatalistOption("listProdi");
}

function onMouseOver(target){
    target.style.cursor ='pointer'
}

function getTagTdValue(target) {
    // Ambil nama program studi
    var tdText = target.innerText;
    // Ambil uri saat dokumen
    var currentURI = target.baseURI

    // Pisahkan string dengan '/'
    var urlSplit = currentURI.split('/')
    // Hapus nilai terakhir dari array
    urlSplit.pop()

    // Buat ulang uri
    var uriReconstruct = ""
    for (var i = 0; i < urlSplit.length; i++) {
        uriReconstruct += urlSplit[i];
        uriReconstruct += "/"
    }

    // Tambahkan riwayatakreditas/ ke uri
    uriReconstruct += "riwayatakreditasi/"
    // Tambahkan nama program studi ke uri
    uriReconstruct += tdText
    console.log(uriReconstruct)

    // Pindahkan halaman ke target uri
    window.location.assign(uriReconstruct)
}