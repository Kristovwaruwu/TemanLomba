$(document).ready(function() {

	$('#post-lomba').bootstrapValidator({
		message: 'This value is not valid',
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
			judul: {
				message: 'Judul lomba tidak valid',
				validators: {
					notEmpty: {
						message: 'Judul tidak boleh kosong'
					},
				}
			},
			kategori: {
				message: 'kategori tidak valid',
				validators: {
					notEmpty: {
						message: 'kategori tidak boleh kosong'
					},
				}
			},
			deskripsi: {
				message: 'deskripsi tidak valid',
				validators: {
					notEmpty: {
						message: 'deskripsi tidak boleh kosong'
					},
				}
			}
		}

})

})