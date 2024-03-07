var status = $('#status').data('status');
	if (status == "berhasil-tambah-data") {
		Swal.fire({
		    title: 'Berhasil',
		    text: 'Data Barang berhasil ditambahkan',
		    icon: 'success'
		  })
	}